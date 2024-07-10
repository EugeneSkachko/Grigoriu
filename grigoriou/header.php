<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <?php wp_head(); ?>
    <style>
        .grecaptcha-badge {
            visibility: hidden;
        }
    </style>
</head>
<body <?php body_class(); ?>>
<?php get_template_part( 'template-parts/preloader-block' ); ?>
<header>
    <div class="row row__width">
        <?php
        wp_nav_menu( array(
            'theme_location' => 'main-menu',
            'menu_class' => 'navbar-nav',
            'container' => false,
        ) );
        ?>
    </div>
</header>
<?php if ( is_front_page() ) {
    get_template_part( 'template-parts/scroll-block' );
} ?>