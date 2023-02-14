<div class="container_options">
   <div class="admin_content_header">
      <h2><?php esc_html_e('Top header contents', 'finanzamania'); ?> </h2>
   </div>
   <div class="top_header_inputs">
      <div class="form_container">
         <form action="options.php" method="post">
            <?php wp_nonce_field('update-options'); ?>
            <div class="input_field">
               <label for="heading-footer_options" name="time-footer">Heading</label>
               <input type="text" name="heading-footer_options" value="<?php echo get_option('heading-footer_options', 'Our office'); ?>" class="regular-text">
            </div>
            <div class="input_field">
               <label for="address-footer_options" name="address-footer">Address </label>
               <input type="text" name="address-footer_options" value="<?php echo get_option('address-footer_options', '123 Street, New York, USA'); ?>" class="regular-text">
            </div>
            <div class="input_field">
               <label for="phone-footer_options" name="phone-footer">Phone</label>
               <input type="text" name="phone-footer_options" value="<?php echo get_option('phone-footer_options', '+012 345 6789'); ?>" class="regular-text">
            </div>
            <div class="input_field">
               <label for="email-footer_options" name="email-footer">Email</label>
               <input type="text" name="email-footer_options" value="<?php echo get_option('email-footer_options', 'footer@example.com'); ?>" class="regular-text">
            </div>
            <div class="admin_bottom_header">
               <h2><?php esc_html_e('Footer bottom social', 'finanzamania'); ?> </h2>
            </div>
            <div class="about_bottom_content">
               <div class="input_field">
                  <label for="footer_twitter_url">Twitter url</label>
                  <input type="text" name="footer_twitter_url" value="<?php echo get_option('footer_twitter_url', 'https://www.twitter.com/'); ?>" class="regular-text">
               </div>
               <div class="input_field">
                  <label for="footer_facebook_url">Facebook url</label>
                  <input type="text" name="footer_facebook_url" value="<?php echo get_option('footer_facebook_url', 'https://www.facebook.com/'); ?>" class="regular-text">
               </div>
               <div class="input_field">
                  <label for="footer_youtube_url">Youtube url</label>
                  <input type="text" name="footer_youtube_url" value="<?php echo get_option('footer_youtube_url', 'https://www.youtube.com/'); ?>" class="regular-text">
               </div>
               <div class="input_field">
                  <label for="footer_linkedin_url">Linkedin url</label>
                  <input type="text" name="footer_linkedin_url" value="<?php echo get_option('footer_linkedin_url', 'https://www.linkedin.com/'); ?>" class="regular-text">
               </div>
               <div class="admin_bottom_header">
                  <h2><?php esc_html_e('Service', 'finanzamania'); ?> </h2>
               </div>
               <div class="about_bottom_content">
                  <div class="input_field">
                     <label for="service_footer_options">Service heading</label>
                     <input type="text" name="service_footer_options" value="<?php echo get_option('service_footer_options', 'Services'); ?>" class="regular-text">
                  </div>

                  <div class="admin_bottom_header">
                     <h2><?php esc_html_e('Quick Links', 'finanzamania'); ?> </h2>
                  </div>
                  <div class="about_bottom_content">
                     <div class="input_field">
                        <label for="quick_links_footer_options">Quick link heading</label>
                        <input type="text" name="quick_links_footer_options" value="<?php echo get_option('quick_links_footer_options', 'Quick Links'); ?>" class="regular-text">
                     </div>

                     <div class="admin_bottom_header">
                        <h2><?php esc_html_e('News letter', 'finanzamania'); ?> </h2>
                     </div>
                     <div class="about_bottom_content">
                        <div class="input_field">
                           <label for="footer_newsletter_heading">News letter form heading</label>
                           <input type="text" name="footer_newsletter_heading" value="<?php echo get_option('footer_newsletter_heading', 'Newsletter'); ?>" class="regular-text">
                        </div>
                        <div class="input_field content">
                           <label for="footer_newsletter_text" name="about-text">Newsletter form text</label>
                           <textarea id="footer_newsletter_text" name="footer_newsletter_text" rows="4" cols="50"><?php echo get_option('footer_newsletter_text', 'Clita erat ipsum lorem sit sed stet duo justo'); ?></textarea>
                        </div>
                        <input type="hidden" name="action" value="update">
                        <input type="hidden" name="page_options" value="heading-footer_options,address-footer_options,email-footer_options,phone-footer_options,footer_twitter_url,footer_youtube_url,footer_facebook_url,footer_linkedin_url,footer_newsletter_text">
                        <input type="hidden" name="page_options" value="service_footer_options,quick_links_footer_options,footer_newsletter_heading">
                        <input type="submit" value="<?php esc_html_e('Save header footer', 'finanzamania'); ?>" name="submit" class="submit_options">
         </form>
      </div>
   </div>
</div>