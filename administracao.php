<?php
session_start();
require 'topo_restrito.php';
?>
    <div class="container">
        <div>  
            <h1>Bem-vindo <?php echo $_SESSION['login']; ?></h1>
        
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" href="lista_noticias.php">Cadastro Notícia</a>
                </li>
            </ul>

            <hr>
            <br>
                    
        </div>
    </div>

<?php
require 'rodape_restrito.php';
?>
