<!-- Team Start -->
<div class="container-xxl py-5">
   <div class="container">
      <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
         <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3"><?php esc_html_e('Our Team', ' finanzamania'); ?></p>
         <h1 class="display-5 mb-5">
            <?php
            if (!empty(get_option('team-heading_options'))) {
               esc_html_e(get_option('team-heading_options', 'Exclusive Team'), 'finanzamania');
            } else {
               esc_html_e('Exclusive Team', 'finanzamania');
            } ?>

         </h1>
      </div>
      <div class="row g-4">


         <?php
         $args = array(
            'post_type' => 'team',
            'posts_per_page' => 3,
         );
         $t = 0;

         $query = new WP_Query($args);
         if ($query->have_posts()) {
            while ($query->have_posts()) {
               $query->the_post();
               $t = $t + 2;

               $team_social = get_field('team_mermber_link');
               // print_r($team_social);
               $team_facebook =  $team_social['facebook_'];
               $team_twitter = $team_social['twitter_'];
               $team_instagram = $team_social['instagram_'];


         ?>
               <?php $image_id = get_post_thumbnail_id(get_the_ID());
               $alt_text = get_post_meta($image_id, '_wp_attachment_image_alt', true); ?>
               <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.<?php echo $t; ?>s">
                  <div class=" team-item">
                     <img class="img-fluid rounded" src="<?php echo get_the_post_thumbnail_url();  ?>" alt="<?php echo $alt_text ?>">
                     <div class="team-text">
                        <h4 class="mb-0"><?php the_title(); ?></h4>
                        <div class="team-social d-flex">
                           <?php
                           if (!empty($team_facebook)) {
                           ?>

                              <a class="btn btn-square rounded-circle mx-1" href="<?php echo $team_facebook; ?>"><i class="fab fa-facebook-f"></i></a>
                           <?php
                           }
                           ?>
                           <?php
                           if (!empty($team_twitter)) {
                           ?>
                              <a class="btn btn-square rounded-circle mx-1" href="<?php echo $team_twitter; ?>"><i class="fab fa-twitter"></i></a>

                           <?php
                           }
                           ?>
                           <?php
                           if (!empty($team_instagram)) {
                           ?>

                              <a class="btn btn-square rounded-circle mx-1" href="<?php echo $team_instagram; ?>"><i class="fab fa-facebook-f"></i></a>
                           <?php
                           }
                           ?>



                        </div>
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
<!-- Team End -->