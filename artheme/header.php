<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php if ( !is_single() ) { ?>
	<meta name="description" content="Empresa dedicada al desarrollo de estrategias digitales, sitios web y lo necesario para alcanzar el éxito de nuestros clientes ">
	<?php } ?>

	<?php wp_head(); ?>

	<?php if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Speed Insights') === false): ?>


	<?php endif; ?>

	<?php if ( is_front_page() ) { ?>
	<script async defer src="https://buttons.github.io/buttons.js"></script>
	<?php } ?>

</head>

<body>
	<h1 class="screen-reader-text">AR Consulting Labs Creando Estrategias Digitales para Empresas</h1>
	<a class="screen-reader-text" href="#main-content">Saltar Navigación</a>

	<header class="main-nav-outer">
		<div class="nav-container">
		<nav class="main-navigation">
			<a href="<?php echo site_url(); ?>" class="home <?php if ( is_front_page() ) { ?>current<?php } ?>"><i class="fa fa-home" aria-hidden="true"></i> <span>Tour</span></a>
			<a href="<?php echo site_url(); ?>/promociones-descuentos-y-regalos-especiales-para-impulsar-tu-negocio-de-manera-online/" class="tutorials <?php if ( is_page( 'tutorials' ) ) { ?>current<?php } ?>"><i class="fa fa-map-o" aria-hidden="true"></i> <span>Desarrollo Web</span></a>
			<a href="<?php echo site_url(); ?>/campanas-para-alcanzar-el-exito-en-el-marketing-digital" class="snippets <?php if ( is_page( 'snippets' ) ) { ?>current<?php } ?>"><i class="fa fa-scissors" aria-hidden="true"></i> <span>Estrategias</span></a>
			<a href="<?php echo site_url(); ?>/conoce-mas-ar-consulting-labs-marketing-digital-estrategico" class="tania <?php if ( is_page( 'me' ) ) { ?>current<?php } ?>"><i class="fa fa-heart-o" aria-hidden="true"></i> <span>Empresas</span></a>
			<a href="<?php echo site_url(); ?>/blog-de-marketing-digital-estrategico" class="portfolio <?php if ( is_page( 'work' ) ) { ?>current<?php } ?>"><i class="fa fa-folder-open-o" aria-hidden="true"></i> <span>Inspiración</span></a>
			<a href="<?php echo site_url(); ?>/forma-parte-de-nuestra-comunidad-de-clientes-tus-consultas-son-siempre-bienvenidas" class="thoughts <?php if ( is_page( 'thoughts' ) ) { ?>current<?php } ?>"><i class="fa fa-commenting-o" aria-hidden="true"></i> <span>Contactanos</span></a>
		</nav>
		<div class="search-div">
			<form role="search" method="get" class="nav-search" action="<?php echo home_url( '/' ); ?>">
				<label>
				<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span></label>
				<input type="search" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>"
					name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" class="nav-search-input">
				<button type="submit" class="nav-search-submit"><i class="fa fa-search" aria-hidden="true"></i></button>
			</form>
		</div>
	</div>
	</header>

	<main class="main" id="main-content">
