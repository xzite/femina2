<?php
@session_start();

#if ( !isset($_SESSION['userId']) ){
#	header("Location: index.php");
#	die;
#}

include 'db.php';

/*
PENDIENTES
portadas
	- por categoria dise;o diferente
categorias
	- la bandera que se va a usar
carnet
	- poder subir imagenes con texto
	- html editor

htaccess
	- urls amigables
*/
if ( isset($_GET['m']) ){
	switch($_GET['m']) {

		/* clientes */
		case "clientes":
			$paginaPHP = "php/clientes.php";
		break;
		case "clientesAgregar":
			$paginaPHP = "php/clientesAgregar.php";
		break;
		case "clientesEditar":
			$paginaPHP = "php/clientesEditar.php";
		break;

		/* NOTICIAS */
		case "noticias":
			$paginaPHP = "php/noticias.php";
		break;
		case "noticiasAgregar":
			$paginaPHP = "php/noticiasAgregar.php";
		break;
		case "noticiasEditar":
			$paginaPHP = "php/noticiasEditar.php";
		break;

		/* PORTADAS */
		case "portadas":
			$paginaPHP = "php/portadas.php";
		break;
		case "portadasAgregar":
			$paginaPHP = "php/portadasAgregar.php";
		break;
		case "portadasEditar":
			$paginaPHP = "php/portadasEditar.php";
		break;

		/* VIDEOS */
		case "videos":
			$paginaPHP = "php/videos.php";
		break;
		case "videosAgregar":
			$paginaPHP = "php/videosAgregar.php";
		break;
		case "videosEditar":
			$paginaPHP = "php/videosEditar.php";
		break;

		/* CARNETS */
		case "carnets":
			$paginaPHP = "php/carnets.php";
		break;
		case "carnetsAgregar":
			$paginaPHP = "php/carnetsAgregar.php";
		break;
		case "carnetsEditar":
			$paginaPHP = "php/carnetsEditar.php";
		break;

		/* SLIDERS */
		case "sliders":
			$paginaPHP = "php/sliders.php";
		break;
		case "slidersAgregar":
			$paginaPHP = "php/slidersAgregar.php";
		break;
		case "slidersEditar":
			$paginaPHP = "php/slidersEditar.php";
		break;

		/* CATEGORIAS */
		case "categorias":
			$paginaPHP = "php/categorias.php";
		break;
		case "categoriasAgregar":
			$paginaPHP = "php/categoriasAgregar.php";
		break;
		case "categoriasEditar":
			$paginaPHP = "php/categoriasEditar.php";
		break;

	}
} else {
	$paginaPHP = "php/index.php";
}

$errorMsg = "";

?>
<!DOCTYPE html>
<html lang="en" class="app">
<head> <meta charset="utf-8" />
<title>FORBIDDEN 403</title>
<meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="stylesheet" href="css/app.v1.css" type="text/css" />
<script src="js/app.v1.js"></script>
<!--[if lt IE 9]>
<script src="js/ie/html5shiv.js"></script>
<script src="js/ie/respond.min.js"></script>
<script src="js/ie/excanvas.js"></script>
<![endif]-->
</head>
<body class="">
	<section class="vbox">
		<header class="bg-black dk header navbar navbar-fixed-top-xs">
			<div class="navbar-header aside-md">
				<a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html"> <i class="fa fa-bars"></i> </a>
				<a href="#" class="navbar-brand" data-toggle="fullscreen">SISTEMA BASE</a>
				<a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".nav-user"> <i class="fa fa-cog"></i> </a>
			</div>
			<ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb-sm avatar pull-left"> <img src="images/avatar_default.jpg"> </span> admin <b class="caret"></b> </a>
					<ul class="dropdown-menu animated fadeInRight"> <span class="arrow top"></span> 
						<li class="divider"></li>
						<li> <a href="cerrar.php">Salir</a> </li>
					</ul>
				</li>
			</ul>
		</header>
		<section>
			<section class="hbox stretch">
				<!-- .aside -->
				<aside class="bg-black lter aside-md hidden-print hidden-xs" id="nav">
					<section class="vbox">
						<section class="w-f scrollable">
							<div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
								<!-- nav -->
								<nav class="nav-primary hidden-xs">
									<ul class="nav">
										<li> <a href="admin.php?m=noticias"> <i class="fa fa-angle-right"></i> <span>Noticias</span> </a> </li>
										<li> <a href="admin.php?m=portadas"> <i class="fa fa-angle-right"></i> <span>Portadas</span> </a> </li>
										<li> <a href="admin.php?m=sliders"> <i class="fa fa-angle-right"></i> <span>Sliders</span> </a> </li>
										<li> <a href="admin.php?m=carnets"> <i class="fa fa-angle-right"></i> <span>Carnets</span> </a> </li>
										<li> <a href="admin.php?m=videos"> <i class="fa fa-angle-right"></i> <span>Videos</span> </a> </li>
										<li class="">
											<a href="#webpage" class=""><i class="fa fa-angle-right icon"></i> <span class="pull-right"> <i class="fa fa-angle-down text"></i> <i class="fa fa-angle-up text-active"></i> </span> <span>Configuracion</span> </a>
											<ul class="nav lt" style="display: none;">
												<li> <a href="admin.php?m=categorias"> <i class="fa fa-angle-right"></i> <span>Categorias</span> </a> </li>
												<li> <a href="admin.php?m=usuarios"> <i class="fa fa-angle-right"></i> <span>Usuarios</span> </a> </li>
												<li> <a href="admin.php?m=htaccess"> <i class="fa fa-angle-right"></i> <span>Htaccess</span> </a> </li>
											</ul>
										</li>
									</ul>
								</nav>
								<!-- / nav -->
							</div>
						</section>
					</section>
				</aside>
				<!-- /.aside -->
				<section id="content">
					<section class="vbox">
						<!--<header class="header bg-white b-b b-light"> <p>Layout with black color</p> </header>-->
						<section class="scrollable wrapper w-f">
							<?php include $paginaPHP; ?>
						</section>
						<footer class="footer bg-white b-t b-light text-right">
							<p><a href="http://nuevolaredo.f403.mx">F403.MX Nuevo Laredo</a></p>
						</footer>
					</section>
					<a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen, open" data-target="#nav,html"></a>
				</section>
			</section>
		</section>
	</section>
	<!-- Bootstrap -->
	<!-- App -->
	<script src="js/app.plugin.js"></script>
</body>
</html>