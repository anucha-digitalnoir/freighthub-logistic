<?php


if ( ! function_exists( 'bespoke_setup' ) ) :
    function bespoke_setup() {

    }
endif; // bespoke_setup
add_action( 'after_setup_theme', 'bespoke_setup' );
// nqueue script
function bespoke_scripts() {
    // Load our main stylesheet.
    wp_enqueue_style( 'bespoke', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css');//, get_template_directory_uri() . '/genericons/genericons.css', array(), '3.0.3' );
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/css/owl.carousel.css');
    wp_enqueue_style( 'owl-carousel-transitions', get_template_directory_uri() . '/css/owl.transitions.css');
    wp_enqueue_script('jquery-2.1','//code.jquery.com/jquery-2.1.3.min.js');
    wp_enqueue_script('owl-carousel-script', get_template_directory_uri() . '/js/owl.carousel.min.js');
    wp_enqueue_script('parallax', get_template_directory_uri() . '/js/parallax.min.js');
    wp_enqueue_script('nice-scroll', get_template_directory_uri() . '/js/jquery.nicescroll.js');
    wp_enqueue_script('retina', get_template_directory_uri() . '/js/retina.min.js');
    wp_enqueue_script('nav', get_template_directory_uri() . '/js/jquery.nav.js');
    wp_enqueue_script('site-script', get_template_directory_uri() . '/js/script.js');
}
add_action( 'wp_enqueue_scripts', 'bespoke_scripts' );

add_filter("gform_submit_button_1", "form_submit_button", 10, 2);
function form_submit_button($button, $form){
    return ' <div class="row"><div class="contact-submit-button"><input type="submit" value="SEND"/></div></div>';
}

function get_home_gallery () {
    $galls = get_post_gallery(4,false);
    if(!empty($galls['ids'])) {
    $ids = explode(',',$galls['ids']);
        foreach($ids as $id) {
            //$gall[] = wp_get_attachment_url($id);
            echo '<div class="galery-item" style="background: url(\''.wp_get_attachment_url($id).'\') center center no-repeat;"></div>';
        }
    }
}