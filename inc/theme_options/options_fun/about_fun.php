<div class="container_options">
   <div class="admin_content_header">
      <h2><?php esc_html_e('About contents', 'finanzamania'); ?> </h2>
   </div>
   <div class="about_inputs">
      <div class="form_container">
         <form action="options.php" method="post">
            <?php wp_nonce_field('update-options'); ?>
            <div class="input_field">
               <label for="about-info_options" name="about-info">About heading</label>
               <input type="text" name="about-heading_options" value="<?php echo get_option('about-heading_options', 'We Help Our Clients To Grow Their Business'); ?>" class="regular-text">
            </div>
            <div class="input_field content">
               <label for="about-text_options" name="about-text">About text</label>
               <textarea id="about-text_options" name="about-text_options" rows="4" cols="50"><?php echo get_option('about-text_options', 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet'); ?></textarea>
            </div>
            <div class="admin_bottom_header">
               <h2><?php esc_html_e('About bottom content', 'finanzamania'); ?> </h2>
            </div>
            <div class="about_bottom_content">
               <div class="input_field">
                  <label for="about-cost_heading_options" name="about-cost">Cost heading</label>
                  <input type="text" name="about-cost_heading_options" value="<?php echo get_option('about-cost_heading_options', 'No Hidden Cost'); ?>" class="regular-text">
               </div>
               <div class="input_field content">
                  <label for="about-cost_text_options" name="about-text">About cost text</label>
                  <textarea id="about-cost_text_options" name="about-cost_text_options" rows="4" cols="50"><?php echo get_option('about-cost_text_options', 'Clita erat ipsum lorem sit sed stet duo justo'); ?></textarea>
               </div>
            </div>
            <div class="about_bottom_content">
               <div class="input_field">
                  <label for="about-team_heading_options" name="about-team">Team heading</label>
                  <input type="text" name="about-team_heading_options" value="<?php echo get_option('about-team_heading_options', 'Dedicated Team'); ?>" class="regular-text">
               </div>
               <div class="input_field content">
                  <label for="about-team_text_options" name="about-text">Team text</label>
                  <textarea id="about-cost_text_options" name="about-team_text_options" rows="4" cols="50"><?php echo get_option('about-team_text_options', 'Clita erat ipsum lorem sit sed stet duo justo'); ?></textarea>
               </div>
            </div>
            <div class="about_bottom_content">
               <div class="input_field">
                  <label for="about-available_heading_options" name="available-team">
                     Available header</label>
                  <input type="text" name="about-available_heading_options" value="<?php echo get_option('about-available_heading_options', '24/7 Available'); ?>" class="regular-text">
               </div>
               <div class="input_field content">
                  <label for="about-team_text_options" name="about-text">Available text</label>
                  <textarea id="about-cost_text_options" name="about-available_text_options" rows="4" cols="50"><?php echo get_option('about-available_text_options', 'Clita erat ipsum lorem sit sed stet duo justo'); ?></textarea>
               </div>
            </div>
            <div class="admin_bottom_header">
               <h2><?php esc_html_e('About left image', 'finanzamania'); ?> </h2>
            </div>
            <div class="about_bottom_content">
               <div class="input_field">
                  <label for="about-left_image_options" name="about-image">About image</label>
                  <input type="text" placeholder="input image link" name="about-left_image_options" value="<?php echo get_option('about-left_image_options', 'put a link'); ?>" class="regular-text">
               </div>
               <input type="hidden" name="action" value="update">
               <input type="hidden" name="page_options" value="about-heading_options,about-text_options,about-cost_heading_options,about-cost_text_options,about-team_heading_options,about-team_text_options,about-available_heading_options,about-available_text_options,about-left_image_options">
               <input type="submit" value="<?php esc_html_e('Save About Info', 'finanzamania'); ?>" name="submit" class="submit_options">
         </form>
      </div>
   </div>
</div>