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
					$palestras = 4;
					include "menu_palestras.php";
					
					?>
				</ul>
				<div class="inside1">
					<div class="wrap row-2">
						
							<h2>Recrutamento e Seleção - Aspectos relevantes no processo seletivo</h2></br><h2 style="font-size: 20px;">Joana Bronze</h2><h2 style="font-size: 17px;">Meta RH - Consultoria em Recursos Humanos</h2></br></br>
							
							<div class="img-box"><img src="images/palestras4.png">

							<b>Respeito à diversidade</b></br>
								
							Acreditar que as diferenças individuais é que trazem maiores competências e resultados, pois o reconhecimento do talento humano não é só um diferencial em uma organização, mas é a conquista do sucesso de qualquer negócio. É através delas que conseguimos alcançar nossos objetivos, pois são responsáveis pela satisfação de nossos clientes.
							</br>
							<b>Ética e Idoneidade</b></br>
								
							
							Princípio de todas as nossas ações e relações que asseguram a nossa credibilidade e confiança.
							</br>
							<b>Transparência</b></br>
							
							É o alicerce para realização de bons negócios e constantes parcerias.
							
							</div>
							<p class="p1">

							<b>Perenidade nas relações</b></br>
							
							A continuidade e perpetuidade de nossos atos se refletem nos 30 anos de nossa existência.</br></br>
							
							<b>Objetivos compartilhados e sinérgicos</b></br>
							
							Todo o nosso processo é negociado em parceria e os resultados só surgem pela união de competências somadas.
							
							</p>
							<p class="p1"><h2 style="font-size: 20px;">Biografia:</h2> </br>Psicóloga, desde 2006, atuando na área de RH </br></br>

Experiência profissional focada em RH, principalmente no processo de recrutamento e seleção, trabalhando como consultora para todas as funções e níveis de trabalho.</p>
							<p class="p1"><h2 style="font-size: 20px;">Data: 26/10/2012  <?php for($i=0;$i<30;$i++){echo "&nbsp;";} ?> 	 Local: Auditório <?php for($i=0;$i<30;$i++){echo "&nbsp;";} ?> 	 Horário: 10h20</h2></p>
							
					
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