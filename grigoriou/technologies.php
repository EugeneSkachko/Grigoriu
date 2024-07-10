<?php
/*
Template Name: Technologies list
*/
get_header(); ?>
    <section class="technologies__list">
        <?php
            get_template_part( 'template-parts/scroll-block' );
        ?>
        <div class="technologies__top">
            <?php echo the_post_thumbnail(); ?>
        </div>
        <div class="technologies__content">
            <div class="row row__width">
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
            <?php if( have_rows('technologies_repeater') ) : $counter = 1;?>
                <div class="technologies__main">
                    <?php while( have_rows('technologies_repeater') ): the_row();
                        $technologies_repeater_background = get_sub_field('technologies_repeater_background');
                        $technologies_repeater_title = get_sub_field('technologies_repeater_title');
                        $technologies_repeater_image = get_sub_field('technologies_repeater_image');
                        $technologies_repeater_description = get_sub_field('technologies_repeater_description');
                        ?>
                        <div class="technologies__row" style="background: <?php echo $technologies_repeater_background;?>">
                            <div class="row row__width">
                                <div>
                                    <h2>
                                        <?php echo $technologies_repeater_title;?>
                                    </h2>
                                </div>
                                <div>
                                    <img
                                        src="<?php echo $technologies_repeater_image['url'];?>"
                                        alt="<?php echo $technologies_repeater_image['alt'];?>"
                                    >
                                </div>
                                <div>
                                    <?php echo $technologies_repeater_description;?>
                                </div>
                            </div>
                        </div>
                        <?php $counter++; endwhile; ?>
                </div>
            <?php endif; ?>
            <div class="row row__width">
                <?php
                get_template_part( 'template-parts/back-button' );
                ?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>