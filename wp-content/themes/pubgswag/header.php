<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head() ?>
</head>

<body>
<div class="wrapper">

    <nav class="navbar navbar-toggleable-md sticky-top navbar-inverse bg-inverse">
        <a class="navbar-brand" href="/">
            <img src="<?php echo get_template_directory_uri() . '/images/brand.png'?>">
        </a>
	    <?php wp_nav_menu( array( 'menu' => 'Header Menu',
                                  'container' => 'div',
                                  'container_class' => 'collapse navbar-collapse',
                                  'container_id' => '',
                                  'menu_class' => 'navbar-nav ml-auto',
                                  'menu_id' => '',
	                              'echo' => true,
                                  'fallback_cb' => 'wp_page_menu',
                                  'item_spacing' => 'preserve',
                                  'theme_location' => 'header-menu'
            )
        ); ?>
    </nav>

    <div class="jumbotron-container">
        <div class="jumbotron-overlay"></div>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-3">Player Unknown's Battlegrounds</h1>
                <h1 class="display-3" id="swag">SWAG</h1>
                <p class="lead">Forget looting your neighbor's houses! <br />Simply wait for Amazon to drop crates on your doorstep.</p>
            </div>
        </div>
    </div>