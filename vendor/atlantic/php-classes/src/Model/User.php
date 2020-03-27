<?php
namespace Atlantic\Model;

use \Atlantic\Model;
use \Atlantic\DB\Sql;
use \Atlantic\Mailer;

class User extends Model {

    const SESSION = "User";
    const SECRET = "Atlantic_TecPHP7";

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

    public static function verifyLogin($nivelAdmin = true){
        
        if(
            !isset($_SESSION[User::SESSION])
            ||
            !$_SESSION[User::SESSION]
            ||
            !(int)$_SESSION[User::SESSION]["iduser"] > 0
            ||
            (bool)$_SESSION[User::SESSION]["nivel"] !== $nivelAdmin
        ){

            header("Location: /admin/login");
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

    public function save(){

        $sql = new Sql();

        $results = $sql->select("CALL sp_users_save(:name, :username, :password, :email, :phone, :nivel)", 
        array(
            ":name"=>$this->getname(),
            ":username"=>$this->getusername(),
            ":password"=>$this->getpassword(),
            ":email"=>$this->getemail(),
            ":phone"=>$this->getphone(),
            ":nivel"=>$this->getnivel()
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
    
    public static function getForgot($email){

        $sql = new Sql();

        $results = $sql->select("SELECT * 
        FROM tb_persons a
        INNER JOIN tb_users b USING(idperson)
        WHERE a.email = :email;        
        ", array(
            ":email"=>$email
        ));

        if(count($results) === 0){

            throw new \Exception("Não possível recuperar a senha.");

        }else{

            $data = $results[0];

            $results2 = $sql->select("CALL sp_userspasswordsrecoveries_create(:iduser, :ip)", array(
                ":iduser"=>$data["iduser"],
                ":ip"=>$_SERVER["REMOTE_ADDR"]
            ));

            if(count($results2) === 0){

               $dataRecovery = $results2[0];

               $code = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_128, User::SECRET,$dataRecovery["idrecovery"],
               MCRYPT_MODE_ECB));

               $link = "http://www.eldoradocamping.com.br/admin/forgot/reset?code=$code";

               $mailer = new Mailer($data["email"], $data["name"], "Redefinir Senha da Atlantic Tecnologia", "forgot", array(
					"name"=>$data["name"],
					"link"=>$link
				));

				$mailer->send();

				return $data;

            }

        }

    }

    public static function validaForgotDecrypt($code){

        $idRecovery = mcrypt_decrypt(MCRYPT_RJNDAEL_128, User::SECRET, base64_decode($code), MCRYPT_MODE_ECB);

    }

}

?>