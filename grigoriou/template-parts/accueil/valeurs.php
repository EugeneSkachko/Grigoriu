<?php if ( get_field('valeurs_enable') == true ) { ?>
<section id="valeurs">
    <div class="row row__width">
        <h2>
            <?php esc_attr_e( 'Valeurs', 'mediweb' ); ?>
        </h2>
        <?php if( have_rows('valeurs_repeater') ) : $counter = 1;?>
            <div class="valeurs__wrapper">
                <?php while( have_rows('valeurs_repeater') ): the_row();
                    $valeur_repeater_title = get_sub_field('valeur_repeater_title');
                    $valeur_repeater_svg = get_sub_field('valeur_repeater_svg');
                    ?>
                    <div class="valeurs__single" data-aos="fade-up" data-aos-duration="<?php echo $counter * 500; ?>">
                        <?php echo $valeur_repeater_svg; ?>
                        <span>
                            <?php echo $valeur_repeater_title; ?>
                        </span>
                    </div>
                <?php $counter++; endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
<?php } ?>