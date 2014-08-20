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

		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/skel-noscript.css" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-desktop.css" />

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

	<!-- Nav -->
	<nav id="nav">
		<ul>
			<li><a href="#top"><i class="icon icon-heart"></i> Welcome</a></li>
			<li><a href="#who"><i class="icon icon-user"></i> This Month</a></li>
			<li><a href="#venue"><i class="icon icon-home"></i> Venue</a></li>
			<li><a href="#structure"><i class="icon icon-time"></i> Structure & Topics</a></li>
			<li><a href="#groups"><i class="icon icon-user"></i> Other Groups</a></li>
			<li><a href="#social"><i class="icon icon-star"></i> Be Social</a></li>		
		</ul>
	</nav>

	<!-- Home -->
	<div class="wrapper wrapper-style1 wrapper-first">
		<article class="container" id="top">
			<div class="row">
				<div class="5u">
					<span class="intro-image image image-full"><img src="<?php echo get_template_directory_uri(); ?>/images/wpmess.png" alt="WordPress logo" /></span>
				</div>
				<div class="7u">
					<header>
						<h1><?php bloginfo('name'); ?></h1>
					</header>

					<p>WordPress Leeds is an informal organisation to help promote WordPress and Blogging events in Leeds and West Yorkshire. Our main event Northern Bloggers, is a monthly meetup for Bloggers, Journalists, Designers, Developers and anyone interested in Blogging and Digital Publishing.</p>

					<div>
						<p>Northern Bloggers is 6:30pm on the 4<sup>th</sup> Tuesday of the month at <a href="#venue" title="Get directions!">Duke Studios</a>. Due to space constraints the event is normally ticketed but is free!</p>
					</div>
					<a href="http://www.eventbrite.com/e/northern-bloggers-wordpress-leeds-tickets-12541964353?aff=wpleedssite" class="button button-big">Get a ticket for this months event</a> 

				</div>
			</div>
		</article>
	</div>