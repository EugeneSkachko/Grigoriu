<?php
function theme_scripts() {
    wp_enqueue_style( 'default-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'slick-style', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css' );
    wp_enqueue_style( 'aos-style', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css' );

    wp_enqueue_script('jquery');
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js' );
//    wp_enqueue_script( 'gmap', 'https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAHkXfxdPZ6JtmNt7NzUQDL3DSoVqZavJo' );
    wp_enqueue_script( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js' );
    wp_enqueue_script( 'headroom', 'https://cdnjs.cloudflare.com/ajax/libs/headroom/0.12.0/headroom.min.js' );
    wp_enqueue_script( 'jQheadroom', 'https://cdnjs.cloudflare.com/ajax/libs/headroom/0.12.0/jQuery.headroom.min.js' );
    wp_enqueue_script( 'aos', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js' );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

function main_menu() {
    register_nav_menu('main-menu',_( 'Main Menu' ));
}
add_action( 'init', 'main_menu' );

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}

add_theme_support('post-thumbnails');

add_theme_support('category-thumbnails');

add_filter( 'acf/admin/prevent_escaped_html_notice', '__return_true' );

add_action('init', 'register_post_types');
function register_post_types()
{
    register_post_type(
        'traitements',
        array(
            'label' => __('Traitements'),
            'labels' => array(
                'name' => _x('Traitements', 'Post Type General Name', 'mediweb'),
                'singular_name' => _x('Traitements', 'Post Type Singular Name', 'mediweb'),
                'parent_item_colon' => __('Parent', 'mediweb'),
                'all_items' => __('Tous', 'mediweb'),
                'view_item' => __('Voir', 'mediweb'),
                'add_new_item' => __('Ajouter', 'mediweb'),
                'add_new' => __('Ajouter', 'mediweb'),
                'edit_item' => __('Editer', 'mediweb'),
                'update_item' => __('Mise à jour', 'mediweb'),
                'search_items' => __('Recherche', 'mediweb'),
                'not_found' => __('Non trouvé', 'mediweb'),
                'not_found_in_trash' => __('Non trouvé dans la corbeille', 'mediweb'),
            ),
            'description' => '',
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'menu_icon' => 'dashicons-universal-access-alt',
            'show_in_rest' => true,
            'rest_base' => '',
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'exclude_from_search' => false,
            'menu_position' => 5,
            'capability_type' => 'post',
            'map_meta_cap' => true,
            'hierarchical' => false,
            'rewrite' => ['slug' => 'traitements/%category_traitements%'],
            'has_archive' => false,
            'can_export' => true,
            'query_var' => true,
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'comments', 'revisions', 'post-formats',)
        )
    );

    register_taxonomy_for_object_type('traitements_category', 'traitements');

    register_taxonomy(
        'category_traitements',
        array('traitements'),
        array(
            'labels' => array(
                'name' => 'Catégorie',
                'add_new_item' => 'Nouvelle catégorie',
                'new_item_name' => "Nouvelle catégorie"
            ),
            'show_ui' => true,
            'show_tagcloud' => false,
            'hierarchical' => true,
            'show_in_rest' => true,
            'show_admin_column' => true,
            'rewrite' => array('slug' => 'traitements')
        )
    );

    function crunchify_create_post_link( $post_link, $id = 0 ){
        $post = get_post($id);
        if ( is_object( $post ) ){
            $terms = wp_get_object_terms( $post->ID, 'category_traitements' );
            if( $terms ){
                return str_replace( '%category_traitements%' , $terms[0]->slug , $post_link );
            }
        }
        return $post_link;
    }
    add_filter( 'post_type_link', 'crunchify_create_post_link', 1, 3 );

    register_post_type(
        'evenements',
        array(
            'label' => __('Événements'),
            'labels' => array(
                'name' => _x('Événements', 'Post Type General Name', 'mediweb'),
                'singular_name' => _x('Événements', 'Post Type Singular Name', 'mediweb'),
                'parent_item_colon' => __('Parent', 'mediweb'),
                'all_items' => __('Tous', 'mediweb'),
                'view_item' => __('Voir', 'mediweb'),
                'add_new_item' => __('Ajouter', 'mediweb'),
                'add_new' => __('Ajouter', 'mediweb'),
                'edit_item' => __('Editer', 'mediweb'),
                'update_item' => __('Mise à jour', 'mediweb'),
                'search_items' => __('Recherche', 'mediweb'),
                'not_found' => __('Non trouvé', 'mediweb'),
                'not_found_in_trash' => __('Non trouvé dans la corbeille', 'mediweb'),
            ),
            'description' => '',
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'menu_icon' => 'dashicons-book',
            'show_in_rest' => true,
            'rest_base' => '',
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'exclude_from_search' => false,
            'menu_position' => 6,
            'capability_type' => 'post',
            'map_meta_cap' => true,
            'hierarchical' => false,
            'rewrite' => ['slug' => 'evenements'],
            'has_archive' => false,
            'can_export' => true,
            'query_var' => true,
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'comments', 'revisions', 'post-formats',)
        )
    );

    register_taxonomy_for_object_type('evenements_category', 'evenements');

    register_taxonomy(
        'category_evenements',
        array('evenements'),
        array(
            'labels' => array(
                'name' => 'Catégorie',
                'add_new_item' => 'Nouvelle catégorie',
                'new_item_name' => "Nouvelle catégorie"
            ),
            'show_ui' => true,
            'show_tagcloud' => false,
            'hierarchical' => true,
            'show_in_rest' => true,
            'show_admin_column' => true,
            'rewrite' => array('slug' => 'evenements')
        )
    );

    register_post_type(
        'cas',
        array(
            'label' => __('Cas clinique '),
            'labels' => array(
                'name' => _x('Cas clinique ', 'Post Type General Name', 'mediweb'),
                'singular_name' => _x('Cas clinique ', 'Post Type Singular Name', 'mediweb'),
                'parent_item_colon' => __('Parent', 'mediweb'),
                'all_items' => __('Tous', 'mediweb'),
                'view_item' => __('Voir', 'mediweb'),
                'add_new_item' => __('Ajouter', 'mediweb'),
                'add_new' => __('Ajouter', 'mediweb'),
                'edit_item' => __('Editer', 'mediweb'),
                'update_item' => __('Mise à jour', 'mediweb'),
                'search_items' => __('Recherche', 'mediweb'),
                'not_found' => __('Non trouvé', 'mediweb'),
                'not_found_in_trash' => __('Non trouvé dans la corbeille', 'mediweb'),
            ),
            'description' => '',
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'menu_icon' => 'dashicons-heart',
            'show_in_rest' => true,
            'rest_base' => '',
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'exclude_from_search' => false,
            'menu_position' => 7,
            'capability_type' => 'post',
            'map_meta_cap' => true,
            'hierarchical' => false,
            'rewrite' => ['slug' => 'cas'],
            'has_archive' => false,
            'can_export' => true,
            'query_var' => true,
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'comments', 'revisions', 'post-formats',)
        )
    );

    register_taxonomy(
        'category_cas',
        array('cas'),
        array(
            'labels' => array(
                'name' => 'Catégorie',
                'add_new_item' => 'Nouvelle catégorie',
                'new_item_name' => "Nouvelle catégorie"
            ),
            'show_ui' => true,
            'show_tagcloud' => false,
            'hierarchical' => true,
            'show_in_rest' => true,
            'show_admin_column' => true,
            'rewrite' => array('slug' => 'evenements')
        )
    );

    register_post_type(
        'conseils',
        array(
            'label' => __('Conseils '),
            'labels' => array(
                'name' => _x('Conseils ', 'Post Type General Name', 'mediweb'),
                'singular_name' => _x('Conseils ', 'Post Type Singular Name', 'mediweb'),
                'parent_item_colon' => __('Parent', 'mediweb'),
                'all_items' => __('Tous', 'mediweb'),
                'view_item' => __('Voir', 'mediweb'),
                'add_new_item' => __('Ajouter', 'mediweb'),
                'add_new' => __('Ajouter', 'mediweb'),
                'edit_item' => __('Editer', 'mediweb'),
                'update_item' => __('Mise à jour', 'mediweb'),
                'search_items' => __('Recherche', 'mediweb'),
                'not_found' => __('Non trouvé', 'mediweb'),
                'not_found_in_trash' => __('Non trouvé dans la corbeille', 'mediweb'),
            ),
            'description' => '',
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'menu_icon' => 'dashicons-superhero',
            'show_in_rest' => true,
            'rest_base' => '',
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'exclude_from_search' => false,
            'menu_position' => 8,
            'capability_type' => 'post',
            'map_meta_cap' => true,
            'hierarchical' => false,
            'rewrite' => ['slug' => 'conseils'],
            'has_archive' => false,
            'can_export' => true,
            'query_var' => true,
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'comments', 'revisions', 'post-formats',)
        )
    );

    register_taxonomy(
        'category_conseils',
        array('conseils'),
        array(
            'labels' => array(
                'name' => 'Catégorie',
                'add_new_item' => 'Nouvelle catégorie',
                'new_item_name' => "Nouvelle catégorie"
            ),
            'show_ui' => true,
            'show_tagcloud' => false,
            'hierarchical' => true,
            'show_in_rest' => true,
            'show_admin_column' => true,
            'rewrite' => array('slug' => 'conseils')
        )
    );
}

add_action('wp_ajax_event_filter_function', 'event_filter_function');
add_action('wp_ajax_nopriv_event_filter_function', 'event_filter_function');
function event_filter_function() {
    if (isset($_POST['value']) && !empty($_POST['value'])) {
        $post_args = array(
            'posts_per_page' => -1,
            'post_type' => 'evenements',
            'tax_query' => array(
                array(
                    'taxonomy' => 'category_evenements',
                    'field' => 'slug',
                    'terms' => $_POST['value']
                ),
            ),
        );
    } else {
        $post_args = array(
            'posts_per_page' => -1,
            'post_type' => 'evenements',
        );
    }
    $evenements = get_posts($post_args);
    ?>
    <?php foreach ( $evenements as $evenement ) : setup_postdata( $evenement ); ?>
        <div class="evenements__single">
            <div class="evenements__single--top">
                <div>
                    <span>
                         <?php echo get_field('event_monthyear', $evenement->ID); ?>
                    </span>
                    <span>
                         <?php echo get_field('event_date', $evenement->ID); ?>
                    </span>
                </div>
                <div class="evenements__single--top--image">
                    <img
                        src="<?php echo get_field('event_image', $evenement->ID)['url']; ?>"
                        alt="<?php echo get_field('event_image', $evenement->ID)['alt']; ?>"
                    >
                </div>
            </div>
            <div class="evenements__single--bottom">
                <div>
                    <h2>
                        <?php echo $evenement->post_title; ?>
                    </h2>
                    <span>
                        <?php echo get_field('event_lieu', $evenement->ID); ?>
                    </span>
                </div>
                <div>
                    <a
                        href="<?php echo get_permalink($evenement->ID) ?>"
                        class="animate main__button"
                        title="<?php echo $evenement->post_title; ?>"
                    >
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
    <?php endforeach; ?>
    <?php wp_reset_postdata(); ?>
<?php } ?>
<?php
add_action('wp_ajax_cas_filter_function', 'cas_filter_function');
add_action('wp_ajax_nopriv_cas_filter_function', 'cas_filter_function');
function cas_filter_function() {
    if (isset($_POST['value']) && !empty($_POST['value'])) {
        $post_args = array(
            'posts_per_page' => -1,
            'post_type' => 'cas',
            'tax_query' => array(
                array(
                    'taxonomy' => 'category_cas',
                    'field' => 'slug',
                    'terms' => $_POST['value']
                ),
            ),
        );
    } else {
        $post_args = array(
            'posts_per_page' => -1,
            'post_type' => 'cas',
        );
    }
    $cas = get_posts($post_args);
    ?>
    <?php $counter = 1; foreach ( $cas as $ca ) : setup_postdata( $ca );  ?>
        <div class="cas__wrapper--single">
            <div class="cas__wrapper--left">
                <h2>
                    <?php echo $ca->post_title; ?>
                </h2>
            </div>
            <div class="cas__wrapper--center cas__wrapper--center-<?php echo $counter; ?>">
                <?php if( have_rows('cas_repeater', $ca->ID) ): while ( have_rows('cas_repeater', $ca->ID) ) : the_row();
                    $cas_repeater_image = get_sub_field('cas_repeater_image');
                    ?>
                    <img
                            src="<?php echo $cas_repeater_image['url']; ?>"
                            alt="<?php echo $cas_repeater_image['alt']; ?>"
                    >
                <?php endwhile;?>
                <?php endif; ?>
            </div>
            <div class="cas__wrapper--right">
                <?php echo get_field('cas_description', $ca->ID); ?>
                <div class="cas__single--nav">
                    <div class="cas__single--counter cas__single--counter-<?php echo $counter; ?>"></div>
                    <div class="cas__single--arrows">
                        <div class="cas__single--arrow--prev cas__single--arrow--prev-<?php echo $counter; ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="24" viewBox="0 0 40 24" fill="none">
                                <path d="M35 12H5" stroke="#49656D" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 19L5 12L12 5" stroke="#49656D" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="cas__single--arrow--next cas__single--arrow--next-<?php echo $counter; ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="24" viewBox="0 0 40 24" fill="none">
                                <path d="M5 12H35" stroke="#49656D" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M28 19L35 12L28 5" stroke="#49656D" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                jQuery(function ($) {
                    $(".cas__wrapper--center-<?php echo $counter; ?>").on("init", function(event, slick){
                        $(".cas__single--counter-<?php echo $counter; ?>").text(parseInt(slick.currentSlide + 1) + ' / ' + slick.slideCount);
                    });
                    $(".cas__wrapper--center-<?php echo $counter; ?>").on("afterChange", function(event, slick){
                        $(".cas__single--counter-<?php echo $counter; ?>").text(parseInt(slick.currentSlide + 1) + ' / ' + slick.slideCount);
                    });
                    $('.cas__wrapper--center-<?php echo $counter; ?>').slick({
                        autoplay: true,
                        infinite: true,
                        adaptiveHeight: true,
                        autoplaySpeed: 5000,
                        speed: 1500,
                        dots: false,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false,
                    });
                    $('.cas__single--arrow--next-<?php echo $counter; ?>').on('click', function(){
                        $('.cas__wrapper--center-<?php echo $counter; ?>').slick('slickNext');
                    });
                    $('.cas__single--arrow-prev-<?php echo $counter; ?>').on('click', function(){
                        $('.cas__wrapper--center-<?php echo $counter; ?>').slick('slickPrev');
                    });
                });
            </script>
        </div>
        <?php $counter++; endforeach; ?>
    <?php wp_reset_postdata(); ?>
<?php }