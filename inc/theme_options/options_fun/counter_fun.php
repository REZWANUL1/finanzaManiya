<div class="container_options">
   <div class="admin_content_header">
      <h2><?php esc_html_e('Counter contents', 'finanzamania'); ?> </h2>
   </div>
   <div class="counter_inputs">
      <div class="form_container">
         <form action="options.php" method="post">
            <?php wp_nonce_field('update-options'); ?>
            <div class="counter-1">
               <div class="input_field">
                  <label for="counter-client_number" name="counter-client">Counter client</label>
                  <input type="text" name="counter-client_number" value="<?php echo get_option('counter-client_number', '1250'); ?>" class="regular-text">
               </div>
               <div class="input_field content">
                  <label for="counter-client_number_sub_header" name="counter-client-sub-header">Counter client text</label>
                  <textarea id="counter-client_number_sub_header" name="counter-client_number_sub_header" rows="4" cols="50"><?php echo get_option('counter-client_number_sub_header', 'Happy Clients'); ?></textarea>
               </div>
            </div>
            <div class="counter-1">
               <div class="input_field">
                  <label for="counter-project_number" name="counter-project">Counter project</label>
                  <input type="text" name="counter-project_number" value="<?php echo get_option('counter-project_number', '1250'); ?>" class="regular-text">
               </div>
               <div class="input_field content">
                  <label for="counter-project_number_sub_header" name="counter-project-sub-header">Counter project text</label>
                  <textarea id="counter-project_number_sub_header" name="counter-project_number_sub_header" rows="4" cols="50"><?php echo get_option('counter-project_number_sub_header', 'Projects Completed'); ?></textarea>
               </div>
            </div>
            <div class="counter-1">
               <div class="input_field">
                  <label for="counter-staff_number" name="counter-staff">Counter staff</label>
                  <input type="text" name="counter-staff_number" value="<?php echo get_option('counter-staff_number', '1250'); ?>" class="regular-text">
               </div>
               <div class="input_field content">
                  <label for="counter-staff_number_sub_header" name="counter-staff-sub-header">Counter staff text</label>
                  <textarea id="counter-staff_number_sub_header" name="counter-staff_number_sub_header" rows="4" cols="50"><?php echo get_option('counter-staff_number_sub_header', 'Dedicated Staff'); ?></textarea>
               </div>
            </div>
            <div class="counter-1">
               <div class="input_field">
                  <label for="counter-staff_number" name="counter-staff">Counter awards</label>
                  <input type="text" name="counter-awards_number" value="<?php echo get_option('counter-awards_number', '125'); ?>" class="regular-text">
               </div>
               <div class="input_field content">
                  <label for="counter-awards_number_sub_header" name="counter-awards-sub-header">Counter awards text</label>
                  <textarea id="counter-awards_number_sub_header" name="counter-awards_number_sub_header" rows="4" cols="50"><?php echo get_option('counter-awards_number_sub_header', 'Awards Achieved'); ?></textarea>
               </div>
            </div>

            <input type="hidden" name="action" value="update">
            <input type="hidden" name="page_options" value="counter-client_number,counter-client_number_sub_header,counter-project_number,counter-project_number_sub_header,counter-staff_number,counter-staff_number_sub_header,counter-awards_number,counter-awards_number_sub_header">
            <input type="submit" value="<?php esc_html_e('Save Counter Info', 'finanzamania'); ?>" name="submit" class="submit_options">
         </form>
      </div>
   </div>
</div>