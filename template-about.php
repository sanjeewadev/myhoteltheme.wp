<?php
/**
 * Template Name: About Template
 *
 */

get_header( );

?>

<!-- Page Header -->
    <header
      class="page-header"
      style="
        background-image: linear-gradient(
            rgba(0, 0, 0, 0.5),
            rgba(0, 0, 0, 0.5)
          ),
          url('<?php the_field('about_header_image'); ?>');
      ">
      <div class="header-content fade-in">
        <h1><?php the_field('about_header_title'); ?></h1>
        <p><?php the_field('about_header_description'); ?> </p>
      </div>
    </header>

    <!-- Vision Section -->
    <section class="section-padding">
      <div class="container about-grid">
        <div class="about-image scroll-reveal">
          <img
            src="<?php the_field('about_the_vision_image'); ?>"
            alt="Hotel Lobby" />
        </div>
        <div class="about-text scroll-reveal">
          <h4>The Vision</h4>
          <h2><?php the_field('about_the_vision_title'); ?></h2>
          <p>
            <?php the_field('about_the_vision_description_01'); ?>
          <p>
            <?php the_field('about_the_vision_description_02'); ?>
          </p>
        </div>
      </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
      <div class="container stats-grid">
        <div class="stat-item scroll-reveal">
          <h2>100+</h2>
          <p>Years of History</p>
        </div>
        <div class="stat-item scroll-reveal">
          <h2>50</h2>
          <p>Exclusive Suites</p>
        </div>
        <div class="stat-item scroll-reveal">
          <h2>3</h2>
          <p>Michelin Restaurants</p>
        </div>
        <div class="stat-item scroll-reveal">
          <h2>24/7</h2>
          <p>Concierge Service</p>
        </div>
      </div>
    </section>

    <!-- Team Section -->
    <section class="section-padding bg-light">
      <div class="container">
        <div class="section-header text-center">
          <h4>The People</h4>
          <h2><?php the_field('about_the_people_title'); ?></h2>
        </div>
        <div class="room-grid">
          <!-- Reusing grid class -->
          <div class="team-card scroll-reveal">
            <img
              src="<?php the_field('about_the_people_01_image'); ?>"
              alt="Manager" />
            <div class="team-info">
              <h3><?php the_field('about_the_people_01_name'); ?></h3>
              <p><?php the_field('about_the_people_01_status'); ?></p>
            </div>
          </div>
          <div class="team-card scroll-reveal">
            <img
              src="<?php the_field('about_the_people_02_image'); ?>"
              alt="Concierge" />
            <div class="team-info">
              <h3><?php the_field('about_the_people_02_title'); ?></h3>
              <p><?php the_field('about_the_people_02_status'); ?></p>
            </div>
          </div>
          <div class="team-card scroll-reveal">
            <img
              src="<?php the_field('about_the_people_03_image'); ?>"
              alt="Chef" />
            <div class="team-info">
              <h3><?php the_field('about_the_people_03_title'); ?></h3>
              <p><?php the_field('about_the_people_03_status'); ?></p>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>