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
					$palestras = 2;
					include "menu_palestras.php";
					
					?>
				</ul>
				<div class="inside1">
					<div class="wrap row-2">
						
						
							<h2>Tendências e Perspectivas no Desenvolvimento e Utilização de Recursos Educacionais Abertos</h2></br><h2 style="font-size: 20px;"><a href="http://www.icmc.usp.br/pessoas/professor.php?origem=icmc&tipo=prof&id_pessoa=2162648&nat=scc" target="_blank">Ellen Francine Barbosa</a></h2><h2 style="font-size: 17px;">Instituto de Ciências Matemáticas e de Computação - ICMC/USP</h2></br></br>
							<p class="p1"></p>
							<div class="img-box"><img src="images/palestras2.png">Recursos Educacionais Abertos (REAs), ou do termo em inglês OpenEducational Resources (OERs), consistem em materiais de ensino,aprendizagem e pesquisa em qualquer suporte ou mídia, que estão sobdomínio público, ou estão licenciados de maneira aberta, permitindo quesejam utilizados ou adaptados por terceiros. O desenvolvimento de
conteúdos na forma "aberta" tem emergido como alternativa viável para
apoiar efetivamente o processo de ensino e aprendizagem, seja na
modalidade presencial, híbrida ou a distância, e em diferentes níveis de
ensino. Iniciativas nacionais e internacionais podem ser encontradas nessa
direção. O objetivo desta palestra é fornecer uma visão geral sobre REAs,
abordando tanto conceitos básicos como aspectos técnicos e legais
associados a seu desenvolvimento e utilização</div>
							<p class="p1"> Exemplos de REAs em
diferentes domínios de conhecimento também devem ser apresentados.</p>
							<p class="p1"><h2 style="font-size: 20px;">Biografia:</h2></br>Ellen Francine Barbosa  é Bacharel em Ciência da Computação pela Universidade Estadual de Londrina (UEL) em 1995. Mestre em Ciência da Computação e Matemática Computacional pelo Instituto de Ciências Matemáticas e de Computação (ICMC/USP) em 1998. Doutora em Ciência da Computação e Matemática Computacional pelo Instituto de Ciências Matemáticas e de Computação (ICMC/USP) em 2004. Realizou estágios na Georgia Institute of Technology (GATECH/USA), no período de agosto/2002 a dezembro/2002, e na University of Florida (UFL/USA), em janeiro/2003. Atualmente é Professora Doutora do Departamento de Sistemas de Computação do ICMC/USP, diretora do Laboratório de Computação Aplicada à Educação (CAEd-ICMC/USP) e diretora do Centro de Ensino e Treinamento do INCT-SEC. Entre seus interesses de pesquisa destacam-se os temas relacionados a Teste de Software, Engenharia de Software, Ensino e Aprendizado, Objetos de Aprendizado e Ontologias. </p>
							<p class="p1"><h2 style="font-size: 20px;">Data: 24/10/2012  <?php for($i=0;$i<30;$i++){echo "&nbsp;";} ?> 	 Local: Auditório <?php for($i=0;$i<30;$i++){echo "&nbsp;";} ?> 	 Horário: 19h30</h2></p>
							
					
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