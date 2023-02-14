<div class="container_options">
   <div class="admin_content_header">
      <h2><?php esc_html_e('Client contents', 'finanzamania'); ?> </h2>
   </div>
   <div class="about_inputs">
      <div class="form_container">
         <form action="options.php" method="post">
            <?php wp_nonce_field('update-options'); ?>
            <div class="input_field">
               <label for="client-info_options" name="client-info">Client heading</label>
               <input type="text" name="client-heading_options" value="<?php echo get_option('client-heading_options', 'What Our Clients Say!'); ?>" class="regular-text">
            </div>
            <input type="hidden" name="action" value="update">
            <input type="hidden" name="page_options" value="client-heading_options">
            <input type="submit" value="<?php esc_html_e('Save Client Info', 'finanzamania'); ?>" name="submit" class="submit_options">
         </form>
      </div>
   </div>
</div>