<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
   <div class="container py-5">
      <div class="row g-5">
         <div class="col-lg-3 col-md-6">

            <?php
            if (!empty(get_option('heading-footer_options'))) {
            ?>
               <h4 class="text-white mb-4"> <?php esc_html_e(get_option('heading-footer_options', 'Our Office'), 'finanzamania'); ?></h4>
            <?php
            } else {
               esc_html_e('Our office', 'finanzamania');
            }
            ?>

            <?php
            if (!empty(get_option('address-footer_options'))) {
            ?>
               <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>
                  <?php esc_html_e(get_option('address-footer_options', '123 Street, New York, USA'), 'finanzamania'); ?>
               </p>
            <?php
            } else {
               esc_html_e('123 Street, New York, USA', 'finanzamania');
            }
            ?>
            <?php
            if (!empty(get_option('phone-footer_options'))) {
            ?>

               <a href="tel:<?php esc_html_e(get_option('phone-footer_options', '+012 345 678988'), 'finanzamania'); ?>">

                  <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><?php esc_html_e(get_option('phone-footer_options', '+012 345 678988'), 'finanzamania'); ?></p>
               </a>
            <?php
            } else {
               esc_html_e('+012 345 678988');
            }
            ?>

            <?php
            if (!empty(get_option('email-footer_options'))) {
            ?>

               <a href="mailto:<?php esc_html_e(get_option('email-footer_options', 'info@example.com'), 'finanzamania'); ?>">
                  <p class="mb-2"><i class="fa fa-envelope me-3"></i><?php esc_html_e(get_option('email-footer_options', 'info@example.com'), 'finanzamania'); ?></p>
               </a>


            <?php
            } else {
               esc_html_e('info@example.com');
            }
            ?>

            <div class="d-flex pt-2">
               <?php
               if (!empty(get_option('footer_twitter_url'))) {
               ?>
                  <a class="btn btn-square btn-outline-light rounded-circle me-2" href="<?php esc_html_e(get_option('footer_twitter_url', 'info@example.com')); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
               <?php
               } else {
               ?>
                  <a class="btn btn-square btn-outline-light rounded-circle me-2" href="<?php esc_html_e(get_option('footer_twitter_url', 'info@example.com')); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
               <?php
               }
               ?>
               <?php
               if (!empty(get_option('footer_facebook_url'))) {
               ?>
                  <a class="btn btn-square btn-outline-light rounded-circle me-2" href="<?php esc_html_e(get_option('footer_facebook_url', 'info@example.com')); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>

               <?php
               } else {
               ?>
                  <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
               <?php
               }
               ?>
               <?php
               if (!empty(get_option('footer_youtube_url'))) {
               ?>
                  <a class="btn btn-square btn-outline-light rounded-circle me-2" href="<?php esc_html_e(get_option('footer_youtube_url', 'info@example.com')); ?>" target="_blank"><i class="fab fa-youtube"></i></a>

               <?php
               } else {
               ?>
                  <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i class="fab fa-youtube"></i></a>
               <?php
               }
               ?>

               <?php
               if (!empty(get_option('footer_linkedin_url'))) {
               ?>
                  <a class="btn btn-square btn-outline-light rounded-circle me-2" href="<?php esc_html_e(get_option('footer_linkedin_url', 'info@example.com')); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>

               <?php
               } else {
               ?>
                  <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i class="fab fa-linkedin-in"></i></a>
               <?php
               }
               ?>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <?php
            if (!empty(get_option('service_footer_options'))) {
            ?>
               <h4 class="text-white mb-4"> <?php esc_html_e(get_option('service_footer_options', 'Services'), 'finanzamania'); ?></h4>
            <?php
            } else {
               esc_html_e('Services', 'finanzamania');
            }
            ?>
            <?php
            $args = array(
               'post_type' => 'service_posts',
               'posts_per_page' => 5,
            );

            $query = new WP_Query($args);
            if ($query->have_posts()) {
               while ($query->have_posts()) {
                  $query->the_post();
            ?>
                  <a class="btn btn-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

            <?php
               }
            }
            wp_reset_postdata();
            ?>



         </div>

         <div class="col-lg-3 col-md-6">
            <?php
            if (!empty(get_option('quick_links_footer_options'))) {
            ?>
               <h4 class="text-white mb-4"> <?php esc_html_e(get_option('quick_links_footer_options', 'Quick links'), 'finanzamania'); ?></h4>
            <?php
            } else {
               esc_html_e('Quick links', 'finanzamania');
            }
            ?>
            <?php
            wp_nav_menu(array(
               'theme_location' => 'footer-menu',
               'menu_class' => 'footer-nav',

            ));

            ?>

         </div>
         <div class="col-lg-3 col-md-6">
            <?php
            if (!empty(get_option('footer_newsletter_heading'))) {
            ?>
               <h4 class="text-white mb-4"> <?php esc_html_e(get_option('footer_newsletter_heading', 'News letter'), 'finanzamania'); ?></h4>

            <?php
            } else {
               esc_html_e('Newsletter', 'finanzamania');
            }
            ?>

            <?php
            if (!empty(get_option('footer_newsletter_text'))) {
            ?>
               <p> <?php esc_html_e(get_option('footer_newsletter_text', 'Dolor amet sit justo amet elitr clita ipsum elitr est'), 'finanzamania'); ?></p>

            <?php
            } else {
               esc_html_e('Dolor amet sit justo amet elitr clita ipsum elitr est', 'finanzamania');
            }
            ?>

            <!-- <div class="position-relative w-100">
               <input class="form-control bg-white border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
               <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
            </div> -->
            <?php
            echo   do_shortcode('[contact-form-7 id="181" title="News latter form footer"]');


            ?>
         </div>
      </div>
   </div>
</div>
<!-- Footer End -->


<!-- Copyright Start -->
<div class="container-fluid copyright py-4">
   <div class="container">
      <div class="row">
         <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.
         </div>
         <div class="col-md-6 text-center text-md-center">

            Developed By<a class="border-bottom" href="https://web.facebook.com/rezwanulhaque.mukto" target="_blank"> Rezwanul Haque</a>
            <br>
            Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
         </div>
      </div>
   </div>
</div>
<!-- Copyright End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

<?php wp_footer(); ?>
</body>

</html>