<?php if ( get_field('slideshow_enable') == true ) { ?>
    <section id="slideshow">
        <?php if( have_rows('slideshow_repeater') ) : $counter = 1;?>
            <div class="slideshow__wrapper">
                <?php while( have_rows('slideshow_repeater') ): the_row();
                    $slideshow_repeater_image = get_sub_field('slideshow_repeater_image');
                ?>
                <div class="slideshow__single">
                    <img
                        src="<?php echo $slideshow_repeater_image['url'];?>"
                        alt="<?php echo $slideshow_repeater_image['alt'];?>"
                    >
                </div>
                <?php $counter++; endwhile; ?>
            </div>
            <div class="slideshow__nav row__width">
                <div class="slideshow__dots"></div>
            </div>
        <?php endif; ?>
        <div class="slideshow__title">
            <div>
                <h1>
                    <?php the_field('slideshow_title'); ?>
                </h1>
            </div>
        </div>
    </section>

    <script>
        jQuery(function ($) {
            $('.slideshow__wrapper').slick({
                autoplay: true,
                autoplaySpeed: 5000,
                speed: 1500,
                dots: true,
                appendDots: $(".slideshow__dots"),
                arrows: false
            });
        });
    </script>
<?php } ?>