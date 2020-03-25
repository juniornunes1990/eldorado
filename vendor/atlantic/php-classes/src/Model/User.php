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
}

?>