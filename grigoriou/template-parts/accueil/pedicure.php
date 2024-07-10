<?php if ( get_field('pedicure_enable') == true ) { ?>
<section id="pedicure">
    <div class="row row__width">
        <h2>
            <?php the_field('pedicure_title'); ?>
        </h2>
        <div class="pedicure__wrapper">
            <div class="pedicure__left" data-aos="fade-up" data-aos-duration="1000">
                <?php $pedicure_image = get_field('pedicure_image'); ?>
                <img
                    src="<?php echo esc_url($pedicure_image['url']); ?>"
                    alt="<?php echo esc_url($pedicure_image['alt']); ?>"
                >
            </div>
            <div class="pedicure__right">
                <?php the_field('pedicure_description'); ?>
                <?php $pedicure_link = get_field('pedicure_link'); ?>
                <a href="<?php echo esc_url( $pedicure_link ); ?>" class="animate main__button" title="<?php the_field('pedicure_title'); ?>">
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
</section>
<?php } ?>