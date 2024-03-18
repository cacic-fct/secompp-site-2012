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
							<h2>MC10 - Programação de Microcontroladores</h2></br>
							<div class="img-box"><img src="images/minicursos8.png">
								Responsável: Maximilian Jaderson de Melo, Almir Olivette Artero.
								</br>Carga Horária: 08 horas.
						        </br>Pré-requisitos: Conhecimentos de Programação com a Linguagem C.
								</br>Local: Sala 06/Discente I.
								</br>Número de vagas: 35.</div>
							<p class="p1">
								
							Conteúdo Programático (Tópicos do Programa)</br></br> 
							1 – Introdução aos microcontroladores </br>
							2 – Arquitetura (PIC 16F84) </br>
							3 – Comandos em Assembly </br>
							4 – Programação em C </br>
							5 – Simulador Proteus </br>
							6 – Experimentos </br></br>
							</br></br>
							Este curso introduz os microcontroladores, que tem sido usados para o desenvolvimento de sistemas embarcados. Neste 
							curso é abordado o modelo PIC 16F84 da Microchip, porém, os conhecimentos adquiridos permitem uma fáciol migração para 
							outros modelos de microcontroladores. São apresentados os detalhes mínimos da arquitetura deste modelo, que são 
							necessários para se compreender a sua programação, tanto em baixo nível (Assembly), como em alto nível (C, Basic ou 
							Java). Durante este minicurso será apresentado o programa Proteus, que consiste em um simulador de circuitos eletrônicos, 
							capaz de executar programas feitos para microcontroladores. Também será apresentada uma aplicação em hardware com o 
							circuito integrado PIC16F84, mostrando todo o processo de desenvolvimento, que inclui o projeto eletrônico, a escrita do 
							programa e a sua gravação no chip.

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