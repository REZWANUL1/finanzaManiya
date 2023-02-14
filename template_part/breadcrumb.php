<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
   <div class="container">
      <h1 class="display-3 mb-4 animated slideInDown"><?php the_title(); ?></h1>
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