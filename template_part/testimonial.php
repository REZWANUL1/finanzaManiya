<!-- Testimonial Start -->
<div class="container-xxl py-5">
   <div class="container">
      <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
         <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3"><?php esc_html_e('Testimonial', ' finanzamania'); ?></p>
         <h1 class="display-5 mb-5">
            <?php
            if (!empty(get_option('client-heading_options'))) {
               esc_html_e(get_option('client-heading_options', 'What Our Clients Say!'), 'finanzamania');
            } else {
               esc_html_e('What Our Clients Say!', 'finanzamania');
            } ?>


         </h1>
      </div>
      <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">

         <?php
         $args = array(
            'post_type' => 'testimonial',
            'posts_per_page' => 8,
         );

         $query = new WP_Query($args);
         if ($query->have_posts()) {
            while ($query->have_posts()) {
               $query->the_post();


         ?>
               <?php $image_id = get_post_thumbnail_id(get_the_ID());
               $alt_text = get_post_meta($image_id, '_wp_attachment_image_alt', true); ?>



               <div class="testimonial-item">
                  <div class="testimonial-text border rounded p-4 pt-5 mb-5">
                     <div class="btn-square bg-white border rounded-circle">
                        <i class="fa fa-quote-right fa-2x text-primary"></i>
                     </div>
                     <?php the_content(); ?>
                  </div>
                  <img class="rounded-circle mb-3" src="<?php echo get_the_post_thumbnail_url();  ?>" alt="<?php echo $alt_text; ?>">
                  <h4><?php the_title(); ?></h4>
                  <span><?php the_field('Testimonials'); ?></span>
               </div>
         <?php
            }
         }
         wp_reset_postdata();
         ?>


      </div>
   </div>
</div>


<!-- Testimonial end -->