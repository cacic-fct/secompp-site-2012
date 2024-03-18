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
<body id="page2">
<div class="tail-top1">
	<!-- header -->
	<header>
		<div class="container">
			<div class="header-box">
				<div class="left">
					<div class="right">
						<nav>
							<?php
							$page = 3;
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
				<ul class="banners wrapper">
					
					<?php
					$palestras = 0;
					include "menu_palestras.php";
					?>
				</ul>
				<div class="inside1">
					<div class="wrap row-2">
						
								
							<h2>Inovação e Estratégia em Empresas Startups</h2></br><h2 style="font-size: 20px;">Rafael Carlos Alcântara Tamamaru</h2><h2 style="font-size: 17px;">Geobuilder - Tecnologia em Geoinformação</h2></br></br>
							<div class="img-box"><img src="images/palestras.png">

							
							Objetivos:</br></br>
							- Despertar espírito e vontade empreendedora;</br>
							- Incentivar o pensamento inovador;</br>
							- Conhecimento prévio das dificuldades a encontrar ao criar uma empresa.</br>

							</div>
							<p class="p1">
							
							Abordagem dos tópicos:</br></br>
							- Relato sobre minha vida profissional e acadêmica;</br>
							- Pontos críticos na criação de uma Empresa Startup;</br>
							- Planejamento financeiro;</br>
							- Planejamento Estratégico;</br>
							- Projetos de inovação e apoio financeiro à inovação.</br>
							</p>
							<p class="p1"><h2 style="font-size: 20px;">Biografia:</h2></br>
							
							- Tecnologia em Desenvolvimento Web (FIPP/UNOESTE – 2006)</br>
							- Engenharia Cartográfica (FCT/UNESP – 2009)</br>
							- Residência em Software com ênfase em Business Intelligence (Universidade Estadual de Londrina – 2009).</br>
							- MBA em Gerenciamrento de Projetos (Fundação Getúlio Vargas – 2010) </br>
							</p>
							<p class="p1"><h2 style="font-size: 20px;">Data: 22/10/2012  <?php for($i=0;$i<30;$i++){echo "&nbsp;";} ?> 	 Local: Auditório <?php for($i=0;$i<30;$i++){echo "&nbsp;";} ?> 	 Horário: 20h00</h2></p>
							
					
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
		<div class="inside">
			Desenvolvido por <a class="new_window" href="http://www2.fct.unesp.br/empresajr/ejcomp/" target="_blank" rel="nofollow">EJCOMP - Empresa Júnior da Computação</a><br/>
			
		</div>
	</div>
</footer>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>