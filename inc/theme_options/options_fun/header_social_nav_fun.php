<div class="container_options">
   <div class="admin_content_header">
      <h2><?php esc_html_e('Top header contents', 'finanzamania'); ?> </h2>
   </div>
   <div class="top_header_inputs">
      <div class="form_container">
         <form action="options.php" method="post">
            <?php wp_nonce_field('update-options'); ?>


            <div class="input_field">
               <label for="top_nav_facebook_url">Facebook url</label>
               <input type="text" name="top_nav_facebook_url" value="<?php echo get_option('top_nav_facebook_url', 'https://www.facebook.com/'); ?>" class="regular-text">
            </div>

            <div class="input_field">
               <label for="top_nav_twitter_url">Twitter url</label>
               <input type="text" name="top_nav_twitter_url" value="<?php echo get_option('top_nav_twitter_url', 'https://www.twitter.com/'); ?>" class="regular-text">
            </div>


            <div class="input_field">
               <label for="top_nav_linkedin_url">Linkedin url</label>
               <input type="text" name="top_nav_linkedin_url" value="<?php echo get_option('top_nav_linkedin_url', 'https://www.linkedin.com/'); ?>" class="regular-text">
            </div>

            <input type="hidden" name="action" value="update">
            <input type="hidden" name="page_options" value="top_nav_facebook_url,top_nav_twitter_url,top_nav_linkedin_url">
            <input type="submit" value="<?php esc_html_e('Save header footer', 'finanzamania'); ?>" name="submit" class="submit_options">
         </form>
      </div>
   </div>
</div>