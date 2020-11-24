<?php

class Usuario extends Bd {

    public function verificarLogin($login, $senha) {
                
        if(!empty($login) && !empty($senha))  {
            $sql = "SELECT id, login, senha FROM usuario WHERE login = :login AND senha = :senha";

            $result = $this->conn->prepare($sql);
            $result->bindValue(":login", $login);
            $result->bindValue(":senha", $senha);
            $result->execute();

            if($result->rowCount() > 0) {
                $array = $result->fetch(PDO::FETCH_ASSOC);                
                return $array;                
            }
        }

        return false;
    }
}