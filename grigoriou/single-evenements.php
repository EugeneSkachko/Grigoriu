<?php get_header(); ?>
<section class="event__single">
    <?php
        get_template_part( 'template-parts/scroll-block' );
    ?>
    <div class="event__top">
        <?php echo the_post_thumbnail(); ?>
        <div class="row row__width">
            <div class="event__top--date">
                <span>
                    <?php the_field('event_monthyear'); ?>
                </span>
                <span>
                    <?php the_field('event_date'); ?>
                </span>
            </div>
        </div>
    </div>
    <div class="event__content">
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
                <a
                    href="<?php echo get_permalink(137); ?>"
                    title="<?php echo get_the_title(137); ?>"
                >
                    <?php echo get_the_title(137); ?>
                </a>
                <div> | </div>
                <span>
                    <?php echo the_title(); ?>
                </span>
            </div>
            <div class="event__main">
                <div class="event__main--left">
                    <div>
                        <h2>
                            <?php esc_attr_e( 'Prochaine date', 'mediweb' ); ?>
                        </h2>
                        <span>
                            <?php the_field('event_next_date'); ?>
                        </span>
                    </div>
                    <div>
                        <h3>
                            <?php esc_attr_e( 'Pour qui?', 'mediweb' ); ?>
                        </h3>
                        <?php the_field('event_description'); ?>
                        <a
                            href="<?php the_field('event_site'); ?>"
                            class="animate main__button"
                            title="<?php echo the_title(); ?>"
                            target="_blank"
                        >
                            <span>
                                <?php esc_attr_e( 'Découvrir site', 'mediweb' ); ?>
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
                <div class="event__main--right">
                    <div>
                        <h2>
                            <?php esc_attr_e( 'Lieu', 'mediweb' ); ?>
                        </h2>
                        <span>
                            <?php the_field('event_lieu'); ?>
                        </span>
                    </div>
                    <div>
                        <?php $event_image = get_field('event_image'); ?>
                        <img
                            src="<?php echo esc_url($event_image['url']); ?>"
                            alt="<?php echo esc_url($event_image['alt']); ?>"
                        >
                    </div>
                </div>
            </div>
            <div class="event__program">
                <h3>
                    <?php esc_attr_e( 'Program', 'mediweb' ); ?>
                </h3>
                <?php if( have_rows('event_program_repeater') ) : $counter = 1;?>
                    <div class="event__program--wrapper">
                        <?php while( have_rows('event_program_repeater') ): the_row();
                            $event_program_repeater_day = get_sub_field('event_program_repeater_day');
                            $event_program_repeater_date = get_sub_field('event_program_repeater_date');
                            $event_program_repeater_content = get_sub_field('event_program_repeater_content');
                        ?>
                            <div class="event__program--col">
                                <span class="event__program--day">
                                    <?php echo $event_program_repeater_day; ?>
                                </span>
                                <span class="event__program--date">
                                    <?php echo $event_program_repeater_date; ?>
                                </span>
                                <div class="event__program--content">
                                    <?php echo $event_program_repeater_content; ?>
                                </div>
                            </div>
                        <?php $counter++; endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="event__contenu">
                <h3>
                    <?php esc_attr_e( 'Contenu', 'mediweb' ); ?>
                </h3>
                <?php if( have_rows('event_images_repeater') ) : $counter = 1;?>
                    <div class="event__contenu--wrapper">
                        <?php while( have_rows('event_images_repeater') ): the_row();
                            $event_images_repeater_image = get_sub_field('event_images_repeater_image');
                            ?>
                            <div class="event__contenu__single">
                                <img
                                    src="<?php echo $event_images_repeater_image['url'];?>"
                                    alt="<?php echo $event_images_repeater_image['alt'];?>"
                                >
                            </div>
                        <?php $counter++; endwhile; ?>
                    </div>
                    <div class="event__contenu--nav">
                        <div class="event__contenu--counter"></div>
                        <div class="event__contenu--arrows">
                            <div class="event__contenu--arrow--prev">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="24" viewBox="0 0 40 24" fill="none">
                                    <path d="M35 12H5" stroke="#49656D" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12 19L5 12L12 5" stroke="#49656D" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="event__contenu--arrow--next">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="24" viewBox="0 0 40 24" fill="none">
                                    <path d="M5 12H35" stroke="#49656D" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M28 19L35 12L28 5" stroke="#49656D" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <script>
                        jQuery(function ($) {
                            $(".event__contenu--wrapper").on("init", function(event, slick){
                                $(".event__contenu--counter").text(parseInt(slick.currentSlide + 1) + ' / ' + slick.slideCount);
                            });
                            $(".event__contenu--wrapper").on("afterChange", function(event, slick){
                                $(".event__contenu--counter").text(parseInt(slick.currentSlide + 1) + ' / ' + slick.slideCount);
                            });
                            $('.event__contenu--wrapper').slick({
                                autoplay: true,
                                infinite: true,
                                adaptiveHeight: true,
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
                            $('.event__contenu--arrow--next').on('click', function(){
                                $('.event__contenu--wrapper').slick('slickNext');
                            });
                            $('.event__contenu--arrow--prev').on('click', function(){
                                $('.event__contenu--wrapper').slick('slickPrev');
                            });
                        });
                    </script>
                <?php endif; ?>
            </div>
            <?php
                get_template_part( 'template-parts/back-button' );
            ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>