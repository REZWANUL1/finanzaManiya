<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">

<head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">

   <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
   <!-- Spinner Start -->
   <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
   </div> -->
   <!-- Spinner End -->


   <!-- Navbar Start -->
   <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
      <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
         <div class="col-lg-6 px-5 text-start">
            <small><i class="fa fa-map-marker-alt text-primary me-2">
               </i><?php
                     if (!empty(get_option('address-info_options'))) {
                     ?>
                  <?php

                        esc_html_e(get_option('address-info_options', '123 Street, New York, USA'), 'finanzamania'); ?></small>

         <?php
                     } else {
                        esc_html_e('123 Street, New York, USA', 'finanzamania');
                     }
         ?>
         <small class="ms-4"><i class="fa fa-clock text-primary me-2"></i>
            <?php
            if (!empty(get_option('time-info_options'))) {
            ?>
               <?php esc_html_e(get_option('time-info_options', '8 am - 4 pm'), 'finanzamania'); ?></small>
      <?php
            } else {
               esc_html_e('8 am - 4 pm', 'finanzamania');
            } ?>
         </div>
         <div class="col-lg-6 px-5 text-end">
            <?php
            if (!empty(get_option('time-info_options'))) {
            ?>
               <small> <a href="mailto:<?php esc_html_e(get_option('email-info_options', 'info@example.com '), 'finanzamania'); ?>"><i class="fa fa-envelope text-primary me-2"></i><?php

                                                                                                                                                                                    esc_html_e(get_option('email-info_options', 'info@example.com'), 'finanzamania'); ?></a></small>
            <?php
            } else {
               esc_html_e('info@example.com', 'finanzamania');
            }
            ?>
            <?php
            if (!empty(get_option('phone-info_options'))) {
            ?>
               <small class="ms-4"><a href="tel:<?php esc_html_e(get_option('phone-info_options', '+012 345 6789'), 'finanzamania'); ?>"><i class="fa fa-phone-alt text-primary me-2"></i><?php esc_html_e(get_option('phone-info_options', '+012 345 6789'), 'finanzamania'); ?></a></small>
            <?php
            } else {
               esc_html_e('+012 345 6789', 'finanzamania');
            }
            ?>
         </div>
      </div>

      <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">

         <a href="<?php echo  get_site_url(); ?>" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="display-5 text-primary m-0">Finanza</h1>
         </a>
         <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
         </button>
         <nav class="collapse navbar-collapse" id="navbarCollapse">
          
            <?php
            wp_nav_menu(array(
               'theme_location' => 'header-menu',
               'menu_class' => 'navbar-nav',
               'container_class' => 'ms-auto p-4 p-lg-0',

            ));
            ?>
      
            <div class="d-none d-lg-flex ms-2">
               <a  class="btn btn-light btn-sm-square rounded-circle ms-3" target="_blank" href="<?php
                                                                                 if (!empty(get_option('top_nav_facebook_url'))) {
                                                                                    esc_html_e(get_option('top_nav_facebook_url'), 'finanzamania');
                                                                                 } else {
                                                                                    _e('https://www.facebook.com/');
                                                                                 } ?>">
                  <small class="fab fa-facebook-f text-primary"></small>
               </a>
               <a class="btn btn-light btn-sm-square rounded-circle ms-3" target="_blank" href="<?php
                                                                                 if (!empty(get_option('top_nav_twitter_url'))) {
                                                                                    esc_html_e(get_option('top_nav_twitter_url'), 'finanzamania');
                                                                                 } else {
                                                                                    _e('https://www.twitter.com/');
                                                                                 } ?>">
                  <small class="fab fa-twitter text-primary"></small>
               </a>
               <a class="btn btn-light btn-sm-square rounded-circle ms-3" target="_blank" href="<?php
                                                                                 if (!empty(get_option('top_nav_linkedin_url'))) {
                                                                                    esc_html_e(get_option('top_nav_linkedin_url'), 'finanzamania');
                                                                                 } else {
                                                                                    _e('https://www.linkedin.com/');
                                                                                 } ?>">
                  <small class="fab fa-linkedin-in text-primary"></small>
               </a>
            </div>
         </nav>
      </nav>
   </div>
   <!-- Navbar End -->