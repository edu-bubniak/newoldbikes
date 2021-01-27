<?php
 require __DIR__ . '/../inicio-html.php'; 
?>
    <main>
            <div class="fotos">
                <div class="row">
                    <div class="imagem col-sm-4">
                        <img src="../imagens/foto1.jpeg" class="img-fluid" alt="Responsive image">
                    </div>
                    <div class="imagem col-sm-4">
                        <img src="../imagens/foto1.jpeg" class="img-fluid" alt="Responsive image">
                    </div>
                    <div class="imagem col-sm-4">
                        <img src="../imagens/foto1.jpeg" class="img-fluid" alt="Responsive image">
                    </div>
                </div>
            </div>
                <div class="container">
                <h1 class="text-center"><?= $anuncio->getTitulo(); ?></h1>

                <div class="row">
                    <div class="api-correio col-sm-4"></div>
                    <div class="descricao col-sm-4">
                        <h1><?php $anuncio->getPreco(); ?></h1>
                        <h3><?= $anuncio->getDescricao(); ?></h3>
                        <h2><?= $anuncio->getPreco(); ?></h2>
                        <a href=#><button class="text center btn btn-danger">Adicionar ao carrinho</button></a>
                    </div>

                </div>

                    
                </div>


    </main>
<?php require __DIR__ . '/../fim-html.php'; ?>