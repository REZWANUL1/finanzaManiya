<!-- Callback Start -->
<div class="container-fluid callback my-5 pt-5">
   <div class="container pt-5">
      <div class="row justify-content-center">
         <div class="col-lg-7">
            <div class="bg-white border rounded px-5 pt-5  wow fadeInUp" data-wow-delay="0.5s">
               <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                  <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3"><?php esc_html_e('Get In Touch', ' finanzamania'); ?>
                  </p>
                  <h1 class="display-5 mb-5">
                     <?php
                     if (!empty(get_option('contact-info_callback_options'))) {
                        esc_html_e(get_option('contact-info_callback_options', 'Save Contact Info'), 'finanzamania');
                     } else {
                        esc_html_e('Request A Call-Back', 'finanzamania');
                     } ?>

                  </h1>
               </div>
               <!-- <div class="row g-3">
                  <div class="col-sm-6">
                     <div class="form-floating">
                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                        <label for="name">Your Name</label>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-floating">
                        <input type="email" class="form-control" id="mail" placeholder="Your Email">
                        <label for="mail">Your Email</label>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-floating">
                        <input type="text" class="form-control" id="mobile" placeholder="Your Mobile">
                        <label for="mobile">Your Mobile</label>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-floating">
                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                        <label for="subject">Subject</label>
                     </div>
                  </div>
                  <div class="col-12">
                     <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                        <label for="message">Message</label>
                     </div>
                  </div>
                  <div class="col-12 text-center">
                     <button class="btn btn-primary w-100 py-3" type="submit">Submit Now</button>
                  </div>
               </div> -->
               <?php
               echo  do_shortcode('[contact-form-7 id="180" title="Home callback form"]');


               ?>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Callback End -->