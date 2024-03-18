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
							<h2>MC07 - Desenvolvimento de Aplicações Multiplataforma com Qt</h2></br>
							<div class="img-box"><img src="images/minicursos1.png">
								Responsável:Helder C. R. de Oliveira (aluno de graduação do curso de C. da Computação) e Prof. Marco Antônio Piteri.
								</br>Carga Horária: 08 horas.
								</br>Pré-requisitos: Conhecimentos básicos de programação em C/C++. É desejável
								conhecimentos básicos de orientação à objetos.
								</br>Local: Sala 06/Discente I.
								</br>Número de vagas: 35.</div>
							<p class="p1">
								
								O propósito deste minicurso é dar uma visão geral sobre o framework Qt, que é um dos
								toolkits gráficos mais usados na indústria de software para a elaboração de interfaces
								gráficas orientadas ao usuário (Graphical User Interfaces - GUIs) e se tornou muito
								popular por servir de base para o desenvolvimento do KDE, que rivaliza com o
								GNOME entre os sistemas de gerenciamento de janelas preferidos pelos usuários do
								sistema operacional Linux.
								</br></br>
								Embora o Qt tenha sido concebido primariamente para a construção de
								interfaces gráficas, atualmente ele incorpora uma grande quantidade de recursos/
								funcionalidades associados à manipulação de banco de dados, multimídia, XML, Web,
								redes, manipulação de imagens, gráficos 2D e 3D, entre outros, organizados em mais de
								800 classes. Desenvolvido em C++, ele possui bindings para a construção de aplicações
								em Ada, C/C++, Java, Pascal, Perl, PHP, Python, Ruby, C#, entre outras.
								</br></br>
								Uma das características intrínsecas ao Qt é a possibilidade de elaborar aplicações
								para várias plataformas (desktop e dispositivos móveis) que rodam nativamente em
								diferentes ambientes operacionais (Linux/Unix, Windows, MacOS X, Symbian,
								Maemo e Android) a partir de um único código, se constituindo assim numa poderosa
								ferramenta multiplataforma. Além disso, tem sido usado por empresas com o porte
								da Google, Nokia, Samsung, HP, Adobe, Volvo, Wolfram, entre outras, o que dá
								uma dimensão, inclusive, do potencial mercado de trabalho para quem domina essa
								tecnologia.
								</br></br>
								Ao final do minicurso, a expectativa é que os alunos tenham condições de
								desenvolver programas com interfaces gráficas elaboradas, utilizando os principais
								componentes (widgets) disponíveis no ambiente Qt, além de conhecer os principais
								recursos existentes junto a esta tecnologia, que vem se tornando, de facto, num padrão
								na indústria de software.
								</br></br>
								<b>Conteúdo:</b> Aspectos históricos; Tipos de Licença; Instalação do SDK em ambiente
								Windows; Introdução à Biblioteca; Widgets básicos para a construção de interfaces;
								Sinais e slots; Eventos; Utilização do QtCreator; Componentes gráficas (Classes para a
								criação e manipulação de linhas, círculos, polígonos dentre outras formas geométricas);
								Exemplos de aplicações utilizando os conceitos apresentados; Construção passo-a-passo
								de um editor de textos e um programa para a manipulação de imagens;
								</br></br>
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