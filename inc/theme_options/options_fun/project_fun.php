<div class="container_options">
   <div class="admin_content_header">
      <h2><?php esc_html_e('Project contents', 'finanzamania'); ?> </h2>
   </div>
   <div class="about_inputs">
      <div class="form_container">
         <form action="options.php" method="post">
            <?php wp_nonce_field('update-options'); ?>
            <div class="input_field">
               <label for="project-info_options" name="project-info">Project heading</label>
               <input type="text" name="project-heading_options" value="<?php echo get_option('project-heading_options', 'Our Projects
We Have Completed Latest Projects'); ?>" class="regular-text">
            </div>
            <input type="hidden" name="action" value="update">
            <input type="hidden" name="page_options" value="project-heading_options">
            <input type="submit" value="<?php esc_html_e('Save project Info', 'finanzamania'); ?>" name="submit" class="submit_options">
         </form>
      </div>
   </div>
</div>