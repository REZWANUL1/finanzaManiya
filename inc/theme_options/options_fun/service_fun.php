<div class="container_options">
   <div class="admin_content_header">
      <h2><?php esc_html_e('Service contents', 'finanzamania'); ?> </h2>
   </div>
   <div class="about_inputs">
      <div class="form_container">
         <form action="options.php" method="post">
            <?php wp_nonce_field('update-options'); ?>
            <div class="input_field">
               <label for="service-info_options" name="service-info">Service heading</label>
               <input type="text" name="service-heading_options" value="<?php echo get_option('service-heading_options', 'Awesome Financial Services For Business'); ?>" class="regular-text">
            </div>
         
            <input type="hidden" name="action" value="update">
            <input type="hidden" name="page_options" value="service-heading_options">
            <input type="submit" value="<?php esc_html_e('Save Service Info', 'finanzamania'); ?>" name="submit" class="submit_options">
         </form>
      </div>
   </div>
</div>