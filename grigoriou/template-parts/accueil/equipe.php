<?php if ( get_field('equipe_enable') == true ) { ?>
<section id="equipe">
    <div class="row row__width">
        <h2>
            <?php esc_attr_e( 'Équipe', 'mediweb' ); ?>
        </h2>
        <div class="equipe__block">
            <?php if( have_rows('equipe_repeater') ) : $counter = 1;?>
                <div class="equipe__nav">
                    <div class="equipe__counter"></div>
                    <div class="equipe__arrows">
                        <div class="equipe__arrow-prev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="24" viewBox="0 0 40 24" fill="none">
                                <path d="M35 12H5" stroke="#49656D" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 19L5 12L12 5" stroke="#49656D" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="equipe__arrow--next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="24" viewBox="0 0 40 24" fill="none">
                                <path d="M5 12H35" stroke="#49656D" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M28 19L35 12L28 5" stroke="#49656D" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="equipe__wrapper" data-aos="fade-left" data-aos-duration="1000">
                    <?php while( have_rows('equipe_repeater') ): the_row();
                        $equipe_repeater_image = get_sub_field('equipe_repeater_image');
                        $equipe_repeater_name = get_sub_field('equipe_repeater_name');
                        $equipe_repeater_position = get_sub_field('equipe_repeater_position');
                        $equipe_repeater_link = get_sub_field('equipe_repeater_link');
                        ?>
                        <div class="equipe__single">
                            <div class="equipe__single--slide animate">
                                <a href="<?php echo $equipe_repeater_link;?>" title="<?php echo $equipe_repeater_name;?>" target="_blank">
                                    <span>
                                        <?php esc_attr_e( 'Découvrir son parcours', 'mediweb' ); ?>
                                    </span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                        <g clip-path="url(#clip0_3726_574)">
                                            <circle cx="15" cy="15" r="15" fill="#A5B6BB"/>
                                            <path d="M8 15L23 15" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M16 8L23 15L16 22" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_3726_574">
                                                <rect width="30" height="30" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                            <img
                                src="<?php echo $equipe_repeater_image['url'];?>"
                                alt="<?php echo $equipe_repeater_image['alt'];?>"
                            >
                            <div class="equipe__single--content">
                                <span class="equipe__single--title">
                                    <?php echo $equipe_repeater_name;?>
                                </span>
                                <span>
                                    <?php echo $equipe_repeater_position;?>
                                </span>
                            </div>
                        </div>
                    <?php $counter++; endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<script>
    jQuery(function ($) {
        $(".equipe__wrapper").on("init", function(event, slick){
            $(".equipe__counter").text(parseInt(slick.currentSlide + 1) + ' / ' + slick.slideCount);
            $(".equipe__nav").addClass("count__" + slick.slideCount)
        });
        $(".equipe__wrapper").on("afterChange", function(event, slick){
            $(".equipe__counter").text(parseInt(slick.currentSlide + 1) + ' / ' + slick.slideCount);
        });
        $('.equipe__wrapper').slick({
            autoplay: true,
            infinite: true,
            autoplaySpeed: 5000,
            speed: 1500,
            dots: false,
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: false,
            responsive: [
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 1441,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    },
                }
            ],
        });

        $('.equipe__arrow--next').on('click', function(){
            $('.equipe__wrapper').slick('slickNext');
        });
        $('.equipe__arrow-prev').on('click', function(){
            $('.equipe__wrapper').slick('slickPrev');
        });
    });
</script>
<?php } ?>