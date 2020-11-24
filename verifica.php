<?php
session_start();

include_once __DIR__ .'/servico/Bd.php';
include_once __DIR__ .'/servico/Usuario.php';

$login=$_POST["login"];
$senha=$_POST["senha"];

$usuario = new Usuario();
$resultado = $usuario->verificarLogin($login, $senha);

if ($resultado) {        
    //$_SESSION["autenticado"]=true;
    $_SESSION["id_usuario"] = $resultado['id'];
    $_SESSION["login"] = $login;
    
    echo "<script>
			location.href='administracao.php'
		  </script>";
    
}else {

    
    echo "<script>
            alert('Login ou senha Incorretos! Digite Novamente!!')
          </script>";
    echo "<script>
            location.href='login.php'
        </script>";    
}
