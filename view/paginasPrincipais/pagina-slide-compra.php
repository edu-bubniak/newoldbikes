<?php
 require __DIR__ . '/../inicio-html.php'; 
 $foto1 = $anuncio->getFoto1();
 $foto2 = $anuncio->getFoto2();
 $foto3 = $anuncio->getFoto3();
?>
    <main>
            <div class="fotos">
                <div class="row">
                    <div class="imagem col-sm-4">
                        <img src="data:image/jpg;base64,<?= base64_encode($foto2)?>" class="img-fluid" alt="Responsive image">
                    </div>
                    <div class="imagem col-sm-4">
                        <img src="data:image/jpg;base64,<?= base64_encode($foto1)?>" class="img-fluid" alt="Responsive image">
                    </div>
                    <div class="imagem col-sm-4">
                        <img src="data:image/jpg;base64,<?= base64_encode($foto3)?>" class="img-fluid" alt="Responsive image">
                    </div>
                </div>
            </div>
                <div class="container">
                    <div class="row">

                        <div style="margin-top:25px;" class="anuncio-descricao text-center col-sm-4">
                            <h2>Ano: </h2>
                            <h4>Descrição: </br><?php echo $anuncio->getDescricao()?></h4>
                        </div>

                        <div style="margin-top:25px;" class="col-sm-4 anuncio-titulo text-center">
                            <h1><?= $anuncio->getTitulo(); ?></h1>
                            <h2>R$<?= $anuncio->getPreco();?></h2>
                            <input type="submit" class="btn btn-danger" value="Adicionar ao carrinho">
                        </div>

                            <div style="margin-top:25px;" class="api-correio col-sm-4">
                                <div style="margin-bottom:25px;" class="text-left form-group">
                                    <label for="preco">CEP:</label>
                                    <input require type="text" name="cep" class="form-control" id="cep" placeholder="CEP">
                                    <input style="margin-top:25px;" type="submit" class="btn btn-danger" value="Calcular">
                                </div>
                            </div>  
                    </div>

                </div><!--container-->


    </main>
<?php require __DIR__ . '/../fim-html.php'; ?>