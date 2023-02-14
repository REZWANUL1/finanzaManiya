<!-- About Start -->
<div class="container-xxl py-5">
   <div class="container">
      <div class="row g-4 align-items-end mb-4">
         <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <?php
            if (!empty(get_option('about-left_image_options'))) {
            ?>
               <img class="img-fluid rounded" src="<?php esc_html_e(get_option('about-left_image_options',  "echo get_template_directory_uri(); /img/about.jpg"), 'finanzamania'); ?>">
            <?php

            } else {

            ?>

               <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/img/about.jpg">

            <?php
            }

            ?>

            <!-- <img class="img-fluid rounded" src="<?php // echo get_template_directory_uri();  
                                                      ?>/img/about.jpg"> -->
         </div>
         <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
            <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3"><?php esc_html_e('About Us', ' finanzamania'); ?></p>
            <h1 class="display-5 mb-4"><?php
                                       if (!empty(get_option('about-heading_options'))) {
                                          esc_html_e(get_option('about-heading_options', 'We Help Our Clients To Grow Their Business'), 'finanzamania');
                                       } else {
                                          esc_html_e('We Help Our Clients To Grow Their Business', 'finanzamania');
                                       } ?></h1>


            <p class="mb-4">

               <?php
               if (!empty(get_option('about-text_options'))) {
                  esc_html_e(get_option('about-text_options', 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet'), 'finanzamania');
               } else {
                  esc_html_e('Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet', 'finanzamania');
               } ?>
            </p>
            <div class="border rounded p-4">
               <nav>
                  <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                     <?php
                     $args = array(
                        'post_type' => 'about_tab',
                        'post_per_page' => 5,
                     );
                     $query = new WP_Query($args);
                     $i = 0;
                     while ($query->have_posts()) {
                        $query->the_post();
                        $i++;
                        // the_title();
                     ?>

                        <button class="nav-link fw-semi-bold      <?php if ($i == 1) {
                                                                     echo 'active';
                                                                  } ?>" id="nav-<?php the_title(); ?>-tab" data-bs-toggle="tab" data-bs-target="#nav-<?php the_title(); ?>" type="button" role="tab" aria-controls="nav-<?php the_title(); ?>" aria-selected="true"><?php the_title(); ?></button>

                     <?php


                     }
                     wp_reset_postdata();
                     ?>
                     <!-- <button class="nav-link fw-semi-bold active" id="nav-story-tab" data-bs-toggle="tab" data-bs-target="#nav-story" type="button" role="tab" aria-controls="nav-story" aria-selected="true">Story</button> -->

                  </div>
               </nav>
               <div class="tab-content" id="nav-tabContent">
                  <?php
                  $args = array(
                     'post_type' => 'about_tab',
                     'post_per_page' => 5,
                  );
                  $query = new WP_Query($args);
                  $i = 0;
                  while ($query->have_posts()) {
                     $query->the_post();
                     $i++;
                     // the_title();

                  ?>

                     <div class="tab-pane fade   <?php
                                                   if ($i == 1) {
                                                      echo ' ' . 'show' . ' ' . 'active';
                                                   } ?>" id="nav-<?php the_title(); ?>" role="tabpanel" aria-labelledby="nav-<?php the_title(); ?>-tab">
                        <?php the_excerpt(); ?>
                     </div>

                  <?php


                  }
                  wp_reset_postdata();
                  ?>



               </div>
            </div>
         </div>
      </div>
      <div class="border rounded p-4 wow fadeInUp" data-wow-delay="0.1s">
         <div class="row g-4">
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
               <div class="h-100">
                  <div class="d-flex">
                     <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                        <i class="fa fa-times text-white"></i>
                     </div>
                     <div class="ps-3">
                        <h4>
                           <?php
                           if (!empty(get_option('about-cost_heading_options'))) {
                              esc_html_e(get_option('about-cost_heading_options', 'No Hidden Cost'), 'finanzamania');
                           } else {
                              esc_html_e('No Hidden Cost', 'finanzamania');
                           } ?>
                        </h4>
                        <span>
                           <?php
                           if (!empty(get_option('about-cost_text_options'))) {
                              esc_html_e(get_option('about-cost_text_options', 'Clita erat ipsum lorem sit sed stet duo justo'), 'finanzamania');
                           } else {
                              esc_html_e('Clita erat ipsum lorem sit sed stet duo justo', 'finanzamania');
                           } ?>

                        </span>
                     </div>
                     <div class="border-end d-none d-lg-block"></div>
                  </div>
                  <div class="border-bottom mt-4 d-block d-lg-none"></div>
               </div>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
               <div class="h-100">
                  <div class="d-flex">
                     <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                        <i class="fa fa-users text-white"></i>
                     </div>
                     <div class="ps-3">
                        <h4>
                           <?php
                           if (!empty(get_option('about-team_heading_options'))) {
                              esc_html_e(get_option('about-team_heading_options', 'Dedicated Team'), 'finanzamania');
                           } else {
                              esc_html_e('Dedicated Team', 'finanzamania');
                           } ?>

                        </h4>
                        <span>
                           <?php
                           if (!empty(get_option('about-team_text_options'))) {
                              esc_html_e(get_option('about-team_text_options', 'Clita erat ipsum lorem sit sed stet duo justo'), 'finanzamania');
                           } else {
                              esc_html_e('Clita erat ipsum lorem sit sed stet duo justo', 'finanzamania');
                           } ?>
                        </span>
                     </div>
                     <div class="border-end d-none d-lg-block"></div>
                  </div>
                  <div class="border-bottom mt-4 d-block d-lg-none"></div>
               </div>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
               <div class="h-100">
                  <div class="d-flex">
                     <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                        <i class="fa fa-phone text-white"></i>
                     </div>
                     <div class="ps-3">
                        <h4>
                           <?php
                           if (!empty(get_option('about-available_heading_options'))) {
                              esc_html_e(get_option('about-available_heading_options', '24/7 Available'), 'finanzamania');
                           } else {
                              esc_html_e('24/7 Available', 'finanzamania');
                           } ?>

                        </h4>
                        <span>
                           <?php
                           if (!empty(get_option('about-available_text_options'))) {
                              esc_html_e(get_option('about-available_text_options', 'Clita erat ipsum lorem sit sed stet duo justo'), 'finanzamania');
                           } else {
                              esc_html_e('Clita erat ipsum lorem sit sed stet duo justo', 'finanzamania');
                           } ?>
                        </span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- About End -->