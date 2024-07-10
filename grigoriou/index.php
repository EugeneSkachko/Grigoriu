<?php
/* Template Name: Default template */
get_header(); ?>
    <section class="default__page">
        <?php
            get_template_part( 'template-parts/scroll-block' );
        ?>
        <div class="row row__width">
            <div class="default__top">
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
                    <span>
                        <?php echo the_title(); ?>
                    </span>
                </div>
            </div>
            <div class="default__content">
                <?php the_content(); ?>
            </div>
            <?php
                get_template_part( 'template-parts/back-button' );
            ?>
        </div>
    </section>


<?php get_footer(); ?>