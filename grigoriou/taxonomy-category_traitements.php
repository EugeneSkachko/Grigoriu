<?php get_header();
    $category = get_queried_object();
    $traitements_subtitle = get_field('traitements_subtitle', $category);
    $traitements_image = get_field('traitements_image', $category);
?>
    <section class="trait__single">
        <?php
            get_template_part( 'template-parts/scroll-block' );
        ?>
        <div class="row row__width">
            <div class="trait__top">
                <h1>
                    <?php echo $category->name; ?>

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
                    <span>
                        <?php echo $category->name; ?>
                    </span>
                </div>
            </div>
            <div class="trait__content">
                <div class="trait__image">
                    <img
                        src="<?php echo $traitements_image['url']; ?>"
                        alt="<?php echo $traitements_image['alt']; ?>"
                    >
                </div>
                <div class="trait__main">
                    <div>
                        <h2>
                            <?php echo $traitements_subtitle; ?>
                        </h2>
                    </div>
                    <div>
                        <?php echo term_description(); ?>
                    </div>
                </div>
            </div>
            <?php
            $post_args = array(
                'posts_per_page' => -1,
                'post_type' => 'traitements',
                'orderby' => 'rand',
                'tax_query' => array(
                    array (
                        'taxonomy' => 'category_traitements',
                        'field' => 'term_id',
                        'terms' => $category->term_id,
                    )
                ),
            );
            $traitements = get_posts($post_args);
            ?>
            <?php if ( ! empty( $traitements) && is_array( $traitements) ) { ?>
                <div class="trait__additional">
                    <h2>
                        <?php esc_attr_e( 'Traitements', 'mediweb' ); ?>
                    </h2>
                    <?php foreach ( $traitements as $traitement ) : setup_postdata( $traitement ); ?>
                        <div class="trait__additional--single">
                            <div>
                                <a
                                    href="<?php echo get_permalink($traitement->ID) ?>"
                                    title="<?php echo $traitement->post_title; ?>"
                                >
                                    <?php echo get_the_post_thumbnail($traitement->ID); ?>
                                </a>
                            </div>
                            <div>
                                <h3>
                                    <?php echo $traitement->post_title; ?>
                                </h3>
                                <div>
                                    <?php echo wp_trim_words(get_the_content(), 40, '...' ); ?>
                                </div>
                                <a
                                    href="<?php echo get_permalink($traitement->ID) ?>"
                                    class="animate main__button"
                                    title="<?php echo $traitement->post_title; ?>"
                                >
                                    <span>
                                        <?php esc_attr_e( 'Découvrir', 'mediweb' ); ?>
                                    </span>
                                    <svg class="animate" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_3507_910)">
                                            <circle cx="15" cy="15" r="15" fill="#A5B6BB"/>
                                            <path d="M8 15L23 15" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M16 8L23 15L16 22" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_3507_910">
                                                <rect width="30" height="30" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            <?php } ?>

            <?php
                get_template_part( 'template-parts/back-button' );
            ?>
        </div>
    </section>

<?php get_footer(); ?>