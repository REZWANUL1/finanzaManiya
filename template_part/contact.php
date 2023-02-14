<!-- Contact Start -->
<div class="container-xxl py-5">
   <div class="container">
      <div class="row g-5">
         <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
            <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">
               <?php
               _e('Contact', 'finanzamania');

               ?>
            </p>
            <?php
            if (!empty(get_option('contact_form_heading'))) {
            ?>
               <h1 class="display-5 mb-4"> <?php esc_html_e(get_option('contact_form_heading', ' If You Have Any Query, Please Contact Us'), 'finanzamania'); ?></h1>
            <?php
            } else {
            ?>

               <h1 class="display-5 mb-4"> <?php esc_html_e('If You Have Any Query, Please Contact Us', 'finanzamania');  ?></h1>
            <?php
            }
            ?>
            <!-- <form>
               <div class=" row g-3">
                  <div class="col-md-6">
                     <div class="form-floating">
                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                        <label for="name">Your Name</label>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-floating">
                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                        <label for="email">Your Email</label>
                     </div>
                  </div>
                  <div class="col-12">
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
                  <div class="col-12">
                     <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                  </div>
               </div>
            </form> -->

            <?php
            echo do_shortcode('[contact-form-7 id="179" title="contact form for contact page"]');
            // echo  do_shortcode('[contact-form-7 id="178" title="Contact form 1"]'); ?>
         </div>
         <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">
            <div class="position-relative rounded overflow-hidden w-100 h-100 contact_map">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830869428!2d-74.119763973046!3d40.69766374874431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1676052716568!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
         </div>
        
      </div>
   </div>
</div>
<!-- Contact End -->