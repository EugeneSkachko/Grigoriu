<?php get_header();
global $post;
$traitement = get_the_terms( $post->ID, 'category_traitements' );
foreach ( $traitement as $trait ) {
    $traitement_category = $trait->name;
    $traitement_link = get_term_link($trait->term_id, 'category_traitements' );
//    echo '<pre>';
//    var_dump($traitement2);
//    echo '</pre>';
}
?>
    <section class="trait__single">
        <?php
            get_template_part( 'template-parts/scroll-block' );
        ?>
        <div class="row row__width">
            <div class="trait__top">
                <h1>
                    <?php echo the_title(); ?>
                </h1>
                <div class="breadcrumbs__block">
                    <a
                        href="<?php echo esc_url( home_url( '/' ) ); ?>"
                        title="<?php esc_attr_e( 'Accueil', 'mediweb' ); ?>"
                    >
                        <?php esc_attr_e( 'Accueil', 'mediweb' ); ?>
                    </a>
                    <div> | </div>
                    <a
                        href="<?php echo esc_url( home_url( '/' ) ); ?>#traitements"
                        title="<?php esc_attr_e( 'Traitements', 'mediweb' ); ?>"
                    >
                        <?php esc_attr_e( 'Traitements', 'mediweb' ); ?>
                    </a>
                    <div> | </div>
                    <a
                        href="<?php echo $traitement_link; ?>"
                        title="<?php echo $traitement_category; ?>"
                    >
                        <?php echo $traitement_category; ?>
                    </a>
                    <div> | </div>
                    <span>
                        <?php echo the_title(); ?>
                    </span>
                </div>
            </div>
            <div class="trait__content">
                <div>
                    <?php the_content(); ?>
                </div>
            </div>

            <?php
                get_template_part( 'template-parts/back-button' );
            ?>
        </div>
    </section>

<?php get_footer(); ?>