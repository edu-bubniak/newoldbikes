<?php 
require __DIR__ . '/../inicio-html.php';
?>
<html lang="br">
<body>

  <div class="d-flex" id="wrapper" style="margin-left: 3px;">
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><h2>Filtre por preço</h2></div>
      <div class="list-group list-group-flush">
	  <div class="search1">
					<div class="barra-preco">
						<div class="barra-preco-fill"></div><!--barra-preco-fill-->
						<div class="pointer-barra"></div>
					</div><!--barra-preco-->
					<div class="valor-pesquisa">
						<p>R$0,00</p>
						<p>R$7.000,00</p>
						<div class="clear"></div>
					</div><!--valor-pesquisa-->
				</div><!--search1-->

				<div class="search2">
					<h2>Filtre por ano</h2>
					<form>
					<div class="form-venda-wraper">
						<input type="checkbox" id="item1" />
						<label for="item1"></label>
						<span>Todas as décadas</span>
					</div><!--form-venda-wraper-->


					<div class="form-venda-wraper">
						<input type="checkbox" id="item2" />
						<label for="item2"></label>
						<span>1960 - 1970</span>
					</div><!--form-venda-wraper-->


					<div class="form-venda-wraper">
						<input type="checkbox" id="item2" />
						<label for="item2"></label>
						<span>1971 - 1990</span>
					</div><!--form-venda-wraper-->

					<div class="form-venda-wraper">
						<input type="checkbox" id="item2" />
						<label for="item2"></label>
						<span>1991 - 2000</span>
					</div><!--form-venda-wraper-->
					</form>
				</div><!--search2-->
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
		<div class="row">
		
        <?php foreach ($anuncios as $anuncio): ?>
		<?php
			$foto = $anuncio->getFoto1();	
		?>
			<html>
			<div class="col-lg-3">
				<div class="card" style="width: 18rem;">
						<img class="card-img-top" src="data:image/jpg;base64,<?= base64_encode($foto)?>" alt="Imagem de capa do card">
						<div class="card-body">
							<h5 class="card-title">R$<?= $anuncio->getPreco();?></h5>
							<p class="card-text"><?= $anuncio->getTitulo();?><br /><?= $anuncio->getDescricao();?></p>
							<a href="/oldbikes-compra?id=<?= $anuncio->getId();?>" class="btn btn-danger">Comprar</a>
							
						</div>
				</div>
			</div>
			</html>
		<?php endforeach ?>

			
			
			
					
		</div>
      
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

</html>

<?php 
require __DIR__ . '/../fim-html.php';
?>
