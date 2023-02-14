<!-- Facts Start -->
<div class="container-fluid facts my-5 py-5">
   <div class="container py-5">
      <div class="row g-5">
         <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
            <i class="fa fa-users fa-3x text-white mb-3"></i>
            <h1 class="display-4 text-white" data-toggle="counter-up">
               <?php
               if (!empty(get_option('counter-client_number'))) {
                  esc_html_e(get_option('counter-client_number', '1234'), 'finanzamania');
               } else {
                  esc_html_e('1234', 'finanzamania');
               } ?>
            </h1>
            <span class="fs-5 text-white">
               <?php
               if (!empty(get_option('counter-client_number_sub_header'))) {
                  esc_html_e(get_option('counter-client_number_sub_header', 'Happy Clients'), 'finanzamania');
               } else {
                  esc_html_e('Happy Clients', 'finanzamania');
               } ?>
            </span>
            <hr class="bg-white w-25 mx-auto mb-0">
         </div>
         <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
            <i class="fa fa-check fa-3x text-white mb-3"></i>
            <h1 class="display-4 text-white" data-toggle="counter-up">
               <?php
               if (!empty(get_option('counter-project_number'))) {
                  esc_html_e(get_option('counter-project_number', '1234'), 'finanzamania');
               } else {
                  esc_html_e('1234', 'finanzamania');
               } ?>
            </h1>
            <span class="fs-5 text-white">
               <?php
               if (!empty(get_option('counter-project_number_sub_header'))) {
                  esc_html_e(get_option('counter-project_number_sub_header', 'Completed Projects'), 'finanzamania');
               } else {
                  esc_html_e('Project completed', 'finanzamania');
               } ?>
            </span>
            <hr class="bg-white w-25 mx-auto mb-0">
         </div>
         <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
            <i class="fa fa-users-cog fa-3x text-white mb-3"></i>
            <h1 class="display-4 text-white" data-toggle="counter-up">
               <?php
               if (!empty(get_option('counter-staff_number'))) {
                  esc_html_e(get_option('counter-staff_number', '1234'), 'finanzamania');
               } else {
                  esc_html_e('1234', 'finanzamania');
               } ?>
            </h1>
            <span class="fs-5 text-white">
               <?php
               if (!empty(get_option('counter-staff_number_sub_header'))) {
                  esc_html_e(get_option('counter-staff_number_sub_header', 'Dedicated Staff'), 'finanzamania');
               } else {
                  esc_html_e('Dedicated Staff', 'finanzamania');
               } ?>
            </span>
            <hr class="bg-white w-25 mx-auto mb-0">
         </div>
         <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
            <i class="fa fa-award fa-3x text-white mb-3"></i>
            <h1 class="display-4 text-white" data-toggle="counter-up">
               <?php
               if (!empty(get_option('counter-awards_number'))) {
                  esc_html_e(get_option('counter-awards_number', '1234'), 'finanzamania');
               } else {
                  esc_html_e('1234', 'finanzamania');
               } ?>
            </h1>
            <span class="fs-5 text-white">
               <?php
               if (!empty(get_option('counter-awards_number_sub_header'))) {
                  esc_html_e(get_option('counter-awards_number_sub_header', 'Awards Achieved'), 'finanzamania');
               } else {
                  esc_html_e('Awards Achieved', 'finanzamania');
               } ?>
            </span>
            <hr class="bg-white w-25 mx-auto mb-0">
         </div>
      </div>
   </div>
</div>
<!-- Facts End -->