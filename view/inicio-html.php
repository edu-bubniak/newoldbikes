<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>OldBikes - Home</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="width=device-width;initial-scale=1.0;maximum-scale=1.0">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700&display=swap" rel="stylesheet"> 
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-yellow">
		<div class="container">

		    <a class="navbar-brand" href="/oldbikes-home"><img class="logo-oldbikes" src="../imagens/logo-definitiva.png"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		    </button>

		    <div class="collapse navbar-collapse" id="navbarSupportedContent">

				<ul class="navbar-nav mr-auto">
			      <li class="nav-item ">
			        <a class="nav-link" href="/oldbikes-home">Home <span class="sr-only"></span></a>
			      </li>
			      <li class="nav-item ">
			        <a class="nav-link" href="/oldbikes-loja">Loja <span class="sr-only"></span></a>
			      </li>
			      <li class="nav-item ">
			        <a class="nav-link" href="/oldbikes-sobre">Sobre <span class="sr-only"></span></a>
			      </li>
			      <li class="nav-item ">
			        <a class="nav-link" href="#">Contato <span class="sr-only"></span></a>
			      </li>
			    </ul>
				
			    <form class="form-inline my-2 my-lg-0">
			      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Buscar <img src="../icons/search.svg" class="search"></button>
			    </form>

				<?php
					if(!isset($_SESSION['logado'])) {
						echo "<a href='/oldbikes-login'><button class='btn btn-outline-danger my-2 my-sm-0 button-login logout' type='submit'>Faça Login</button></a>";
					} else {
						echo "<a href='/oldbikes-gerar-anuncio'><button class='btn btn-danger my-2 my-sm-0 text-white logout' type='submit'>Criar anuncio</button></a>";
						echo "<a href='/logout'><button class='btn btn-danger my-2 my-sm-0 text-white logout' type='submit'>Sair</button></a>";
					}
				?>

		 	</div>

		</div>
		</nav>

	</header>
