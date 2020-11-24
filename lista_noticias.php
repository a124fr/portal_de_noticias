<?php
session_start();
include_once __DIR__ .'/servico/Bd.php';
include_once __DIR__ .'/servico/Noticia.php';

include_once 'topo_restrito.php';


$noticia = new Noticia();
$lista = $noticia->listarNoticias();

?>

    <div class="container">
    <h1>Lista de Noticías</h1>
    <hr>
        <a href="administracao.php"> < Voltar </a>
        
       <br><br>
       
        
        <a class="btn btn-primary" href="cadastrar_noticia.php" role="button">Incluir</a>
        <br><br>

        <table class="table">
            <tr>
                <th>id</th>
                <th>Título</th>
                <th>Corpo</th>
                <th colspan="2">Ações</th>
            </tr>
            <?php foreach($lista as $linha):?>
            <tr>
                <td><?=$linha['id'];?></td>
                <td><?=$linha['titulo'];?></td>
                <td><?php 
                    $texto = substr($linha['corpo'], 0, 40);
                    echo $texto.'...';?></td>
                <td><a href="">Alterar</a></td>
                <td><a href="">Excluir</a></td>
            </tr>
            <?php endforeach;?>
        </table>
    </div>


<?php
include_once 'rodape_restrito.php';
?>
