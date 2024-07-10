<?php
/*
Template Name: Evenements list
*/
get_header(); ?>

<section class="events__list">
    <?php
        get_template_part( 'template-parts/scroll-block' );
    ?>
    <div class="row row__width">
        <div class="events__top">
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
        <div class="events__content">
            <div class="events__categories">
                <?php
                $filter = get_terms(
                        'category_evenements',
                        [
                            'hide_empty' => true
                        ]
                ); ?>
                <?php if ($filter) : ?>
                    <span class="animate active" data-filter="">
                        <?php esc_attr_e( 'Tous', 'mediweb' ); ?>
                    </span>
                    <?php foreach ($filter as $key => $blog_filter) : ?>
                        <span class="animate" data-filter="<?= $blog_filter->slug; ?>">
                            <?= $blog_filter->name; ?>
                        </span>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <?php
            $post_args = array(
                'posts_per_page' => -1,
                'post_type' => 'evenements',
                'orderby' => 'menu_order',
                'order' => 'ASC',
            );
            $evenements = get_posts($post_args);
            ?>
            <?php if ( ! empty( $evenements) && is_array( $evenements ) ) { ?>
                <div class="events__wrapper">
                <?php foreach ( $evenements as $evenement ) : setup_postdata( $evenement ); ?>
                    <div class="evenements__single" >
                        <div class="evenements__single--top">
                            <div>
                                <span>
                                     <?php echo get_field('event_monthyear', $evenement->ID); ?>
                                </span>
                                <span>
                                     <?php echo get_field('event_date', $evenement->ID); ?>
                                </span>
                            </div>
                            <div class="evenements__single--top--image">
                                <img
                                    src="<?php echo get_field('event_image', $evenement->ID)['url']; ?>"
                                    alt="<?php echo get_field('event_image', $evenement->ID)['alt']; ?>"
                                >
                            </div>
                        </div>
                        <div class="evenements__single--bottom">
                            <div>
                                <h2>
                                    <?php echo $evenement->post_title; ?>
                                </h2>
                                <span>
                                    <?php echo get_field('event_lieu', $evenement->ID); ?>
                                </span>
                            </div>
                            <div>
                                <a
                                    href="<?php echo get_permalink($evenement->ID) ?>"
                                    class="animate main__button"
                                    title="<?php echo $evenement->post_title; ?>"
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
                    </div>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
                </div>
            <?php } ?>
        </div>
        <?php
            get_template_part( 'template-parts/back-button' );
        ?>
        <script>
            jQuery(function ($) {
                var ajax_url = "<?php echo site_url() ?>/wp-admin/admin-ajax.php";
                $('.events__categories span').click(function () {
                    $('.events__categories span').removeClass('active');
                    $(this).addClass('active');
                    formFilter();
                });
                function formFilter() {
                    var category = $('.events__categories .active').attr('data-filter');
                    var data = {
                        action: 'event_filter_function',
                        name: "category",
                        value: category
                    };
                    $.ajax({
                        url: ajax_url,
                        data: data,
                        type: 'POST',
                        success : function( data ){
                            $('.events__wrapper').html(data.substring(0, data.length - 1));
                            $('.events__wrapper').get(0).scrollIntoView({ behavior: 'smooth', block: 'start' });
                        }
                    });
                }
            });
        </script>
    </div>
</section>

<?php get_footer(); ?>