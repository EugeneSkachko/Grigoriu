<?php
/*
Template Name: Accueil
*/
get_header(); ?>

<?php
    get_template_part( 'template-parts/accueil/slideshow' );
    get_template_part( 'template-parts/accueil/intro' );
?>
<div class="first__bg">
    <?php
        get_template_part( 'template-parts/accueil/equipe' );
        get_template_part( 'template-parts/accueil/pedicure' );
        get_template_part( 'template-parts/accueil/valeurs' );
        get_template_part( 'template-parts/accueil/traitements' );
    ?>
</div>
<div class="second__bg">
    <?php
        get_template_part( 'template-parts/accueil/technologies' );
        get_template_part( 'template-parts/accueil/instagram' );
        get_template_part( 'template-parts/accueil/evenements' );
        get_template_part( 'template-parts/accueil/cas' );
    ?>
</div>
<?php
    get_template_part( 'template-parts/accueil/despositifs' );
?>
<div class="third__bg">
    <?php
        get_template_part( 'template-parts/accueil/conseils' );
        get_template_part( 'template-parts/accueil/parallax' );
    ?>
</div>
<?php
    get_template_part( 'template-parts/accueil/acces' );
?>
<?php get_footer(); ?>