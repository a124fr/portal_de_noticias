<?php
session_start();

$_SESSION = array(); // atribui array vazio para as variáveis de sessão.
session_unset(); // libera todas as variáveis atualmente registradas na sessão. As variáveis são apagadas.
session_destroy(); // encerrra a sessão.

echo "<script>
		location.href = 'index.php';
	  </script>";