
    <!-- Navigation -->
     <?php get_header( ); ?>


     <?php 
    $hero_video = get_field('hero_video'); 
    $hero_image = get_field('hero_image');
    ?>

    <header id="home" class="hero">
      
      <?php if( $hero_video ): ?>
        <video class="hero-video" autoplay muted loop playsinline>
            <?php echo '<source src="' . $hero_video . '" type="video/mp4">'; ?>
        </video>
        <div class="video-overlay"></div>
      <?php endif; ?>

      <div class="hero-content">
        <h4 class="fade-in">The Ultimate Escape</h4>
        <h1 class="fade-in"><?php the_field('hero_headline');?></h1>
        <p class="fade-in">
          <?php the_field('hero_sub_text');?>
        </p>
        <a href="#rooms" class="btn btn-primary fade-in">Explore Suites</a>
      </div>
    </header>

    <!-- Booking Bar (Floating) -->
    <section class="booking-section">
      <form class="booking-form" id="bookingForm">
        <div class="input-group">
          <label>Check In</label>
          <input type="date" required />
        </div>
        <div class="input-group">
          <label>Check Out</label>
          <input type="date" required />
        </div>
        <div class="input-group">
          <label>Guests</label>
          <select>
            <option value="1">1 Adult</option>
            <option value="2" selected>2 Adults</option>
            <option value="3">3 Adults</option>
            <option value="4">Family</option>
          </select>
        </div>
        <button type="submit" class="btn btn-dark">Check Availability</button>
      </form>
    </section>

    <!-- About Section -->
    <section id="about" class="about section-padding">
      <div class="container about-grid">
        <div class="about-text scroll-reveal">
          <h4><?php the_field('about_sub_head'); ?></h4>
          <h2><?php the_field("about_title"); ?></h2>
          <p>
            <?php the_field("about_description"); ?>
          </p>
          <a href="#" class="btn-text">Read More &rarr;</a>
        </div>
        <div class="about-image scroll-reveal">
          <!-- Placeholder Image -->
          <img
            src="<?php the_field("about_image"); ?>"
            alt="Hotel Interior" />
        </div>
      </div>
    </section>


      <!-- Rooms Section -->
      <section id="rooms" class="rooms section-padding bg-light">
      <div class="container">
        <div class="section-header text-center">
          <h4>Accommodation</h4>
          <h2>Our Exquisite Suites</h2>
        </div>

        <div class="room-grid">

        <?php
        // 1. Define arguments
        $args = array(
            'post_type'      => 'suite', // FIXED: Changed 'rooms' to 'suite'
            'posts_per_page' => 3,
        );

        // 2. Fetch Data
        $rooms_query = new WP_Query( $args );

        // 3. The Loop
        if ( $rooms_query->have_posts() ) {
            while ( $rooms_query->have_posts() ) {
                $rooms_query->the_post(); 
                ?>

                <div class="room-card scroll-reveal">
                    <div class="room-img">
                         <?php if( has_post_thumbnail() ): ?>
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
                         <?php endif; ?>
                    </div>
                    
                    <div class="room-info">
                        <h3><?php the_title(); ?></h3>
                        
                        <p><?php echo wp_trim_words( get_the_content(), 15 ); ?></p>
                        
                        <div class="room-price">$<?php the_field('room_price'); ?> <span>/ Night</span></div>
                        
                        <a href="<?php the_permalink(); ?>" class="btn-link">View Details</a>
                    </div>
                </div>
                <?php
            } // End While
        } else {
            // Fallback if no suites exist yet
            echo '<p>No suites found. Please add them in the Dashboard.</p>';
        }

        // 4. Reset Data (Crucial)
        wp_reset_postdata();
        ?>
          
        </div>
      </div>
    </section>

    <!-- Amenities -->
    <section id="amenities" class="amenities section-padding">
      <div class="container">
        <div class="section-header text-center">
          <h4>Facilities</h4>
          <h2><?php the_field('facilities_title'); ?></h2>
        </div>
        <div class="amenities-grid">
          <div class="amenity-item scroll-reveal">
            <i class="fas fa-swimming-pool"></i>
            <h3>Infinity Pool</h3>
            <p>Climate controlled outdoor pool with skyline views.</p>
          </div>
          <div class="amenity-item scroll-reveal">
            <i class="fas fa-utensils"></i>
            <h3>Fine Dining</h3>
            <p>Three Michelin-star restaurants serving global cuisine.</p>
          </div>
          <div class="amenity-item scroll-reveal">
            <i class="fas fa-spa"></i>
            <h3>Wellness Spa</h3>
            <p>Rejuvenate your body and mind with organic treatments.</p>
          </div>
          <div class="amenity-item scroll-reveal">
            <i class="fas fa-glass-martini-alt"></i>
            <h3>Rooftop Bar</h3>
            <p>Signature cocktails in an exclusive evening atmosphere.</p>
          </div>
        </div>
      </div>
    </section>

    <?php get_footer(); ?>
