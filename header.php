<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <title><?php wp_title(''); ?></title>

    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width" />
    
    <link rel="author" href="<?php echo bloginfo('template_url'); ?>/humans.txt">

    <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/style.css">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/style.css">
    <script src="<?php echo bloginfo('template_url'); ?>/js/vendor/modernizr.js"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
    
    <?php /* As of Feb. 2013, we are still supporting IE7. Sigh... */ ?>

	<!--[if lt IE 7]>
        <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
    <![endif]-->

<header class="full-width">

	<?php 
    // We show an h1 for site title on the front page, h3 everywhere 
    // else. On every other page, the page title gets the h1.

    if (is_front_page()) { ?>
	    <h1 id="site-title">
            <a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>" rel="home"><?php bloginfo('name'); ?></a>
        </h1>
	<?php } else { ?>
	    <h3 id="site-title">
            <a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>" rel="home"><?php bloginfo('name'); ?></a>
        </h3>
	<?php } 
    if (get_bloginfo('description')) { ?>
        <p id="site-description"><?php bloginfo('description'); ?></p>
    <?php } ?>

    <nav role="navigation">
    	<?php wp_nav_menu( array(
            'theme_location' => 'primary',
            'container' => false,
            'fallback_cb' => 'wp_page_menu',
        ) ); ?>   
    </nav> 

</header>

<main class="full-width">