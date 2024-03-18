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
					$palestras = 1;
					include "menu_palestras.php";
					
					?>
				</ul>
				<div class="inside1">
					<div class="wrap row-2">
						
						
							<h2>Telecomunicações e TI a Convergência gerando oportunidades</h2></br><h2 style="font-size: 20px;">Carlos Henrique Dias</h2><h2 style="font-size: 17px;">Hewlett Packard (HP)</h2></br></br>
							<p class="p1"></p>
							<div class="img-box"><img src="images/palestras1.png">Serviços convergentes representam muito mais que coexistência tecnológica. Os serviços prestados pelas operadoras de telecomunicações dependem cada vez mais de uma infraestrutura de TI eficiente e os serviços de nova geração se apoiam, desde sua concepção até seu lançamento no mercado, em conhecimento de TI especializado, gerando oportunidades profissionais e de negócios aos provedores de soluções para esse mercado em ebulição.</div>
							<p class="p1"><h2 style="font-size: 20px;">Biografia:</h2></br>Carlos Henrique Dias é gerente para Américas de soluções para OSS (Operating Support Systems) na HP (Hewlett Packard). Possui experiência de 27 anos em projetos e consultoria em telecomunicações, tendo liderado projetos na maior parte dos países americanos (Argentina, Brasil, Chile, Colombia, Costa Rica, Equador, Jamaica, México, Guatemala, Estados Unidos e Canadá).Além de ter atuado como consultor senior em projeto nos Emirados Árabes (Dubai). Graduado em Engenharia Eletrônica (1985) e Mestrado em Automação (1992) pela UNICAMP. Obteve em 2008 a certificação de IT Master Architect pelo The Open Group</p>
							<p class="p1"><h2 style="font-size: 20px;">Data: 23/10/2012  <?php for($i=0;$i<30;$i++){echo "&nbsp;";} ?> 	 Local: Auditório <?php for($i=0;$i<30;$i++){echo "&nbsp;";} ?> 	 Horário: 19h30</h2></p>
							
					
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