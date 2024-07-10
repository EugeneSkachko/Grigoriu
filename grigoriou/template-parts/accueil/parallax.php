<?php if ( get_field('parallax_enable') == true ) { ?>
<section id="parallax">
    <div class="row row__width">
        <div class="parallax__wrapper">
            <?php $parallax_image = get_field('parallax_image'); ?>
            <img
                class="parallax__image"
                src="<?php echo esc_url($parallax_image['url']); ?>"
                alt="<?php echo esc_url($parallax_image['alt']); ?>"
            >
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>
<script>
    var image = document.getElementsByClassName('parallax__image');
    new simpleParallax(image);
</script>
<?php } ?>