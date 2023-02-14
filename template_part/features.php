<!-- Features Start -->
<div class="container-xxl feature py-5">
   <div class="container">
      <div class="row g-5 align-items-center">
         <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3"><?php esc_html_e('Why Choosing Us!', ' finanzamania'); ?></p>
            <h1 class="display-5 mb-4">
               <?php
               if (!empty(get_option('feature-heading_options'))) {
                  esc_html_e(get_option('feature-heading_options', 'Few Reasons Why People Choosing Us!'), 'finanzamania');
               } else {
                  esc_html_e('Few Reasons Why People Choosing Us!', 'finanzamania');
               } ?>
            </h1>
            <p class="mb-4">
               <?php
               if (!empty(get_option('feature-text_options'))) {
                  esc_html_e(get_option('feature-text_options', 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
               eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet'), 'finanzamania');
               } else {
                  esc_html_e('Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
               eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet', 'finanzamania');
               } ?>
            </p>

            <?php
            if (!empty(get_option('feature-page_link'))) {

            ?>
               <a class="btn btn-primary py-3 px-5" href="<?php esc_html_e(get_option('feature-page_link'), 'finanzamania'); ?>">Explore More</a>
            <?php
            } else {
            ?>
               <a class=" btn btn-primary py-3 px-5" href="">Explore More</a>
            <?php
            }
            ?>

         </div>
         <div class="col-lg-6">
            <div class="row g-4 align-items-center home_service_right_contents">
               <?php
               $args = array(
                  'post_type' => 'faq_posts',
                  'posts_per_page' => 3,
               );
               $i = 0;
               $query = new WP_Query($args);
               if ($query->have_posts()) {
                  while ($query->have_posts()) {
                     $query->the_post();
                     $i = $i + 2;

               ?>

                     <div class="home_service_right_item">
                        <div class="wow fadeIn" data-wow-delay="0.<?php echo $i; ?>s">
                           <div class="feature-box border rounded p-4">
                              <i class="fa fa-check fa-3x text-primary mb-3"></i>
                              <h4 class="mb-3"><?php the_title(); ?></h4>
                              <p class="mb-3"><?php the_excerpt(); ?></p>
                              <a href="<?php the_permalink(); ?>" class=" fw-semi-bold">Read More <i class="fa fa-arrow-right ms-1"></i></a>
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
<!-- Features End -->