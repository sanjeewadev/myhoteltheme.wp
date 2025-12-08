<?php
/**
 * Template Name: Contact Us Template
 *
 */

get_header( );

?>

    <section class="section-padding">
      <div class="container about-grid">
        <!-- Contact Info -->
        <div class="contact-info">
          <h2><?php the_field('page_main_title'); ?></h2>
          <p><?php the_field('page_main_sub_title'); ?></p>
          <br />
          <div class="contact-item">
            <i class="fas fa-map-marker-alt"></i>
            <div>
              <h4>Address</h4>
              <p>123 Luxury Ave, Beverly Hills, CA 90210</p>
            </div>
          </div>
          <div class="contact-item">
            <i class="fas fa-phone"></i>
            <div>
              <h4>Phone</h4>
              <p>+1 (800) 123-4567</p>
            </div>
          </div>
          <div class="contact-item">
            <i class="fas fa-envelope"></i>
            <div>
              <h4>Email</h4>
              <p>concierge@lumierehotel.com</p>
            </div>
          </div>
        </div>

        <!-- Contact Form -->
        <div class="booking-details-form">
          <!-- reusing form style -->
            <?php echo do_shortcode( '[contact-form-7 id="e9218eb" title="Contact Form"]' ); ?>
        </div>
      </div>
    </section>

    <!-- Map Placeholder -->
    <div class="map-container">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26456.146608937015!2d-118.40697775!3d34.0722375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bc04d6d147cf%3A0x2948c322b70f03c2!2sBeverly%20Hills%2C%20CA!5e0!3m2!1sen!2sus!4v1683900000000!5m2!1sen!2sus"
        width="100%"
        height="100%"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"></iframe>
    </div>

    <?php get_footer(); ?>