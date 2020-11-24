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
    <?php if(!empty($_GET['msg'])):?>
        <div class="alert alert-success" role="alert">
            <?php echo $_GET['msg']; ?>
        </div>
    <?php endif;?>
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
            <?php 
            if($lista):
                foreach($lista as $linha):?>
            <tr>
                <td><?=$linha['id'];?></td>
                <td><?=$linha['titulo'];?></td>
                <td><?php 
                    $texto = substr($linha['corpo'], 0, 40);
                    echo $texto.'...';?></td>
                <td><a href="alterar_noticia.php?id=<?=$linha['id'];?>">Alterar</a></td>                
                <td><a href="excluir_noticia.php?id=<?=$linha['id'];?>" onclick="return confirm('Deseja Excluir a notícia código: <?=$linha['id'];?>?')">Excluir</a></td>
            </tr>
            <?php 
                endforeach;
            else:    
            ?>            
            <tr>
                <td colspan="4">Nenhuma noticía cadastrada.</td>
            </tr>
            <?php 
            endif;
            ?>
        </table>
    </div>


<?php
include_once 'rodape_restrito.php';
?>

<script>
    function excluir_noticia(id) {
        alert(id);
    }
</script>