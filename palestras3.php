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
					$palestras = 3;
					include "menu_palestras.php";
					
					?>
				</ul>
				<div class="inside1">
					<div class="wrap row-2">
						
						
							<h2>Reconhecendo pessoas em cenas - Biometria não cooperativa</h2><h2 style="font-size: 20px;"></br><a href="http://iris.sel.eesc.usp.br/lavi/adilson/ingles/index.htm" target="_blank">Adilson Gonzaga</a></h2><h2 style="font-size: 17px;">Escola de Engenharia de São Carlos - EESC/USP</h2></br></br>
							<div class="img-box"><img src="images/palestras3.png">A Biometria, ou seja, o reconhecimento de pessoas por meio de características biológicas ou comportamentais tem sido utilizada há muitos anos na área forense. Criminosos são identificados por pistas que deixam nas cenas do crime como a marca da impressão digital. Locais de acesso controlado dependem do reconhecimento facial, da geometria da mão ou das características da Iris para permitir ou não a entrada de pessoas. No entanto, a maioria dos sistemas biométricos computacionais de reconhecimento de pessoas depende da cooperação do usuário. Equipamentos para identificação pela impressão digital, pela face, mão ou Iris, são comuns hoje para acesso a clubes, a dados, a consultas médicas, etc..</div>
							<p class="p1">Fechaduras biométricas são comuns em portas de residências. Em todos os casos, o usuário precisa cooperar, precisa querer ser reconhecido e se dispor a usar um equipamento que representa invasão à sua pessoa.Esta palestra pretende mostrar a evolução e as dificuldades de um tipo de biometria chamada de não cooperativa e que tem recebido aplicações em diferentes áreas. Por exemplo, reconhecer pessoas pela maneira como andam são apropriadas para a segurança em locais com grande movimento como aeroportos, eventos, shopping centers, etc.</p>
							<p class="p1">. Reconhecer pessoas pelo movimento do corpo, pela Iris ou pela face à distância tem sido direcionado para a área de publicidade e diversão (Kinect). No entanto, as dificuldades tecnológicas para realizar tais atividades são muitas. Apesar da grande evolução dos sensores e lentes das câmeras modernas, as informações que discriminam uma Iris do olho humano são extremamente finas e difíceis de serem capturadas à distância de vários metros. A face humana, digitalizada com teleobjetivas e zoom, perde muitas das informações e dos detalhes importantes. Qual é o estágio atual destas tecnologias? Quais serão as novas aplicações? Quais as implicações sociais e éticas? Um paralelo pode ser realizado com a ficção que fez algumas previsões que hoje são ou um dia serão realidade.</p>
							<p class="p1"><h2 style="font-size: 20px;">Biografia:</h2></br>Possui graduação em Engenharia Elétrica pela Universidade de São Paulo Campus de São Carlos (1977), mestrado em Engenharia Elétrica pela Universidade de São Paulo (1982) e doutorado em Física pela Universidade de São Paulo (1991). Atualmente é professor Associado da Universidade de São Paulo. Tem experiência na área de Engenharia Elétrica, Sistemas Digitais, Microprocessadores e Processamento de Imagens, atuando principalmente nos seguintes temas: Visão Computacional, processamento de imagens, biometria e reconhecimento de padrões.</p>
							<p class="p1"><h2 style="font-size: 20px;">Data: 25/10/2012  <?php for($i=0;$i<30;$i++){echo "&nbsp;";} ?> 	 Local: Auditório <?php for($i=0;$i<30;$i++){echo "&nbsp;";} ?> 	 Horário: 19h30</h2></p>
							
					
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