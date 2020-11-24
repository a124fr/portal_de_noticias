<?php

include_once __DIR__ .'/servico/Bd.php';
include_once __DIR__ .'/servico/Noticia.php';

echo "<pre>";
print_r($_POST);

$titulo = $_POST['titulo'];
$corpo = $_POST['corpo'];

$noticia = new Noticia();

if(!empty($_POST['id'])) {
    $id = $_POST['id'];
    $msg = "A alteração foi realizado com sucesso";
    $noticia->alterarNoticia($titulo, $corpo, $id);
} else {    
    $msg = "O cadastro foi realizado com sucesso";
    $noticia->cadastrarNoticia($titulo, $corpo);    
}

header("Location: lista_noticias.php?msg=".$msg);
exit;
