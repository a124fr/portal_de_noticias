<?php
session_start();

$login=$_POST["login"];
$senha=$_POST["senha"];


if ($login =="admin" && $senha =="1234") {
    
    $_SESSION["autenticado"]=true;
    
    $html ="
    <html>
        <head><title>Tela de verificação </title></head>
        <body>
         <script>
         window.location.replace('https://aula-php-andre-eppinghaus.000webhostapp.com/20202/3006/menu.php');
         </script>
        </boyd>
    </html>

";    
}else {
    session_destroy ( ) ;
    $html ="
<html>
    <head><title>Tela de verificação </title></head>
    <body>
        <h1>O login é $login e sua senha é $senha e são inválidos</h1>
    </boyd>
</html>

";
    
}



echo $html;
?>