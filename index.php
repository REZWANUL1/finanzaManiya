<?php

get_header();
?>
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
   <div class="container">
      <h1 class="display-3 mb-4 animated slideInDown">Blog</h1>
      <nav aria-label="breadcrumb animated slideInDown">
         <ol class="breadcrumb mb-0">

            <?php
            if (!is_front_page()) {
               echo '<a href="';
               echo esc_url(home_url('/'));
               echo '">';
               bloginfo('name');
               echo "</a> " . '/ ';
            }

            if (is_category() || is_single()) {
               the_category(', ');
               if (is_single()) {
                  echo " / ";
                  the_title();
               }
            } elseif (is_page()) {
               echo the_title();
            } elseif (is_home()) {
               single_post_title();
            } elseif (is_404()) {
               echo 'Error 404';
            }
            ?>
         </ol>
      </nav>
   </div>
</div>
<section class="blog-area pb-100 pt-100" id="blog">
   <div class="container">
      <div class="row post_content">
         <?php
         if (have_posts()) {

            while (have_posts()) {
               the_post();
               $category = get_the_category();

         ?>
               <div class="col-md-4">
                  <div class="single-blog">
                     <div class="post-img" style="background-image: url(<?php the_post_thumbnail_url(); ?>) ;">
                     </div>
                     <div class="post-content">
                        <div class="post-title">
                           <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        </div>
                        <div class="pots-meta">
                           <ul>
                              <li><a href=""><?php the_date(); ?></a></li>
                              <?php the_category('&nbsp,'); ?>
                              <li><a href=""><?php the_author_posts_link(); ?></a></li>

                           </ul>
                        </div>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="box-btn">read more <i class="fa fa-angle-double-right"></i></a>
                     </div>
                  </div>
               </div>
         <?php  }

            wp_reset_postdata();
         }
         ?>
      </div>
      <div class="row" id="finanzamania_block_pagination">
         <?php
         the_posts_pagination(array(
            'mid_size' => 2,
            'prev_text' => __('Previous Page', 'halim'),
            'next_text' => __('Next Page', 'halim')
         ));
         ?>
      </div>

   </div>
</section>

<?php get_footer(); ?>