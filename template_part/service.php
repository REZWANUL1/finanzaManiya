<!-- Service Start -->
<div class="container-xxl service py-5">
   <div class="container">
      <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
         <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3"><?php esc_html_e('Our Services', ' finanzamania'); ?></p>
         <h1 class="display-5 mb-5">
            <?php
            if (!empty(get_option('service-heading_options'))) {
               esc_html_e(get_option('service-heading_options', 'Awesome Financial Services For Business'), 'finanzamania');
            } else {
               esc_html_e('Awesome Financial Services For Business', 'finanzamania');
            }
            ?>
         </h1>
      </div>
      <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
         <div class="col-lg-4">
            <div class="nav nav-pills d-flex justify-content-between w-100 h-100 me-4">
               <?php
               $args = array(
                  'post_type' => 'service_posts',
                  'posts_per_page' => 5,
               );
               $i = 0;
               $query = new WP_Query($args);
               if ($query->have_posts()) {
                  while ($query->have_posts()) {
                     $query->the_post();
                     $i++;
               ?>
                     <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4   <?php if ($i == 1) {
                                                                                                               echo 'active';
                                                                                                            } ?> " data-bs-toggle="pill" data-bs-target="#tab-pane-<?php echo get_the_ID() ?>" type="button">
                        <h5 class="m-0"><i class="fa fa-bars text-primary me-3"></i><?php the_title(); ?></h5>
                     </button>

               <?php
                  }
               }
               wp_reset_postdata();
               ?>

            </div>
         </div>
         <div class="col-lg-8">
            <div class="tab-content w-100">
               <?php
               $args = array(
                  'post_type' => 'service_posts',
                  'posts_per_page' => 5,
               );
               $i = 0;
               $query = new WP_Query($args);
               if ($query->have_posts()) {
                  while ($query->have_posts()) {
                     $query->the_post();
                     $i++;

                     $service_tick = get_field('service_tick');

               ?>
                     <?php $image_id = get_post_thumbnail_id(get_the_ID());
                     $alt_text = get_post_meta($image_id, '_wp_attachment_image_alt', true); ?>

                     <div class="tab-pane fade  <?php if ($i == 1) {
                                                   echo ' ' . 'show' . ' ' . 'active';
                                                } ?>" id="tab-pane-<?php echo get_the_ID() ?>">
                        <div class="row g-4">
                           <div class="col-md-6" style="min-height: 350px;">
                              <div class="position-relative h-100">
                                 <img class="position-absolute rounded w-100 h-100" src="<?php the_post_thumbnail_url();  ?>" style="object-fit: cover;" alt="<?php echo $alt_text ?>">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <?php the_excerpt(); ?>
                              <p><i class="fa fa-check text-primary me-3"></i><?php
                                                                              if (get_field('service_tick')) {
                                                                                 echo $service_tick['first_tick'];
                                                                              } ?></p>
                              <p><i class="fa fa-check text-primary me-3"></i><?php
                                                                              if (get_field('service_tick')) {
                                                                                 echo $service_tick['second_tick_'];
                                                                              }
                                                                              ?>

                              </p>
                              <p><i class="fa fa-check text-primary me-3"></i><?php
                                                                              if (get_field('service_tick')) {

                                                                                 echo $service_tick['third_tick'];
                                                                              }
                                                                              ?></p>
                              <a href="<?php the_permalink(); ?>" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                           </div>
                        </div>
                     </div>


               <?php
                  }
               }
               wp_reset_postdata();
               ?>

            </div>
         </div>
      </div>
   </div>
</div>
<!-- Service End -->