<!DOCTYPE html>
<html lang="en">
<head>

<meta http-equiv="X-UA-Compatible" content="IE=8" />












		<!-- include jQuery + carouFredSel plugin -->
		<script type="text/javascript" language="javascript" src="cufon-yui.js"></script>
		
		<style type="text/css" media="all">
			<!--[if gte IE 9]>
			<script type="text/javascript">
				Cufon.set('engine', 'canvas');
			</script>
		<![endif]-->
		</style>
		
<title><?php include("inc/titulo.php"); ?></title>

<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_600.font.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<!--[if lt IE 7]>
<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
<![endif]-->
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
</head>
<body id="page5">
<div class="tail-top1">
<!-- header -->
	<header>
		<div class="container">
			<div class="header-box">
				<div class="left">
					<div class="right">
						<nav>
							<?php
							$page = 4;	
							include("inc/menu.php");									
							?>
						</nav>
						
					</div>
				</div>
			</div>
			<span class="top-info"><img src="images/logo.png" width="200px" /></span>
			
		</div>
	</header>
	<!-- content -->
	<section id="content">
		<div class="container">
			<div class="inside">
				<div id="slogan">
					
				</div>
				
				<div class="inside1">
					<div class="wrap row-2">
						<article class="col-1">
							<h2>Minicursos</h2></br>
							<ul class="list1">
								<?php
								
								include "menu_minicursos.php";
								
								?>
							</ul>
							</article>
						<article class="col-2">
							<h2>MC06 - Introdução à Programação para Android</h2></br>
							<div class="img-box"><img src="images/minicursos5.png">
								Responsáveis: André Henrique Silva, Renaro de Paula Santos e Thaisa Aline B. Correia.
								</br>Carga Horária: 08 horas.
						        </br>Pré-requisitos: Programação orientada a objetos.
								</br>Local: Sala 10/Discente I.
								</br>Número de vagas: 35.</div>
							<p class="p1">
								
								O mini-curso abordará uma introdução à programação uma das principais plataformas
móveis do mercado, o Android.</br></br>

Serão apresentados os conceitos básicos da plataforma, o funcionamento do sistema, a
classe Activity e exemplos práticos, que servirão como base para a posterior implementação
de aplicações. Apresentaremos como o Android gerencia o Layout através do XML e logo em
seguida será proposto uma atividade para os alunos adicionarem 3 botões na tela juntamente
com um TextView, posicionando-os corretamente na tela. Em seguida, mostraremos como
receber eventos de toque nos botões e como acessar os valores do TextView. Mostraremos os
passos necessários para criação de outras activities e como criar uma transição de uma
Activity para outra. Em seguida implementaremos uma aplicação simples que aborde os
conceitos explicados na primeira parte. Esta aplicação será um jogo que envolverá adição de
imagens na tela, eventos de toque, acesso ao banco de dados e gerenciamento de Layout.
Consiste em um simples jogo da memória no qual possuirá um número fixo de quatro cartas.
Será armazenado no banco o nome do jogador que conseguir resolver o jogo em um menor
número de jogadas.</br></br>

A implementação em Android, será feita no ambiente de desenvolvimento Eclipse. Ao
decorrer das atividades, também iremos apresentar o ambiente de desenvolvimento, explicar
como iniciar um novo projeto, como acessar as pastas do projeto dentro do ambiente, como
criar e manipular o emulador do dispositivo móvel no computador, entre outras dúvidas dos
participantes.

							</p>
						</article>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<!-- aside -->
<aside>
	<div class="container">
		<div class="inside">
			<?php
			include "inc/patrocinios.php";
			?>
		</div>
	</div>
</aside>
<!-- footer -->
<footer>
	<div class="container">
		Desenvolvido por <a class="new_window" href="http://www2.fct.unesp.br/empresajr/ejcomp/" target="_blank" rel="nofollow">EJCOMP - Empresa Júnior da Computação</a><br/>
	</div>
</footer>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>