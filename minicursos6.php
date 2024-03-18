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
							<h2>MC05 - Introdução à plataforma Java Enterprise Edition(Java EE)</h2></br>
							<div class="img-box"><img src="images/minicursos6.png">
								Responsável: Renan Tateoka.
								</br>Carga Horária: 04 horas.
						        </br>Pré-requisitos: Nenhum.
								</br>Local: Sala 10/Discente I.
								</br>Número de vagas: 35.</div>
							<p class="p1">
							
							
							O desenvolvimento de aplicações corporativas requerem soluções maduras, de
							rápido desenvolvimento e que sejam robustas e escaláveis.
							</br></br>
							A plataforma Java EE oferece uma gama de ferramentas para as mais diversas
							soluções, e cada vez mais o mercado de trabalho busca o profissional que
							sabe qual é a tecnologia certa, para cada problema, e sabe qual é a melhor
							forma de aplicá-la, conhecendo os pontos positivos e negativos de cada
							tecnologia.
							Nesse sentido, o objetivo desse minicurso é abordar de forma superficial as
							principais tecnologias da plataforma Java EE e apontar qual a sua
							finalidade.</br>
							Vamos passar pelos seguintes tópicos:
							</br></br>
							*Recursos Web:*
							JSP</br>
							JSF</br>
							REST/JAX-RS</br>
							Webservices (JAX-WS)
							</br></br>
							*Enterprise*:</br>
							EJB</br>
							JMS</br>
							</br></br>
							*Outros:*</br>
							JDBC</br>
							JAXB</br>
							STAX</br>

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