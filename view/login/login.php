<?php 
require __DIR__ . '/../inicio-html.php';
?>
<html>

<section class="pagina-login text-center text-white">
<div class="form">
<h2 class="text-center text-white" style="margin-bottom:50px;">Faça seu login</h2>
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
        <form action="/realiza-login" method="POST">
            <div class="form-group text-left">
                <label for="email">E-mail:</label>
                <input type="email" require name="email" id="email" class="form-control">
            </div>
            <div class="form-group text-left">
                <label for="senha">Senha:</label>
                <input type="password" require name="senha" id="senha" class="form-control">
            </div>
            <button class="btn btn-danger">
            Entrar
            </button>
            <p><b>Ainda não tem uma conta?<a href="/oldbikes-cadastro"> Crie uma agora</a><b></p>
        </form>
    </div>
</div>
</section>
</html>
<?php 
require __DIR__ . '/../fim-html.php';
?>
