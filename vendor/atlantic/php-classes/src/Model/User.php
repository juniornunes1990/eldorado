<?php
namespace Atlantic\Model;

use \Atlantic\Model;
use \Atlantic\DB\Sql;

class User extends Model {

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

            $user->setiduser($data["id"]);

        } else {

            throw new \Exception("Usuário inexistente ou senha inválida.");

        }

    }
}

?>