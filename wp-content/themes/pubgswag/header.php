<?php
header('Access-Control-Allow-Origin: *'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>PUBG Swag</title>
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() . '/images/favicon-32x32.png'?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri() . '/images/favicon-96x96.png'?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() . '/images/favicon-16x16.png'?>">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5BGBJGQ');</script>
    <!-- End Google Tag Manager -->

    <?php wp_head() ?>
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5BGBJGQ"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="wrapper">

    <nav class="navbar navbar-toggleable-md sticky-top navbar-inverse bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="/">
            <img src="<?php echo get_template_directory_uri() . '/images/brand.png'?>">
        </a>
	    <?php wp_nav_menu( array( 'menu' => 'Header Menu',
                                  'container' => 'div',
                                  'container_class' => 'collapse navbar-collapse',
                                  'container_id' => 'navbarTogglerDemo02',
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
