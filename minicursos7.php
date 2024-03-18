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
							<h2>MC08 - OpenCV (Open Source Computer Vision Library): Teoria e prática</h2></br>
							<div class="img-box"><img src="images/minicursos7.png">
								Responsável: Vander Freitas, Helder Cesar.
								</br>Carga Horária: 08 horas.
						        </br>Pré-requisitos: Conhecimentos básicos de linguagem C/C++.
								</br>Local: Sala 10/Discente I.
								</br>Número de vagas: 35.</div>
							<p class="p1">
							
							Este minicurso tem por objetivo apresentar a biblioteca OpenCV através do desenvolvimento
							de exemplos práticos de processamento digital de imagens. Inicialmente serão mostrados
							alguns softwares desenvolvidos utilizando a biblioteca, e depois serão apresentadas a origem
							do OpenCV, licença de uso, plataformas suportadas, acesso à documentação oficial e alguns
							dados estatísticos. Em seguida serão discutidos seus módulos e exemplos de sistemas que
							podem ser construídos com esta tecnologia. Terminada a fase teórica, os participantes
							poderão aplicar o que aprenderam por meio da implementação de alguns exercícios,
							utilizando o IDE CodeBlocks e o OpenCV na versão 2.3. Estes exercícios consistirão em
							operações básicas de manipulação de imagens, partindo com a abertura e salvamento de uma
							imagem no disco, e operações como: reamostragem, limiarização, detecção de bordas (Sobel,
							Laplaciano, Canny), aplicação de filtros de suavização (Média, Mediana, Gaussiana), conversão
							de sistemas de cores, operações no histograma, detecção de linhas e círculos, e operações
							morfológicas. Além disso, serão feitos alguns experimentos utilizando combinações destas
							técnicas. Vale ressaltar que este minicurso é uma ótima oportunidade para as pessoas que tem
							interesse na área de Visão Computacional.
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