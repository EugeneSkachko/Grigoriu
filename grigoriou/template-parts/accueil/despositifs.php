<?php if ( get_field('despositifs_enable') == true ) { ?>
<section id="despositifs">
    <div class="row">
        <h2>
            <?php esc_attr_e( 'Dispositifs médicaux', 'mediweb' ); ?>
        </h2>
        <div class="despositifs__wrapper">
            <?php $despositifs_image = get_field('despositifs_image'); ?>
            <img
                src="<?php echo esc_url($despositifs_image['url']); ?>"
                alt="<?php echo esc_url($despositifs_image['alt']); ?>"
            />
            <div class="despositifs__content">
                <div>
                    <?php the_field('despositifs_description'); ?>
                </div>
                <a href="<?php the_field('despositifs_link'); ?>" class="animate main__button" title="<?php esc_attr_e( 'Dispositifs médicaux', 'mediweb' ); ?>">
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