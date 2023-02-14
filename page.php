<?php
get_header();

?>
<!-- Header Area Start -->

<?php //get_template_part('template-parts/breadcrumb') 
?>

<section class="blog-single pt-100 pb-100">
   <div class="container">
      <div class="row">
         <div class="col-xl-12">
            <h2><?php the_title(); ?></h2>

            <?php the_content(); ?>

         </div>

      </div>
</section>

<?php
get_footer();

?>