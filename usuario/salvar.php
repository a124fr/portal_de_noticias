<?php

include_once "../servico/Bd.php";

$login=$_GET["login"];
$senha=$_GET["senha"];

if (isset($_GET["id"])) { //atualiza
    $id = $_GET["id"];
    $sql = "update `usuario_3006` set login='$login', senha='$senha' where id='$id' ";
}else { //grava um novo
    $sql = "INSERT INTO `usuario_3006` (`id`, `login`, `senha`) VALUES (NULL, '$login', '$senha')";    
}

$bd = new Bd();
$contador = $bd->exec($sql);

echo "<h1>foi armazenado/atualizado $contador registro</h1>";

?>

<a href="ConsultaUsuario.php">Voltar</a>
