<?php if ( get_field('cas_enable') == true ) { ?>
<section id="cas">
    <div class="row row__width">
        <div class="cas__wrapper">
            <div class="cas__column cas__column--first">
                <h2>
                    <?php esc_attr_e( 'Cas clinique ', 'mediweb' ); ?>
                </h2>
                <a
                    href="<?php the_field('cas_link'); ?>"
                    class="animate main__button"
                    title="<?php esc_attr_e( 'Découvrir tous les cas', 'mediweb' ); ?>"
                >
                    <span>
                        <?php esc_attr_e( 'Découvrir tous les cas', 'mediweb' ); ?>
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
            <div class="cas__column cas__column--last">
                <?php
                $post_args = array(
                    'posts_per_page' => 1,
                    'post_type' => 'cas',
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
                );
                $cas = get_posts($post_args);
                ?>
                <?php if ( ! empty( $cas) && is_array( $cas ) ) { ?>
                    <?php foreach ( $cas as $ca ) : setup_postdata( $ca );?>
                        <div class="cas__single">
                            <div class="cas__single--left" data-aos="fade-up" data-aos-duration="1000">
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
                            <div class="cas__single--right">
                                <?php echo get_field('cas_description', $ca->ID); ?>
                                <div class="cas__single--nav">
                                    <div class="cas__single--counter"></div>
                                    <div class="cas__single--arrows">
                                        <div class="cas__single--arrow--prev">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="24" viewBox="0 0 40 24" fill="none">
                                                <path d="M35 12H5" stroke="#49656D" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M12 19L5 12L12 5" stroke="#49656D" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                        <div class="cas__single--arrow--next">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="24" viewBox="0 0 40 24" fill="none">
                                                <path d="M5 12H35" stroke="#49656D" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M28 19L35 12L28 5" stroke="#49656D" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>
                <?php } ?>
                <script>
                    jQuery(function ($) {
                        $(".cas__single--left").on("init", function(event, slick){
                            $(".cas__single--counter").text(parseInt(slick.currentSlide + 1) + ' / ' + slick.slideCount);
                        });
                        $(".cas__single--left").on("afterChange", function(event, slick){
                            $(".cas__single--counter").text(parseInt(slick.currentSlide + 1) + ' / ' + slick.slideCount);
                        });
                        $('.cas__single--left').slick({
                            autoplay: true,
                            adaptiveHeight: true,
                            infinite: true,
                            autoplaySpeed: 5000,
                            speed: 1500,
                            dots: false,
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            arrows: false,
                        });
                        $('.cas__single--arrow--next').on('click', function(){
                            $('.cas__single--left').slick('slickNext');
                        });
                        $('.cas__single--arrow-prev').on('click', function(){
                            $('.cas__single--left').slick('slickPrev');
                        });
                    });
                </script>
            </div>
        </div>
    </div>
</section>
<?php } ?>