<div class="container_options">
   <div class="admin_content_header">
      <h2><?php esc_html_e('Feature contents', 'finanzamania'); ?> </h2>
   </div>
   <div class="about_inputs">
      <div class="form_container">
         <form action="options.php" method="post">
            <?php wp_nonce_field('update-options'); ?>
            <div class="input_field">
               <label for="feature-info_options" name="about-info">Feature heading</label>
               <input type="text" name="feature-heading_options" value="<?php echo get_option('feature-heading_options', 'Few Reasons Why People Choosing Us!'); ?>" class="regular-text">
            </div>
            <div class="input_field content">
               <label for="feature-text_options" name="feature-text">Feature text</label>
               <textarea id="feature-text_options" name="feature-text_options" rows="4" cols="50"><?php echo get_option('feature-text_options', 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet'); ?></textarea>
            </div>
            <div class="input_field">
               <label for="feature-page_link" name="about-info">Feature page link</label>
               <input type="text" name="feature-page_link" value="<?php echo get_option('feature-page_link', 'put page link'); ?>" class="regular-text">
            </div>

            <input type="hidden" name="action" value="update">
            <input type="hidden" name="page_options" value="feature-heading_options,feature-text_options,feature-page_link">
            <input type="submit" value="<?php esc_html_e('Save Feature Info', 'finanzamania'); ?>" name="submit" class="submit_options">
         </form>
      </div>
   </div>
</div>