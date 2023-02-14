<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
   <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
         <?php
         $args = array(
            'post_type' => 'sliders',
            'posts_per_page' => -1,
         );
         $i = 0;
         $query = new WP_Query($args);
         if ($query->have_posts()) {
            while ($query->have_posts()) {
               $query->the_post();
               $i++;

         ?>
               <?php $image_id = get_post_thumbnail_id(get_the_ID());
               $alt_text = get_post_meta($image_id, '_wp_attachment_image_alt', true); ?>
               <div class="carousel-item <?php
                                          if ($i == 1) {
                                             echo 'active';
                                          }; ?> ">
                  <img class="w-100" src="<?php the_post_thumbnail_url();  ?>" alt="<?php echo $alt_text ?>">
                  <div class="carousel-caption">
                     <div class="container">
                        <div class="row justify-content-start">
                           <div class="col-lg-8">

                              <p class="d-inline-block border border-white rounded text-primary fw-semi-bold py-1 px-3 animated slideInDown">
                                 <?php
                                 the_field('slider_sub_header'); ?></p>
                              <h1 class="display-1 mb-4 animated slideInDown">
                                 <?php
                                 the_title(); ?>
                              </h1>

                              <a href="
                            <?php the_permalink(); ?>
                           " class="btn btn-primary py-3 px-5 animated slideInDown"><?php
                                                                                    the_field('slider_button');  ?></a>
                           </div>
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
      <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Next</span>
      </button>
   </div>
</div>
<!-- Carousel End -->