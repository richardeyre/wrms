<!doctype html>
<html lang="en-gb">
<head>
    
    <meta charset="utf-8">
    <title><?php wp_title( '|', true, 'right' );; ?></title>

    <link rel="stylesheet" href="<?php echo bloginfo('stylesheet_directory'); ?>/css/wrms.css">
   
    <?php wp_head(); ?>

    <style>
        <?php
        if (($url = wp_get_attachment_url(get_post_thumbnail_id($post->ID))) != false):
            echo ".banner {
                background-image: url({$url});
            }";
            
        endif;
        ?>
    </style>

</head>
<body <?php body_class(); ?>>

<div class="banner">
</div>

<div class="wrap">

    <header>

        <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/images/logo.gif" alt="Wakefield Railway Modellers' Society">
            </a></h1>

        <nav>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'main'
            ));
            ?>
        </nav>

    </header>