<!DOCTYPE html>
<html lang="en">
<head>

<meta http-equiv="X-UA-Compatible" content="IE=8" />












		<!-- include jQuery + carouFredSel plugin -->
		<script type="text/javascript" language="javascript" src="cufon-yui.js"></script>
		<script type="text/javascript" language="javascript" src="jquery-1.8.1.min.js"></script>
		<script type="text/javascript" language="javascript" src="jquery.carouFredSel-6.0.1-packed.js"></script>

		<!-- optionally include helper plugins -->
		<script type="text/javascript" language="javascript" src="helper-plugins/jquery.mousewheel.min.js"></script>
		<script type="text/javascript" language="javascript" src="helper-plugins/jquery.touchSwipe.min.js"></script>

		<!-- fire plugin onDocumentReady -->
		<script type="text/javascript" language="javascript">
			$(function() {

				//	Basic carousel, no options
				$('#foo0').carouFredSel();

				//	Basic carousel + timer
				$('#foo1').carouFredSel({
					auto: {
						pauseOnHover: 'resume',
						progress: '#timer1'
					},
					prev: '#prev1',
					next: '#next1'
				});

				//	Scrolled by user interaction
				$('#foo2').carouFredSel({
					auto: false,
					prev: '#prev2',
					next: '#next2',
					pagination: "#pager2",
					mousewheel: true,
					swipe: {
						onMouse: true,
						onTouch: true
					}
				});

				//	Variable number of visible items with variable sizes
				$('#foo3').carouFredSel({
					width: 360,
					height: 'auto',
					prev: '#prev3',
					next: '#next3',
					auto: false
				});

				//	Responsive layout, resizing the items
				$('#foo4').carouFredSel({
					responsive: true,
					width: '100%',
					scroll: 2,
					items: {
						width: 400,
					//	height: '30%',	//	optionally resize item-height
						visible: {
							min: 2,
							max: 6
						}
					}
				});

				//	Fuild layout, centering the items
				$('#foo5').carouFredSel({
					width: '100%',
					scroll: 2
				});

			});
		</script>

		<style type="text/css" media="all">
			<!--[if gte IE 9]>
			<script type="text/javascript">
				Cufon.set('engine', 'canvas');
			</script>
		<![endif]-->

			#intro {
				width: 580px;
				margin: 0 auto;
			}
			.wrapper {
				background-color: white;
				width: 480px;
				margin: 40px auto;
				padding: 50px;
				box-shadow: 0 0 5px #999;
			}
			.list_carousel {
				background-color: #ccc;
				margin: 0 0 30px 60px;
				width: 360px;
			}
			.list_carousel ul {
				margin: 0;
				padding: 0;
				list-style: none;
				display: block;
			}
			.list_carousel li {
				font-size: 40px;
				color: #999;
				text-align: center;
				background-color: #eee;
				border: 5px solid #999;
				width: 50px;
				height: 50px;
				padding: 0;
				margin: 6px;
				display: block;
				float: left;
			}
			.list_carousel.responsive {
				width: auto;
				margin-left: 0;
			}
			.clearfix {
				float: none;
				clear: both;
			}
			.prev {
				float: left;
				margin-left: 10px;
			}
			.next {
				float: right;
				margin-right: 10px;
			}
			.pager {
				float: left;
				width: 300px;
				text-align: center;
			}
			.pager a {
				margin: 0 5px;
				text-decoration: none;
			}
			.pager a.selected {
				text-decoration: underline;
			}
			.timer {
				background-color: #999;
				height: 6px;
				width: 0px;
			}
		</style>

		
		


















<title><?php include("inc/titulo.php"); ?></title>

<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/maxheight.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<script type="text/javascript" src="js/jquery.faded.js"></script>
<script type="text/javascript" src="js/jquery.jqtransform.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript">
	$(function(){
		$("#faded").faded({
			speed: 500,
			crossfade: true,
			autoplay: 10000,
			autopagination:false
		});
		
		$('#domain-form').jqTransform({imgPath:'jqtransformplugin/img/'});
	});
</script>
<!--[if lt IE 7]>
<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
<![endif]-->
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
</head>
<body id="page1" onLoad="new ElementMaxHeight();">
	
	
<div class="tail-top">
<!-- header -->
	<header>
	
		<div class="container" align="right">
		
			<div class="header-box">
				<div class="left">
					<div class="right">
						<nav>
							<?php
							$page = 1;
							include("inc/menu.php");						
							
							?>
						</nav>
						
					</div>
				</div>
			</div>
			<span class="top-info"><img src="images/logo.png" width="200px" /></span>
			
			<div style="padding-top: 30px; padding-right: 30px;">a</div>
		</div>
	</header>
<!-- content -->
	<section id="content">
		<div class="container">
			<div id="faded">
				<ul class="slides">
					<li><img src="images/img1_slider.png"><a href="sobre.php"><span><span>Saiba Mais!</span></span></a></li>
					<li><img src="images/img2_slider.png"><a href="organizacao1.php"><span><span>Saiba Mais!</span></span></a></li>
					<li><img src="images/img3_slider.png"><a href="campeonatos.php"><span><span>Participe!</span></span></a></li>
					<li><img src="images/img4_slider.png"><a href="ejcomp.php"><span><span>Saiba Mais!</span></span></a></li>
				</ul>
				<ul class="pagination">
					<li><a href="sobre.php" rel="0"><span onclick="window.location='sobre.php'">O evento</span><small onclick="window.location='sobre.php'">Informações do Evento</small></a></li>
					<li><a href="inscricoes.php" rel="1"><span  onclick="window.location='organizacao1.php'">Organização</span><small onclick="window.location='organizacao1.php'">Comissões da SECOMPP 2012</small></a></li>
					<li><a href="campeonatos.php" rel="2"><span  onclick="window.location='campeonatos.php'">Campeonatos</span><small onclick="window.location='campeonatos.php'">COPA SECOMPP 2012</small></a></li>
					<li><a href="ejcomp.php" rel="3"><span  onclick="window.location='ejcomp.php'">EJCOMP</span><small onclick="window.location='ejcomp.php'">Empresa Júnior da Computação</small></a></li>
				</ul>
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
