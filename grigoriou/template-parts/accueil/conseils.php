<section id="conseils">
    <div class="row row__width">
        <div class="conseils__wrapper">
            <div class="conseils__left">
                <?php if ( get_field('espace_patient_enable') == true ) { ?>
                <h2>
                    <?php esc_attr_e( 'Espace patient', 'mediweb' ); ?>
                </h2>
                <div class="conseils__left--phone">
                    <span>
                        <?php esc_attr_e( 'Téléphone', 'mediweb' ); ?>
                    </span>
                    <a href="tel:<?php the_field('phone', 'option'); ?>" title="<?php the_field('phone', 'option'); ?>">
                        <?php the_field('phone', 'option'); ?>
                    </a>
                </div>
                <div>
                    <a href="<?php the_field('espace_patient_link'); ?>" class="animate main__button" title="<?php esc_attr_e( 'Questionnaire medical', 'mediweb' ); ?>">
                        <span>
                            <?php esc_attr_e( 'Questionnaire medical', 'mediweb' ); ?>
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
                <?php } ?>
            </div>
            <div class="conseils__right">
                <?php if ( get_field('conseils_enable') == true ) { ?>
                <h2>
                    <?php esc_attr_e( 'Conseils', 'mediweb' ); ?>
                </h2>
                <div class="conseils__main">
                    <div id="conseilsFilters" class="conseils__categories ">
                        <button class="conseils__button is-checked animate" data-filter="*">Tous</button>
                        <button class="conseils__button animate" data-filter=".podologie">Podologie</button>
                        <button class="conseils__button animate" data-filter=".pedicurie">Pédicurie</button>
                    </div>
                    <?php if( have_rows('conseils_repeater') ) : $counter = 1;?>
                        <div class="conseils__content">
                            <?php while( have_rows('conseils_repeater') ): the_row();
                                $conseils_repeater_title = get_sub_field('conseils_repeater_title');
                                $conseils_repeater_pdf = get_sub_field('conseils_repeater_pdf');
                                $conseils_repeater_page = get_sub_field('conseils_repeater_page');
                                $conseils_repeater_pdf_category = get_sub_field('conseils_repeater_pdf_category');
                                ?>
                                <div class="conseils__content--single <?php echo $conseils_repeater_pdf_category; ?>" data-category="<?php echo $conseils_repeater_pdf_category; ?>">
                                    <div>
                                        <?php if ($conseils_repeater_pdf) : ?>
                                        <a href="<?php echo $conseils_repeater_pdf['url']; ?>" title=" <?php echo $conseils_repeater_title; ?>" target="_blank">
                                            <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g filter="url(#filter0_b_3228_1308)">
                                                    <rect x="0.5" y="0.5" width="59" height="59" rx="13.5" stroke="#A5B6BB"/>
                                                </g>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M21.5001 15.8335H32.0334V24.3332C32.0334 24.775 32.3916 25.1332 32.8334 25.1332H41.3334V41.3335C41.3334 42.0849 41.0349 42.8056 40.5035 43.337C39.9722 43.8683 39.2515 44.1668 38.5001 44.1668H21.5001C20.7486 44.1668 20.028 43.8683 19.4966 43.337C18.9653 42.8056 18.6667 42.0849 18.6667 41.3335V18.6668C18.6667 17.9154 18.9653 17.1947 19.4966 16.6634C20.028 16.132 20.7486 15.8335 21.5001 15.8335ZM37.0834 20.0835L40.5331 23.5332H33.6334V16.6335L37.0834 20.0835ZM24.3334 30.6167C23.8916 30.6167 23.5334 30.9749 23.5334 31.4167C23.5334 31.8585 23.8916 32.2167 24.3334 32.2167H35.6668C36.1086 32.2167 36.4668 31.8585 36.4668 31.4167C36.4668 30.9749 36.1086 30.6167 35.6668 30.6167H24.3334ZM23.5334 37.0832C23.5334 36.6414 23.8916 36.2832 24.3334 36.2832H35.6668C36.1086 36.2832 36.4668 36.6414 36.4668 37.0832C36.4668 37.525 36.1086 37.8832 35.6668 37.8832H24.3334C23.8916 37.8832 23.5334 37.525 23.5334 37.0832ZM24.3334 24.9502C23.8916 24.9502 23.5334 25.3084 23.5334 25.7502C23.5334 26.192 23.8916 26.5502 24.3334 26.5502H27.1668C27.6086 26.5502 27.9668 26.192 27.9668 25.7502C27.9668 25.3084 27.6086 24.9502 27.1668 24.9502H24.3334Z" fill="#A5B6BB"/>
                                                <defs>
                                                    <filter id="filter0_b_3228_1308" x="-12" y="-12" width="84" height="84" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                        <feGaussianBlur in="BackgroundImageFix" stdDeviation="6"/>
                                                        <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_3228_1308"/>
                                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_3228_1308" result="shape"/>
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </a>
                                        <?php elseif ($conseils_repeater_page) : ?>
                                            <a href="<?php echo get_permalink($conseils_repeater_page->ID) ?>" title="<?php echo $conseils_repeater_page->post_title; ?>">
                                                <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g filter="url(#filter0_b_3228_1308)">
                                                        <rect x="0.5" y="0.5" width="59" height="59" rx="13.5" stroke="#A5B6BB"/>
                                                    </g>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M21.5001 15.8335H32.0334V24.3332C32.0334 24.775 32.3916 25.1332 32.8334 25.1332H41.3334V41.3335C41.3334 42.0849 41.0349 42.8056 40.5035 43.337C39.9722 43.8683 39.2515 44.1668 38.5001 44.1668H21.5001C20.7486 44.1668 20.028 43.8683 19.4966 43.337C18.9653 42.8056 18.6667 42.0849 18.6667 41.3335V18.6668C18.6667 17.9154 18.9653 17.1947 19.4966 16.6634C20.028 16.132 20.7486 15.8335 21.5001 15.8335ZM37.0834 20.0835L40.5331 23.5332H33.6334V16.6335L37.0834 20.0835ZM24.3334 30.6167C23.8916 30.6167 23.5334 30.9749 23.5334 31.4167C23.5334 31.8585 23.8916 32.2167 24.3334 32.2167H35.6668C36.1086 32.2167 36.4668 31.8585 36.4668 31.4167C36.4668 30.9749 36.1086 30.6167 35.6668 30.6167H24.3334ZM23.5334 37.0832C23.5334 36.6414 23.8916 36.2832 24.3334 36.2832H35.6668C36.1086 36.2832 36.4668 36.6414 36.4668 37.0832C36.4668 37.525 36.1086 37.8832 35.6668 37.8832H24.3334C23.8916 37.8832 23.5334 37.525 23.5334 37.0832ZM24.3334 24.9502C23.8916 24.9502 23.5334 25.3084 23.5334 25.7502C23.5334 26.192 23.8916 26.5502 24.3334 26.5502H27.1668C27.6086 26.5502 27.9668 26.192 27.9668 25.7502C27.9668 25.3084 27.6086 24.9502 27.1668 24.9502H24.3334Z" fill="#A5B6BB"/>
                                                    <defs>
                                                        <filter id="filter0_b_3228_1308" x="-12" y="-12" width="84" height="84" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                            <feGaussianBlur in="BackgroundImageFix" stdDeviation="6"/>
                                                            <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_3228_1308"/>
                                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_3228_1308" result="shape"/>
                                                        </filter>
                                                    </defs>
                                                </svg>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                    <div>
                                    <?php if ($conseils_repeater_pdf) : ?>
                                        <a href="<?php echo $conseils_repeater_pdf['url']; ?>" title=" <?php echo $conseils_repeater_title; ?>" target="_blank">
                                            <span>
                                                <?php echo $conseils_repeater_title; ?>
                                            </span>
                                            <div>
                                                <span>
                                                    <?php esc_attr_e( 'Télécharger', 'mediweb' ); ?>
                                                </span>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M21 15V19C21 19.5304 20.7893 20.0391 20.4142 20.4142C20.0391 20.7893 19.5304 21 19 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V15" stroke="#222222" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7 10L12 15L17 10" stroke="#222222" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M12 15V3" stroke="#222222" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </div>
                                        </a>
                                    <?php elseif ($conseils_repeater_page) : ?>
                                        <a href="<?php echo get_permalink($conseils_repeater_page->ID) ?>" title="<?php echo $conseils_repeater_page->post_title; ?>">
                                            <span>
                                                <?php echo $conseils_repeater_page->post_title; ?>
                                            </span>
                                            <div>
                                                <a
                                                        title="<?php echo $conseils_repeater_page->post_title; ?>"
                                                        class="error__button animate main__button"
                                                        href="<?php echo get_permalink($conseils_repeater_page->ID) ?>"
                                                >
                                                    <span>
                                                        <?php esc_attr_e( 'Voir', 'mediweb' ); ?>
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
                                        </a>
                                    <?php endif; ?>
                                    </div>
                                </div>
                            <?php $counter++; endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
<script>
    jQuery(function ($) {
        var $grid = $('.conseils__content').isotope({
            itemSelector: '.conseils__content--single',
            layoutMode: 'fitRows',
        });
        $('#conseilsFilters').on( 'click', 'button', function() {
            var filterValue = $( this ).attr('data-filter');
            $grid.isotope({ filter: filterValue });
        });
        $('.conseils__categories').each( function( i, buttonGroup ) {
            var $buttonGroup = $( buttonGroup );
            $buttonGroup.on( 'click', 'button', function() {
                $buttonGroup.find('.is-checked').removeClass('is-checked');
                $( this ).addClass('is-checked');
            });
        });
    });
</script>