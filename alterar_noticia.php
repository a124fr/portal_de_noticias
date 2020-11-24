<?php
session_start();
include_once 'topo_restrito.php';
include_once __DIR__ .'/servico/Bd.php';
include_once __DIR__ .'/servico/Noticia.php';

$id_noticia = $_GET['id'];

$noticia = new Noticia();
$resultado = $noticia->pesquisarNoticiaPorId($id_noticia);

?>
    <div class="container">
    <h1>Alterar notícia</h1>
    <hr>
        <a href="lista_noticias.php"> < Voltar </a>
        
       <br><br>        

        <form method="POST" action="salvar_noticia.php">
          <input type="hidden" name="id" value="<?=$resultado['id'];?>">
          <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" class="form-control" value="<?=$resultado['titulo'];?>" >
          </div>
          <div class="form-group">
            <label for="corpo">Corpo</label>
            <textarea name="corpo" class="form-control"><?=$resultado['corpo'];?></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Salvar</button>
        </form>

    </div>

    
<?php
include_once 'rodape_restrito.php';
?>
