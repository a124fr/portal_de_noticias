<?php

class Noticia extends Bd 
{
    public function listarNoticias() 
    {
        $array = [];
        $resultado = $this->conn->query("SELECT * FROM blog");

        while($linha = $resultado->fetch(PDO::FETCH_ASSOC)) {            
            $array[] = $linha;
        }
        
        return $array;
    }
}