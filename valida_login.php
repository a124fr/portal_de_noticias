<?php

if(isset($_SESSION['login'])) {
	echo $_SESSION['login'];
} else {
	echo "<script>
			alert('Vocẽ não está logado!')
		  </script>";
	echo "<script>
			location.href = 'login.php';
		  </script>";
}

