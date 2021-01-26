<?php 
require __DIR__ . '/../inicio-html.php';
?>
<html>
<section class="pagina-login text-white">
<div class="form">
<h2 class="text-center text-white" style="margin-bottom:50px;">Crie sua conta</h2>
    <div class="container">
    <?php if(isset($_SESSION['mensagem'])) : ?>
        <div class='alert alert-<?php echo $_SESSION["tipo_mensagem"]?>'>
            <?= $_SESSION['mensagem']; ?>
        </div>
            <?php
            unset($_SESSION['tipo_mensagem']);
            unset($_SESSION['mensagem']);
        endif;
            ?>
        <form action="/realiza-cadastro" method="POST">
            <div class="form-group text-left">
                <label for="nome">Nome:</label>
                <input require type="text" name="nome" class="form-control" id="nome" placeholder="Digite seu nome">
            </div>
            <div class="form-group text-left">
                <label for="email">Email:</label>
                <input require type="email" name="email" class="form-control" id="email" placeholder="Digite seu email">
            </div>
            <div class="form-group text-left">
                <label for="senha">Senha:</label>
                <input require type="password" name="senha" class="form-control" id="senha" placeholder="Digite sua senha">
            </div>
            <button type="submit" class="btn btn-danger">Criar conta</button>
        </form>
    </div>
</div>
</section>
</html>
<?php 
require __DIR__ . '/../fim-html.php';
?>
