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
							<h2>MC03 - Páginas dinâmicas na web: introdução ao HTML e CSS</h2></br>
							<div class="img-box"><img src="images/minicursos3.png">
								Responsável: <a href="http://lattes.cnpq.br/2778711980813280">Bárbara dos Santos</a>.
								</br>Carga Horária: 08 horas.
						        </br>Pré-requisitos: Nenhum.
								</br>Local: Sala 10/Discente I.
								</br>Número de vagas: 35.</div>
							<p class="p1">
							
							 Este minicurso está

estruturado para ser ministrado em 12 horas, portanto, em três encontros. Segue, abaixo,

a proposta de cada um dos três encontros:</br></br>

1º Encontro: Introdução ao HTML: História do HTML e suas versões; editores de texto:

bloco de notas, notepad++, sublime text, adobe dreamweaver; tratamento da informação:

texto e imagem; tipografia e cores; apresentação de tags: cabeçalho e corpo, conteúdo

de texto, caracteres especiais, estrutura de linhas e parágrafos, alinhamento de texto

e formatação; comentários, réguas horizontais, recursos e listas (ordenadas e não-

ordenadas); navegabilidade, trabalho com imagens, cores em hexadecimal; tabelas,

frames e formulários; introdução ao HTML 5 e conceitos fundamentais de web semântica.
</br></br>
2º Encontro: Introdução ao CSS: O que é CSS; seletores complexos; animações, bordas,

sintaxe e funcionamento, cores e tipografia.
</br></br>
3º Encontro: Criação de páginas dinâmicas na web: Este terceiro e último encontro

têm por objetivo apresentar ao aluno a W3C (responsável pelo padrão de criação de

conteúdos para web), o ambiente da internet, com foco em acessibilidade, navegabilidade

e usabilidade. Neste sentido, após a apresentação das linguagens de marcação e

estilização, pretende-se propor a criação de um website a partir de páginas dinâmicas

na web. Neste sentido, o aluno acompanhará todas as etapas da produção de conteúdo

na web e dessa maneira poderá criar suas próprias páginas na internet. Também será

prudente focarmos em questões que tangem à normalização em HTML e CSS, sintaxe

de código e a própria legislação vigente com relação à acessibilidade na web, ou seja,

haverá uma apresentação dos documentos oficiais que legislam sobre o funcionamento

dos websites e sistemas para internet. Portanto, faremos as considerações finais, com

levantamento dos aspectos positivos e negativos ao longo dos três encontros, com pauta

para sugestões.
	
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