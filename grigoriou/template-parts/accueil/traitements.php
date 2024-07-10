<section id="traitements">
    <div class="row row__width">
        <h2>
            <?php esc_attr_e( 'Traitements', 'mediweb' ); ?>
        </h2>
        <div class="traitements__wrapper">
            <div class="traitements__left">
                <?php
                $filter = get_terms(
                    'category_traitements',
                    [
                        'hide_empty' => false
                    ]
                ); ?>
                <?php if ($filter) : ?>
                    <?php foreach ($filter as $key => $traitements_filter) : ?>
                        <div class="traitements__single">
                            <a
                               href="<?php echo esc_url( home_url( '/' ) ) . 'traitements/' .  $traitements_filter->slug ; ?>"
                               title="<?= $traitements_filter->name; ?>"
                            >
                                <?= $traitements_filter->name; ?>
                            </a>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <?php
                $traitements_repeater_link = get_field('traitements_repeater');
            ?>

            <div class="traitements__right" data-aos="fade-left" data-aos-duration="1000">
                <svg width="478" height="438" viewBox="0 0 478 438" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <a
                        href="<?php echo get_permalink($traitements_repeater_link[0]['traitements_repeater_link']->ID) ?>"
                        title="<?php echo $traitements_repeater_link[0]['traitements_repeater_link']->post_title ?>"
                    >
                        <g id="trait1">
                            <circle class="circle1" opacity="0.2" cx="287.982" cy="238.615" r="14" fill="#49656D"/>
                            <circle class="circle2" cx="287.982" cy="238.615" r="6" fill="#49656D"/>
                        </g>
                    </a>
                    <a
                        href="<?php echo get_permalink($traitements_repeater_link[1]['traitements_repeater_link']->ID) ?>"
                        title="<?php echo $traitements_repeater_link[1]['traitements_repeater_link']->post_title ?>"
                    >
                        <g id="trait2">
                            <circle class="circle1" opacity="0.2" cx="404.806" cy="403.978" r="14" fill="#49656D"/>
                            <circle class="circle2" cx="404.806" cy="403.978" r="6" fill="#49656D"/>
                        </g>
                    </a>
                    <a
                        href="<?php echo get_permalink($traitements_repeater_link[2]['traitements_repeater_link']->ID) ?>"
                        title="<?php echo $traitements_repeater_link[2]['traitements_repeater_link']->post_title ?>"
                    >
                        <g id="trait3">
                            <circle class="circle1" opacity="0.2" cx="299.5" cy="420.432" r="14" fill="#49656D"/>
                            <circle class="circle2" cx="299.5" cy="420.432" r="6" fill="#49656D"/>
                        </g>
                    </a>
                    <a
                        href="<?php echo get_permalink($traitements_repeater_link[3]['traitements_repeater_link']->ID) ?>"
                        title="<?php echo $traitements_repeater_link[3]['traitements_repeater_link']->post_title ?>"
                    >
                        <g id="trait4">
                            <circle class="circle1" opacity="0.2" cx="264.946" cy="44.4573" r="14" fill="#49656D"/>
                            <circle class="circle2" cx="264.946" cy="44.4573" r="6" fill="#49656D"/>
                        </g>
                    </a>
                    <a
                        href="<?php echo get_permalink($traitements_repeater_link[4]['traitements_repeater_link']->ID) ?>"
                        title="<?php echo $traitements_repeater_link[4]['traitements_repeater_link']->post_title ?>"
                    >
                        <g id="trait5">
                            <circle class="circle1" opacity="0.2" cx="224.634" cy="14.0173" r="14" fill="#49656D"/>
                            <circle class="circle2" cx="224.634" cy="14.0173" r="6" fill="#49656D"/>
                        </g>
                    </a>
                    <a
                        href="<?php echo get_permalink($traitements_repeater_link[5]['traitements_repeater_link']->ID) ?>"
                        title="<?php echo $traitements_repeater_link[5]['traitements_repeater_link']->post_title ?>"
                    >
                        <g id="trait6">
                            <circle class="circle1" opacity="0.2" cx="218.052" cy="106.16" r="14" fill="#49656D"/>
                            <circle class="circle2" cx="218.052" cy="106.16" r="6" fill="#49656D"/>
                        </g>
                    </a>
                    <a
                        href="<?php echo get_permalink($traitements_repeater_link[6]['traitements_repeater_link']->ID) ?>"
                        title="<?php echo $traitements_repeater_link[6]['traitements_repeater_link']->post_title ?>"
                    >
                        <g id="trait7">
                            <circle class="circle1" opacity="0.2" cx="464" cy="303.518" r="14" fill="#49656D"/>
                            <circle class="circle2" cx="464" cy="303.518" r="6" fill="#49656D"/>
                        </g>
                    </a>
                    <a
                        href="<?php echo get_permalink($traitements_repeater_link[7]['traitements_repeater_link']->ID) ?>"
                        title="<?php echo $traitements_repeater_link[7]['traitements_repeater_link']->post_title ?>"
                    >
                        <g id="trait8">
                            <circle class="circle1" opacity="0.2" cx="72.4336" cy="372.716" r="14" fill="#49656D"/>
                            <circle class="circle2" cx="72.4336" cy="372.716" r="6" fill="#49656D"/>
                        </g>
                    </a>
                    <a
                        href="<?php echo get_permalink($traitements_repeater_link[8]['traitements_repeater_link']->ID) ?>"
                        title="<?php echo $traitements_repeater_link[8]['traitements_repeater_link']->post_title ?>"
                    >
                        <g id="trait9">
                            <circle class="circle1" opacity="0.2" cx="14.8442" cy="397.397" r="14" fill="#49656D"/>
                            <circle class="circle2" cx="14.8442" cy="397.397" r="6" fill="#49656D"/>
                        </g>
                    </a>
                    <a
                        href="<?php echo get_permalink($traitements_repeater_link[9]['traitements_repeater_link']->ID) ?>"
                        title="<?php echo $traitements_repeater_link[9]['traitements_repeater_link']->post_title ?>"
                    >
                        <g id="trait10">
                            <circle class="circle1" opacity="0.2" cx="103" cy="417.745" r="14" fill="#49656D"/>
                            <circle class="circle2" cx="103" cy="417.745" r="6" fill="#49656D"/>
                        </g>
                    </a>
                    <a
                        href="<?php echo get_permalink($traitements_repeater_link[10]['traitements_repeater_link']->ID) ?>"
                        title="<?php echo $traitements_repeater_link[10]['traitements_repeater_link']->post_title ?>"
                    >
                        <g id="trait11">
                            <circle class="circle1" opacity="0.2" cx="127.555" cy="278.105" r="14" fill="#49656D"/>
                            <circle class="circle2" cx="127.555" cy="278.105" r="6" fill="#49656D"/>
                        </g>
                    </a>
                </svg>
                <img
                    src="/wp-content/themes/grigoriou/images/traitements_one.png"
                    alt="<?php esc_attr_e( 'Traitements', 'mediweb' ); ?>"
                />
            </div>
        </div>
    </div>
</section>