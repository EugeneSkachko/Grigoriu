<?php
/*
Template Name: Cas list
*/
get_header(); ?>

<section class="cas__list">
    <?php
        get_template_part( 'template-parts/scroll-block' );
    ?>
    <div class="row row__width">
        <div class="cas__top">
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
        <div class="cas__content">
            <div class="cas__categories">
                <?php
                $filter = get_terms(
                        'category_cas',
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
                'post_type' => 'cas',
                'orderby' => 'menu_order',
                'order' => 'ASC',
            );
            $cas = get_posts($post_args);
            ?>
            <?php if ( ! empty( $cas) && is_array( $cas ) ) { ?>
                <div class="cas__block">
                <?php $counter = 1; foreach ( $cas as $ca ) : setup_postdata( $ca );  ?>
                    <div class="cas__wrapper--single">
                        <div class="cas__wrapper--left">
                            <h2>
                                <?php echo $ca->post_title; ?>
                            </h2>
                        </div>
                        <div class="cas__wrapper--center cas__wrapper--center-<?php echo $counter; ?>">
                            <?php if( have_rows('cas_repeater', $ca->ID) ): while ( have_rows('cas_repeater', $ca->ID) ) : the_row();
                                $cas_repeater_image = get_sub_field('cas_repeater_image');
                                ?>
                                <img
                                    src="<?php echo $cas_repeater_image['url']; ?>"
                                    alt="<?php echo $cas_repeater_image['alt']; ?>"
                                >
                            <?php endwhile;?>
                            <?php endif; ?>
                        </div>
                        <div class="cas__wrapper--right">
                            <?php echo get_field('cas_description', $ca->ID); ?>
                            <div class="cas__single--nav">
                                <div class="cas__single--counter cas__single--counter-<?php echo $counter; ?>"></div>
                                <div class="cas__single--arrows">
                                    <div class="cas__single--arrow--prev cas__single--arrow--prev-<?php echo $counter; ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="24" viewBox="0 0 40 24" fill="none">
                                            <path d="M35 12H5" stroke="#49656D" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12 19L5 12L12 5" stroke="#49656D" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <div class="cas__single--arrow--next cas__single--arrow--next-<?php echo $counter; ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="24" viewBox="0 0 40 24" fill="none">
                                            <path d="M5 12H35" stroke="#49656D" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M28 19L35 12L28 5" stroke="#49656D" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            jQuery(function ($) {
                                $(".cas__wrapper--center-<?php echo $counter; ?>").on("init", function(event, slick){
                                    $(".cas__single--counter-<?php echo $counter; ?>").text(parseInt(slick.currentSlide + 1) + ' / ' + slick.slideCount);
                                });
                                $(".cas__wrapper--center-<?php echo $counter; ?>").on("afterChange", function(event, slick){
                                    $(".cas__single--counter-<?php echo $counter; ?>").text(parseInt(slick.currentSlide + 1) + ' / ' + slick.slideCount);
                                });
                                $('.cas__wrapper--center-<?php echo $counter; ?>').slick({
                                    autoplay: true,
                                    infinite: false,
                                    adaptiveHeight: true,
                                    autoplaySpeed: 5000,
                                    speed: 1500,
                                    dots: false,
                                    slidesToShow: 1,
                                    slidesToScroll: 1,
                                    arrows: false,
                                });
                                $('.cas__single--arrow--next-<?php echo $counter; ?>').on('click', function(){
                                    $('.cas__wrapper--center-<?php echo $counter; ?>').slick('slickNext');
                                });
                                $('.cas__single--arrow-prev-<?php echo $counter; ?>').on('click', function(){
                                    $('.cas__wrapper--center-<?php echo $counter; ?>').slick('slickPrev');
                                });
                            });
                        </script>
                    </div>
                <?php $counter++; endforeach; ?>
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
                $('.cas__categories span').click(function () {
                    $('.cas__categories span').removeClass('active');
                    $(this).addClass('active');
                    formFilter();
                });
                function formFilter() {
                    var category = $('.cas__categories .active').attr('data-filter');
                    var data = {
                        action: 'cas_filter_function',
                        name: "category",
                        value: category
                    };
                    $.ajax({
                        url: ajax_url,
                        data: data,
                        type: 'POST',
                        success : function( data ){
                            $('.cas__block').html(data.substring(0, data.length - 1));
                            $('.cas__block').get(0).scrollIntoView({ behavior: 'smooth', block: 'start' });
                        }
                    });
                }
            });
        </script>
    </div>
</section>

<?php get_footer(); ?>