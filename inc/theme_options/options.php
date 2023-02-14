<?php
// ?Enqueue style 
function theme_options_css()
{
   wp_enqueue_style('options-css', get_template_directory_uri() . '/css/theme_options.css', array(), '1.0.0', 'all');
}
add_action('admin_enqueue_scripts', 'theme_options_css');
function custom_theme_page_finanzamania()
{


   add_menu_page(
      // page_title
      'Theme Options',
      // menu_title
      'Theme options',
      // capability
      'manage_options',
      // menu_slug
      'finanzamania_theme_options',
      // function
      'finanzamania_options_fun',
      // icon_url
      'dashicons-welcome-write-blog',
      // position
      101
   );

   //? top header options
   add_submenu_page(
      // parent_slug
      'finanzamania_theme_options',
      // page_title
      'Top header',
      // menu_title
      'Top header',
      // capability
      'manage_options',
      // menu_slug
      'finanzamania_theme_options',
      // callback
      'finanzamania_options_fun',

   );
   //?about options

   add_submenu_page(
      // parent_slug
      'finanzamania_theme_options',
      // page_title
      'About',
      // menu_title
      'About',
      // capability
      'manage_options',
      // menu_slug
      'finanzamania_theme_about',
      // callback
      'finanzamania_about_fun',

   );

   //? counter options
   add_submenu_page(
      // parent_slug
      'finanzamania_theme_options',
      // page_title
      'Counter',
      // menu_title
      'Counter',
      // capability
      'manage_options',
      // menu_slug
      'finanzamania_theme_counter',
      // callback
      'finanzamania_counter_fun',

   );


   //? faq options
   add_submenu_page(
      // parent_slug
      'finanzamania_theme_options',
      // page_title
      'Feature',
      // menu_title
      'Feature',
      // capability
      'manage_options',
      // menu_slug
      'finanzamania_theme_faq',
      // callback
      'finanzamania_faq_fun',

   );


   //? service options
   add_submenu_page(
      // parent_slug
      'finanzamania_theme_options',
      // page_title
      'Service',
      // menu_title
      'Service',
      // capability
      'manage_options',
      // menu_slug
      'finanzamania_theme_service',
      // callback
      'finanzamania_service_fun',

   );

   //?contact options
   add_submenu_page(
      // parent_slug
      'finanzamania_theme_options',
      // page_title
      'Contact',
      // menu_title
      'Contact',
      // capability
      'manage_options',
      // menu_slug
      'finanzamania_theme_contact',
      // callback
      'finanzamania_contact_fun',

   );

   //? project options
   add_submenu_page(
      // parent_slug
      'finanzamania_theme_options',
      // page_title
      'Project',
      // menu_title
      'Projects',
      // capability
      'manage_options',
      // menu_slug
      'finanzamania_theme_project',
      // callback
      'finanzamania_project_fun',

   );

   //? team options
   add_submenu_page(
      // parent_slug
      'finanzamania_theme_options',
      // page_title
      'Team',
      // menu_title
      'Team',
      // capability
      'manage_options',
      // menu_slug
      'finanzamania_team_project',
      // callback
      'finanzamania_team_fun',

   );

   //? client options
   add_submenu_page(
      // parent_slug
      'finanzamania_theme_options',
      // page_title
      'Client testimonials',
      // menu_title
      'Client testimonials',
      // capability
      'manage_options',
      // menu_slug
      'finanzamania_client_project',
      // callback
      'finanzamania_client_fun',

   );

   //?header nav url options
   add_submenu_page(
      // parent_slug
      'finanzamania_theme_options',
      // page_title
      'Header nav social',
      // menu_title
      'Header nav social',
      // capability
      'manage_options',
      // menu_slug
      'finanzamania_header_social_project',
      // callback
      'finanzamania_header_social_fun',

   );

   //? footer options
   add_submenu_page(
      // parent_slug
      'finanzamania_theme_options',
      // page_title
      'Footer',
      // menu_title
      'Footer',
      // capability
      'manage_options',
      // menu_slug
      'finanzamania_footer_social_project',
      // callback
      'finanzamania_footer_social_fun',

   );
}

add_action('admin_menu', 'custom_theme_page_finanzamania');

//? top header function

function finanzamania_options_fun()
{
   include_once(get_template_directory() . '/inc/theme_options/options_fun/top_header_fun.php');
}

//? about function

function finanzamania_about_fun()
{
   include_once(get_template_directory() . '/inc/theme_options/options_fun/about_fun.php');
}

//?counter function
function  finanzamania_counter_fun()
{
   include_once(get_template_directory() . '/inc/theme_options/options_fun/counter_fun.php');
}


//?feature function
function finanzamania_faq_fun()
{
   include_once(get_template_directory() . '/inc/theme_options/options_fun/feature_fun.php');
}

//?service function
function finanzamania_service_fun()
{
   include_once(get_template_directory() . '/inc/theme_options/options_fun/service_fun.php');
}

//?contact function
function finanzamania_contact_fun()
{

   include_once(get_template_directory() . '/inc/theme_options/options_fun/contact_fun.php');
}


//?project function
function finanzamania_project_fun()
{
   include_once(get_template_directory() . '/inc/theme_options/options_fun/project_fun.php');
}

//?team function
function finanzamania_team_fun()
{
   include_once(get_template_directory() . '/inc/theme_options/options_fun/team_fun.php');
}

//?clint function
function finanzamania_client_fun()
{
   include_once(get_template_directory() . '/inc/theme_options/options_fun/client_fun.php');
}

//?header nav social function
function finanzamania_header_social_fun()
{
   include_once(get_template_directory() . '/inc/theme_options/options_fun/header_social_nav_fun.php');
}

//?footer function
function finanzamania_footer_social_fun()
{
   include_once(get_template_directory() . '/inc/theme_options/options_fun/footer_social_fun.php');
}
