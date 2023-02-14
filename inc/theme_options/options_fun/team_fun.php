<div class="container_options">
   <div class="admin_content_header">
      <h2><?php esc_html_e('Team contents', 'finanzamania'); ?> </h2>
   </div>
   <div class="about_inputs">
      <div class="form_container">
         <form action="options.php" method="post">
            <?php wp_nonce_field('update-options'); ?>
            <div class="input_field">
               <label for="team-info_options" name="team-info">Team heading</label>
               <input type="text" name="team-heading_options" value="<?php echo get_option('team-heading_options', 'Our teams
                     We Have Completed Latest teams'); ?>" class="regular-text">
            </div>
            <input type="hidden" name="action" value="update">
            <input type="hidden" name="page_options" value="team-heading_options">
            <input type="submit" value="<?php esc_html_e('Save Team Info', 'finanzamania'); ?>" name="submit" class="submit_options">
         </form>
      </div>
   </div>
</div>