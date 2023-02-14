<!-- Projects Start -->
<div class="container-xxl py-5">
   <div class="container">
      <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
         <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3"><?php esc_html_e('Our Projects', ' finanzamania'); ?></p>
         <h1 class="display-5 mb-5">
            <?php
            if (!empty(get_option('project-heading_options'))) {
               esc_html_e(get_option('project-heading_options', 'We Have Completed Latest Projects'), 'finanzamania');
            } else {
               esc_html_e('We Have Completed Latest Projects', 'finanzamania');
            } ?>

         </h1>
      </div>
      <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.3s">

         <?php
         $args = array(
            'post_type' => 'projects',
            'posts_per_page' => 10,
         );

         $query = new WP_Query($args);
         if ($query->have_posts()) {
            while ($query->have_posts()) {
               $query->the_post();


         ?>

               <?php $image_id = get_post_thumbnail_id(get_the_ID());
               $alt_text = get_post_meta($image_id, '_wp_attachment_image_alt', true); ?>

               <div class="project-item pe-5 pb-5">
                  <div class="project-img mb-3">
                     <img class="img-fluid rounded" src="<?php echo  get_the_post_thumbnail_url(); ?>" alt="<?php echo $alt_text ?>">
                     <a href="<?php the_permalink(); ?>"><i class="fa fa-link fa-3x text-primary"></i></a>

                  </div>
                  <div class="project-title">
                     <a href="<?php the_permalink(); ?>">
                        <h4 class="mb-0"><?php the_title(); ?></h4>
                     </a>

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
<!-- Projects End -->