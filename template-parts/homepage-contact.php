<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Contact</h2>
      <p>Contact Us</p>
    </div>
  </div>

  <?php if ( get_option('rest_contact_map_checkbox') && get_option('rest_contact_map_source') != '' ) : ?>

  <div data-aos="fade-up">
    <iframe style="border:0; width: 100%; height: 350px;" src="<?php echo get_option('rest_contact_map_source', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621'); ?>" frameborder="0" allowfullscreen></iframe>
  </div>

  <?php endif; ?>

  <div class="container" data-aos="fade-up">

    <div class="row mt-5">

      <div class="col-lg-4">
        <div class="info">
          
          <?php if ( get_option('rest_restaurant_location', 'A108 Adam Street, New York, NY 535022') ) : ?>

            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p><?php echo get_option('rest_restaurant_location', __('A108 Adam Street, New York, NY 535022', 'restaurantly')); ?></p>
            </div>

          <?php endif; ?>

          <?php if ( get_option('rest_restaurant_hours', 'Mon-Sat: 11AM - 23PM') ) : ?>

            <div class="open-hours">
              <i class="bi bi-clock"></i>
              <h4>Open Hours:</h4>
              <p><?php echo get_option('rest_restaurant_hours', __('Mon-Sat: 11AM - 23PM', 'restaurantly')); ?></p>
            </div>

          <?php endif; ?>

          <?php if ( get_option('rest_restaurant_email', 'info@example.com') ) : ?>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p><?php echo get_option('rest_restaurant_email', __('info@example.com', 'restaurantly')); ?></p>
            </div>

          <?php endif; ?>

          <?php if ( get_option('rest_restaurant_phone', '+1 5589 55488 55s') ) : ?>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p><?php echo get_option('rest_restaurant_phone', __('+1 5589 55488 55s', 'restaurantly')); ?></p>
            </div>

          <?php endif; ?>

        </div>

      </div>

      <div class="col-lg-8 mt-5 mt-lg-0">

        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="8" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>

      </div>

    </div>

  </div>
</section>