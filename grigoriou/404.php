<?php get_header(); ?>

<section class="error">
    <?php
        get_template_part( 'template-parts/scroll-block' );
    ?>
    <div class="row row__width">
        <div class="error__content">
            <div>
                <span class="error__number">
                    404
                </span>
                <span class="error__title">
                     <?php esc_attr_e( 'Page non trouvée', 'mediweb' ); ?>
                </span>
                <span class="error__subtitle">
                    <?php esc_attr_e( 'Que ce soit à cause d\'un lien invalide ou d\'une mauvaise URL, vous pouvez retourner à la page d\'accueil en cliquant sur le bouton ci-dessous :', 'mediweb' ); ?>
                </span>
            </div>
            <a
                    title="<?php esc_attr_e( 'Retour à la page d\'accueil', 'mediweb' ); ?>"
                    class="error__button animate main__button"
                    href="<?php echo esc_url( home_url( '/' ) ); ?>"
            >
                <span>
                    <?php esc_attr_e( 'Retour à la page d\'accueil', 'mediweb' ); ?>
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
</section>

<?php get_footer(); ?>