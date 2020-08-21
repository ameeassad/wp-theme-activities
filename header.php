<html>
    <head>
    <?php wp_head(); ?>
    
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/jquery-3.5.1.min.js'; ?>">
    </script>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    
    </head>

    <body <?php body_class(); ?>>

    <div id="header" class="jumbotron">
        <div class="header-logo"><img src="<?php echo get_template_directory_uri().'/images/logo.png'; ?>"> </div>
    </div>
    <div class="container">