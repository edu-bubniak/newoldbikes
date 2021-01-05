<?php 
require __DIR__ . '/../inicio-html.php';
?>
<html>
<section class="pagina-login text-white">
<div class="form">
    <div class="container">
        <form>
        <div class="form-group text-left">
                <label for="exampleInputEmail1">Nome:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu nome">
            </div>
            <div class="form-group text-left">
                <label for="exampleInputEmail1">Email:</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu email">
            </div>
            <div class="form-group text-left">
                <label for="exampleInputPassword1">Senha:</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Digite sua senha">
            </div>
            <button type="submit" class="btn btn-danger">Entrar</button>
        </form>
    </div>
</div>
</section>
</html>
<?php 
require __DIR__ . '/../fim-html.php';
?>
