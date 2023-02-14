<div class="container_options">
   <div class="admin_content_header">
      <h2><?php esc_html_e('Top header contents', 'finanzamania'); ?> </h2>
   </div>
   <div class="top_header_inputs">
      <div class="form_container">
         <form action="options.php" method="post">
            <?php wp_nonce_field('update-options'); ?>
            <div class="input_field">
               <label for="address-info_options" name="address-info">Address Info</label>
               <input type="text" name="address-info_options" value="<?php echo get_option('address-info_options', '123 Street, New York, USA'); ?>" class="regular-text">
            </div>
            <div class="input_field">
               <label for="time-info_options" name="time-info">Time Info</label>
               <input type="text" name="time-info_options" value="<?php echo get_option('time-info_options', '9.00 am - 9.00 pm'); ?>" class="regular-text">
            </div>
            <div class="input_field">
               <label for="email-info_options" name="email-info">Time Info</label>
               <input type="text" name="email-info_options" value="<?php echo get_option('email-info_options', 'info@example.com'); ?>" class="regular-text">
            </div>
            <div class="input_field">
               <label for="phone-info_options" name="phone-info">Phone Info</label>
               <input type="text" name="phone-info_options" value="<?php echo get_option('phone-info_options', '+012 345 6789'); ?>" class="regular-text">
            </div>
            <input type="hidden" name="action" value="update">
            <input type="hidden" name="page_options" value="address-info_options,time-info_options,email-info_options,phone-info_options">
            <input type="submit" value="<?php esc_html_e('Save header info', 'finanzamania'); ?>" name="submit" class="submit_options">
         </form>
      </div>
   </div>
</div>