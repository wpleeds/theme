<!doctype HTML>
<html>
<head>
	<title><?php bloginfo('name'); echo " - "; bloginfo('description'); ?></title>

	<!-- to be improved and modified -->
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="descripton" content="A gathering of WordPress people in West Yorkshire" />
		<meta name="keywords" content="WordPress, Leeds, West Yorkshire, design, development, php, css, html, js" />

		<?php wp_head(); ?>

		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" rel="stylesheet" />

		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/config.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/skel.min.js"></script>
		<noscript>
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/skel-noscript.css" />
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]>
			<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ie8.css" />
		<![endif]-->
		<!--[if lte IE 7]>
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ie7.css" />
		<![endif]-->
	<!-- ./ -->

</head>

<body>