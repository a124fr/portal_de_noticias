<?php
include_once __DIR__ .'/servico/Bd.php';
include_once __DIR__ .'/servico/Noticia.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Portal de Notícias</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-reboot.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
  </head>
  <body> 
  <nav class="navbar navbar-dark bg-dark">
    <div class="container d-flex flex-column flex-md-row justify-content-between">    
      <a class="navbar-brand" href="#">
        <img src="assets/images/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
        <span> Portal de Notícias </span>
      </a>

      <div class="my-2 my-lg-0">
          <a class="text-white" href="login.php">Acesso Restrito</a>
      </div>
    </div>
  </nav>
  <div class="container">
  
  <?php 
   $noticia = new Noticia();
   $lista = $noticia->listarNoticias();
  
   if($lista):
  ?>
  <?php foreach($lista as $linha): ?>
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><?=$linha['titulo'];?></h5>      
      <p class="card-text"><?=$linha['corpo'];?></p>      
    </div>
  </div>  
  <?php 
      endforeach;
    endif;    
  ?>

  </div>  
    
</body>
</html>