<?php
add_action('wp_enqueue_scripts', 'enqueue_assets');
function enqueue_assets()
{
   //? enqueue css files
   //Google Web Fonts
   wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap', array(), '1.0.0', 'all');
   //icons fonts
   wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css', array(), '1.0.0', 'all');
   wp_enqueue_style('bootstrap-icons', '//cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css', array(), '1.0.0', 'all');
   // <!-- Libraries Stylesheet -->
   wp_enqueue_style('animate-css', get_template_directory_uri() . '/lib/animate/animate.min.css', array(), '1.0.0', 'all');
   wp_enqueue_style('owlcarosel-css', get_template_directory_uri() . '/lib/owlcarousel/assets/owl.carousel.min.css', array(), '1.0.0', 'all');
   // <!-- Customized Bootstrap Stylesheet -->
   wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0.0', 'all');
   // <!-- Template Stylesheet -->
   wp_enqueue_style('template-styles', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
   wp_enqueue_style('style', get_stylesheet_uri());


   // <!-- bootstrap -->
   wp_enqueue_script('bootstrap-js', '//cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js', array(), '1.0.0', true);
   // enqueue js files
   wp_enqueue_script('jquery');
   // <!-- JavaScript Libraries -->
   wp_enqueue_script('wow-js', get_template_directory_uri() . '/lib/wow/wow.min.js', array(), '1.0.0', true);
   wp_enqueue_script('easing-js', get_template_directory_uri() . '/lib/easing/easing.min.js', array(), '1.0.0', true);
   wp_enqueue_script('waypoints-js', get_template_directory_uri() . '/lib/waypoints/waypoints.min.js', array(), '1.0.0', true);
   wp_enqueue_script('owlcarousel-js', get_template_directory_uri() . '/lib/owlcarousel/owl.carousel.min.js', array(), '1.0.0', true);
   wp_enqueue_script('counterup-js', get_template_directory_uri() . '/lib/counterup/counterup.min.js', array(), '1.0.0', true);
   wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
}

