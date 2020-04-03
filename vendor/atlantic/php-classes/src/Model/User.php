<?php
namespace Atlantic\Model;

use \Atlantic\Model;
use \Atlantic\DB\Sql;
use \Atlantic\Mailer;

class User extends Model {

    const SESSION = "User";
	const SECRET = "Atlantic_Secreto";
	const SECRET_IV = "Atlantic_Secreto_IV";
	const ERROR = "UserError";
	const ERROR_REGISTER = "UserErrorRegister";
	const SUCCESS = "UserSucesss";

    public static function getFromSession()
	{

		$user = new User();

		if (isset($_SESSION[User::SESSION]) && (int)$_SESSION[User::SESSION]['iduser'] > 0) {

			$user->setData($_SESSION[User::SESSION]);

		}

		return $user;

	}

	public static function checkLogin($nivel = true)
	{

		if (
			!isset($_SESSION[User::SESSION])
			||
			!$_SESSION[User::SESSION]
			||
			!(int)$_SESSION[User::SESSION]["iduser"] > 0
		) {
			//Não está logado
			return false;

		} else {

			if ($nivel === true && (bool)$_SESSION[User::SESSION]['nivel'] === true) {

				return true;

			} else if ($nivel === false) {

				return true;

			} else {

				return false;

			}

		}

	}

    public static function login($username, $password)  {

        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_users WHERE username = :USERNAME", array(
            ":USERNAME"=>$username 
        ));

        if(count($results) === 0){
            throw new \Exception("Usuário inexistente ou senha inválida.");
        }

        $data = $results[0];

        if(password_verify($password, $data["password"]) === true){
            
            $user = new User();

            $user->setData($data);

            $_SESSION[User::SESSION]= $user->getValues();
            
            return $user;

        } else {

            throw new \Exception("Usuário inexistente ou senha inválida.");

        }

    }

    public static function verifyLogin($nivel = true)
	{

		if (!User::checkLogin($nivel)) {

			if ($nivel) {
				header("Location: /admin/login");
			} else {
				header("Location: /login");
			}
			exit;

		}

	}

    public static function logout(){

        $_SESSION[User::SESSION] = NULL;

    }

    public static function listAll(){

        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_users a INNER JOIN tb_persons b USING(idperson) ORDER BY b.name");

    }

	public function save()
	{

		$sql = new Sql();

		$results = $sql->select("CALL sp_users_save(:name, :username, :password, :email, :phone, :nivel)", array(
			":name"=>utf8_decode($this->getname()),
			":username"=>$this->getusername(),
			":password"=>$this->getpassword(),
			":email"=>$this->getemail(),
			":phone"=>$this->getphone(),
			":admin"=>$this->getadmin()
		));

		$this->setData($results[0]);

	}

    public function get($iduser){

        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_users a INNER JOIN tb_persons b USING(idperson) WHERE a.iduser = :iduser", 
        array(
            ":iduser"=>$iduser
        ));

        $this->setData($results[0]);

    }

    public function update(){

        $sql = new Sql();

        $results = $sql->select("CALL sp_usersupdate_save(:iduser, :name, :username, :password, :email, :phone, :nivel)", 
        array(
            ":iduser"=>$this->getiduser(),
            ":name"=>$this->getname(),
            ":username"=>$this->getusername(),
            ":password"=>$this->getpassword(),
            ":email"=>$this->getemail(),
            ":phone"=>$this->getphone(),
            ":nivel"=>$this->getnivel()

        ));

        $this->setData($results[0]);

    } 

    public function delete(){
        
        $sql = new Sql();

        $sql->query("CALL sp_users_delete(:iduser)", array(
            ":iduser"=>$this->getiduser()
        ));

    }

    public static function getPasswordHash($password)
	{

		return password_hash($password, PASSWORD_DEFAULT, [
			'cost'=>12
		]);

    }
    
    public static function getForgot($email, $nivel = true)
	{

		$sql = new Sql();

		$results = $sql->select("
			SELECT *
			FROM tb_persons a
			INNER JOIN tb_users b USING(idperson)
			WHERE a.email = :email;
		", array(
			":email"=>$email
		));

		if (count($results) === 0)
		{

			throw new \Exception("Não foi possível recuperar a senha.");

		}
		else
		{

			$data = $results[0];

			$results2 = $sql->select("CALL sp_userspasswordsrecoveries_create(:iduser, :ip)", array(
				":iduser"=>$data['iduser'],
				":ip"=>$_SERVER['REMOTE_ADDR']
			));

			if (count($results2) === 0)
			{

				throw new \Exception("Não foi possível recuperar a senha.");

			}
			else
			{

				$dataRecovery = $results2[0];

				$code = openssl_encrypt($dataRecovery['idrecovery'], 'AES-128-CBC', pack("a16", User::SECRET), 0, pack("a16", User::SECRET_IV));

				$code = base64_encode($code);

				if ($nivel === true) {

					$link = "http://www.eldoradocamping.com.br/admin/forgot/reset?code=$code";

				} else {

					$link = "http://www.eldoradocamping.com.br/forgot/reset?code=$code";
					
				}				

				$mailer = new Mailer($data['email'], $data['name'], "Redefinir senha da Eldorado Camping", "forgot", array(
					"name"=>$data['name'],
					"link"=>$link
				));				

				$mailer->send();

				return $link;

			}

		}

	}

	public static function validForgotDecrypt($code)
	{

		$code = base64_decode($code);

		$idrecovery = openssl_decrypt($code, 'AES-128-CBC', pack("a16", User::SECRET), 0, pack("a16", User::SECRET_IV));

		$sql = new Sql();

		$results = $sql->select("
			SELECT *
			FROM tb_userspasswordsrecoveries a
			INNER JOIN tb_users b USING(iduser)
			INNER JOIN tb_persons c USING(idperson)
			WHERE
				a.idrecovery = :idrecovery
				AND
				a.dtrecovery IS NULL
				AND
				DATE_ADD(a.dtregister, INTERVAL 1 HOUR) >= NOW();
		", array(
			":idrecovery"=>$idrecovery
		));

		if (count($results) === 0)
		{
			throw new \Exception("Não foi possível recuperar a senha.");
		}
		else
		{

			return $results[0];

		}

	}
	
	public static function setFogotUsed($idrecovery)
	{

		$sql = new Sql();

		$sql->query("UPDATE tb_userspasswordsrecoveries SET dtrecovery = NOW() WHERE idrecovery = :idrecovery", array(
			":idrecovery"=>$idrecovery
		));

	}

	public function setPassword($password){

		$sql = new Sql();

		$sql->query("UPDATE tb_users SET password = :password WHERE iduser = :iduser", array(
			":password"=>$password,
			":iduser"=>$this->getiduser()
		));

	}

}

?>