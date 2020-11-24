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

    public function pesquisarNoticiaPorId($id)
    {
        $sql = $this->conn->prepare("SELECT * FROM blog WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();
        return $sql->fetch(PDO::FETCH_ASSOC);
    }

    public function cadastrarNoticia($titulo, $corpo)
    {
        $sql = $this->conn->prepare("INSERT INTO blog (titulo, corpo) VALUES (:titulo, :corpo)");
        $sql->bindValue(':titulo', $titulo);
        $sql->bindValue(':corpo', $corpo);
        $sql->execute();
    }

    public function alterarNoticia($titulo, $corpo, $id)
    {
        $sql = $this->conn->prepare("UPDATE blog SET titulo = :titulo, corpo = :corpo WHERE id = :id");
        $sql->bindValue(':titulo', $titulo);
        $sql->bindValue(':corpo', $corpo);
        $sql->bindValue(':id', $id);
        $sql->execute();
    }

    public function excluirNoticia($id_noticia)
    {
        $sql = $this->conn->prepare("DELETE FROM blog WHERE id = :id");
        $sql->bindValue(':id', $id_noticia);
        $sql->execute();        
    }
}