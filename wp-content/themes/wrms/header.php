<!doctype html>
<html lang="en-gb">
<head>
    
    <meta charset="utf-8">
    <title><?php wp_title( '|', true, 'right' );; ?></title>

    <?php wp_head(); ?>


</head>
<body <?php body_class(); ?>>

    <header>

        <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Wakefield Railway Modellers' Society</a></h1>

        <nav>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'main'
            ));
            ?>
        </nav>

    </header>