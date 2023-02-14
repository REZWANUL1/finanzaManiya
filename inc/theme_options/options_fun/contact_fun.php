<div class="container_options">
   <div class="admin_content_header">
      <h2><?php esc_html_e('Contact contents', 'finanzamania'); ?> </h2>
   </div>
   <div class="about_inputs">
      <div class="form_container">
         <form action="options.php" method="post">
            <?php wp_nonce_field('update-options'); ?>
            <div class="admin_bottom_header">
               <h2><?php esc_html_e('Home page form contents', 'finanzamania'); ?> </h2>
            </div>
            <div class="input_field">
               <label for="contact-info_callback_options" name="contact-info">Contact call back heading</label>
               <input type="text" name="contact-info_callback_options" value="<?php echo get_option('contact-info_callback_options', 'Request A Call-Back'); ?>" class="regular-text">
            </div>
            <div class="admin_bottom_header">
               <h2><?php esc_html_e('Contact page form contents', 'finanzamania'); ?> </h2>
            </div>
            <div class="about_bottom_content">
               <div class="input_field">
                  <label for="contact_form_heading">Contact form heading</label>
                  <input type="text" name="contact_form_heading" value="<?php echo get_option('contact_form_heading', 'If You Have Any Query, Please Contact Us'); ?>" class="regular-text">
               </div>

               <div class="input_field content">
                  <label for="contact-map_iframe_options" name="about-text">Contact map</label>
                  <textarea id="contact-map_iframe_options" placeholder="Input map iframe" name="contact-map_iframe_options" rows="4" cols="50"><?php echo get_option('contact-map_iframe_options', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830869428!2d-74.119763973046!3d40.69766374874431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1676052716568!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'); ?></textarea>
               </div>

               <input type="hidden" name="action" value="update">
               <input type="hidden" name="page_options" value="contact-info_callback_options,contact-map_iframe_options,contact_form_heading">
               <input type="submit" value="<?php esc_html_e('Save Contact Info', 'finanzamania'); ?>" name="submit" class="submit_options">
         </form>
      </div>
   </div>
</div>