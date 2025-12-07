<?php
/**
 * Template Name: Spa Template
 *
 */

get_header( );

?>

    <section class="section-padding">
      <div class="container">
        <div class="section-header text-center">
          <h4>Treatments</h4>
          <h2>Signature Therapies</h2>
        </div>
        <div class="amenities-grid">
        
        <?php
          // 1. Define arguments
          $args = array(
              'post_type'      => 'spa_services', // FIXED: Changed 'rooms' to 'suite'
          );

          // 2. Fetch Data
          $spa_services_query = new WP_Query( $args );

          // 03 the display Loop

          if($spa_services_query->have_posts()){
            while($spa_services_query->have_posts(  )){

              // CRITICAL STEP: Move to the next post
                $spa_services_query->the_post(); 
                
              ?>
              <!-- Reusing existing grid -->
              <div class="amenity-item scroll-reveal">
                <i class="fas fa-leaf"></i>
                <img class="spa-page-card-img" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                <h3><?php the_title(); ?></h3>
                <p>10$</p>
                <p class="text-sm"><?php the_content(); ?></p>
              </div>
              <?php 
            }
          }else {
            // Fallback if no suites exist yet
            echo '<p>No services found. Please add them in the Dashboard.</p>';
        }

          // 4. Reset Data (Crucial)
          wp_reset_postdata();

          ?>
        </div>
      </div>
    </section>

<?php get_footer(); ?>