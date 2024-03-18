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
							$page = 2;
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
					include "menu_prog.php";
					?>
				</ul>
				<div class="inside1">
				
					<div class="wrap row-2">
						
						<?php
	
	$mc1 = "<a href=\"minicursos4.php\" style=\"text-decoration:none\">- Photoshop: Uma abordagem Prática (Sala 10/Discente I</a>)</br>";
	$mc2 = "<a href=\"minicursos10.php\" style=\"text-decoration:none\">- Curso Básico de After Effects (Sala 10/Discente I)</a></br>";
	$mc3 = "<a href=\"minicursos3.php\" style=\"text-decoration:none\">- Páginas dinâmicas na WEB: introdução ao HTML e CSS (Sala 10/Discente I)</a></br>";
	$mc4 = "<a href=\"minicursos11.php\" style=\"text-decoration:none\">- Desenvolvimento Ágil com TDD (Sala 6B/Central)</a></br>";
	$mc5 = "<a href=\"minicursos6.php\" style=\"text-decoration:none\">- Introdução à plataforma Java Enterprise Edition (Sala 10/Discente I)</a></br>";
	$mc6 = "<a href=\"minicursos5.php\" style=\"text-decoration:none\">- Introdução à Programação para Android (Sala 06/Discente I)</a></br>";
	$mc7 = "<a href=\"minicursos1.php\" style=\"text-decoration:none\">- Desenvolvimento de Aplicações Multiplataforma com Qt (Sala 06/Discente I</a>)</br>";
	$mc8 = "<a href=\"minicursos7.php\" style=\"text-decoration:none\">- OpenCV (Open Source Computer Vision Library): Teoria e prática (Sala 10/Discente I)</a></br>";
	$mc9 = "<a href=\"minicursos.php\" style=\"text-decoration:none\">- Materializando seus Programas com Arduino (Sala 10/Discente I)</a></br>";
	$mc10 = "<a href=\"minicursos8.php\" style=\"text-decoration:none\">- Programação de Microcontroladores (Sala 06/Discente I)</a></br>";
	$mc11 = "<a href=\"minicursos9.php\" style=\"text-decoration:none\">- Segurança em Redes Wireless (Sala 06/Discente I)</a></br>";
	$mc12 = "<a href=\"minicursos2.php\" style=\"text-decoration:none\">- Introdução ao Linux (Sala 6B/Central)</a></br>";
	$mc13 = "<a href=\"minicursos12.php\" style=\"text-decoration:none\">- Desenvolvimento Ágil de uma Aplicação WEB Utilizando Python-Django(Sala 6B/Central)</a></br>";
	
	?>	
					
				
				<table style="margin: 0px 0px 0px 44px; -moz-border-radius: 225px;" width="900" cellpadding="4" cellspacing="4" >
					<tr style="border: 1px;">
						<td width="150px" background="images/fundo_tabela.gif" height="40"><h2 style="color: #FFF; font-size: 38px;">Horário</h2></td>
						<td background="images/fundo_tabela.gif" height="40"><h2 style="color: #FFF; font-size: 38px;">Minicursos e Palestras</h2></td>
					</tr>
					
					<tr>
						<td bgcolor="#d9d9d9" align="center"><br />8h</td>
						<td bgcolor="#d9d9d9"><br /><?php echo $mc3 . $mc6; ?><br /></td>
					</tr>
					
					<tr>
						<td bgcolor="#FFFFFF" align="center"><br />10h</td>
						<td bgcolor="#FFFFFF"><b><br />Coffee Break<br/><br/></b></td>
					</tr>
					
					<tr>
						<td bgcolor="#d9d9d9" align="center"><br />10h20</td>
						<td bgcolor="#d9d9d9"><br /><?php echo $mc3 . $mc6; ?><br /></td>
					</tr>
					
					<tr>
						<td bgcolor="#FFFFFF" align="center"><br />12h20<br /><br /></td>
						<td bgcolor="#FFFFFF"><br /><b>Livre</b><br /></td>
					</tr>
					
					<tr>
						<td bgcolor="#d9d9d9"  align="center"><br />14h<br /><br /></td>
						<td bgcolor="#d9d9d9"><br /><?php echo $mc3 . $mc6; ?><br /></td>
					</tr>
					
					<tr>
						<td bgcolor="#FFFFFF" align="center"><br />16h</td>
						<td bgcolor="#FFFFFF"><b><br />Coffee Break<br/><br/></b></td>
					</tr>
					
					<tr>
						<td bgcolor="#d9d9d9"  align="center"><br />16h20<br /><br /></td>
						<td bgcolor="#d9d9d9"><br /><?php echo $mc3 . $mc6; ?><br /></td>
					</tr>
					
					<tr>
						<td bgcolor="#FFFFFF" align="center"><br />18h20<br /><br /></td>
						<td bgcolor="#FFFFFF"><br /><b>Livre</b><br /></td>
					</tr>
					
					<tr>
						<td bgcolor="#d9d9d9"  align="center"><br />19h15<br /><br /></td>
						<td bgcolor="#d9d9d9" ><br /><font style="font-size :16px;"><b>Atividade Cultural:</b></font> <a href="http://www.facebook.com/bateria.furiosa.3" target="_blank" style="text-decoration:none"> Apresentação da Bateria Furiosa, FCT- UNESP</a><br /><br /></td>
					</tr>

					<tr>
						<td bgcolor="#FFFFFF"  align="center"><br />19h30<br /><br /></td>
						<td bgcolor="#FFFFFF" ><br />Cerimonial de Abertura<br /><br /></td>
					</tr>
					
					<tr>
						<td bgcolor="#d9d9d9"  align="center"><br />20h<br /><br /></td>
						<td bgcolor="#d9d9d9" ><br /><font style="font-size :16px;"><b>Palestra:</b></font> <a href="palestras.php" style="text-decoration:none"> Inovação e Estratégia em Empresas Startups</a><br /><br /></td>
					</tr>
					
				</table>
					
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