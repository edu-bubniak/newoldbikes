<?php 
require __DIR__ . '/../inicio-html.php';
?>
<html>
    <div class="container">
    <h1>Gerando Anuncio</h1>
    <?php if(isset($_SESSION['mensagem'])) : ?>
        <div class='alert alert-<?php echo $_SESSION["tipo_mensagem"]?>'>
            <?= $_SESSION['mensagem']; ?>
        </div>
            <?php
            unset($_SESSION['tipo_mensagem']);
            unset($_SESSION['mensagem']);
        endif;
            ?>
        <form method="POST" action='/oldbikes-upload' enctype="multipart/form-data">
                <div class="form-group text-left">
                    <label for="Titulo">Título:</label>
                    <input require type="text" name="titulo" class="form-control" id="titulo" placeholder="Título">
                </div>
                <div class="form-group text-left">
                    <label for="descricao">Descrição:</label>
                    <input require type="text" name="descricao" class="form-control" id="descricao" placeholder="Descrição">
                </div>
                <div class="form-group text-left">
                    <label for="preco">Preço:</label>
                    <input require type="text" name="preco" class="form-control" id="preco" placeholder="Preço">
                </div>
                Foto1: <input type="file" name="data1">
                Foto2: <input type="file" name="data2">
                Foto3: <input type="file" name="data3">
                <button name="btn">Enviar</button>
        </form>    
    </div>    
</html>
        <?php 
require __DIR__ . '/../fim-html.php';
?>
    

    