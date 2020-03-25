<?php
namespace Atlantic\Model;

use \Atlantic\Model;
use \Atlantic\DB\Sql;

class User extends Model {

    const SESSION = "User";

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
            !(int)$_SESSION[User::SESSION]["id"] > 0
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

    public function get($id){

        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_users a INNER JOIN tb_persons b USING(idperson) WHERE a.id = :id", 
        array(
            ":id"=>$id
        ));

        $this->setData($results[0]);

    }

    public function update(){

        $sql = new Sql();

        $results = $sql->select("CALL sp_usersupdate_save(:id, :name, :username, :password, :email, :phone, :nivel)", 
        array(
            ":id"=>$this->getid(),
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

        $sql->query("CALL sp_users_delete(:id)", array(
            ":id"=>$this->getid()
        ));

    }

}

?>