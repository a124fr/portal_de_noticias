<?php

include_once __DIR__ .'/servico/Bd.php';
include_once __DIR__ .'/servico/Noticia.php';

$id_noticia = $_GET['id'];

$noticia = new Noticia();
$noticia->excluirNoticia($id_noticia);

$msg = "A notícia foi excluído com sucesso!";
header("Location: lista_noticias.php?msg=".$msg);
exit;