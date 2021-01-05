<?php 
require __DIR__ . '/../inicio-html.php';
?>
<html>
<section class="pagina-login text-center text-white">
<div class="form">
<h2 class="text-center text-white" style="margin-bottom:50px;">Faça seu login</h2>
    <div class="container">
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Email:</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Senha:</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Digite sua senha">
            </div>
            <button type="submit" class="btn btn-danger">Entrar</button>
            <p><b>Ainda não tem uma conta?<a href="/oldbikes-cadastro"> Crie uma agora</a><b></p>
        </form>
    </div>
</div>
</section>
</html>
<?php 
require __DIR__ . '/../fim-html.php';
?>
