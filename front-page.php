
    <!-- Navigation -->
     <?php get_header( ); ?>

    <!-- Hero Section -->
    <header id="home" class="hero" style="background-image: url('<?php the_field('hero_image');?>');">
      <div class="hero-content">
        <h4 class="fade-in">The Ultimate Escape</h4>
        <h1 class="fade-in"><?php the_field('hero_headline');?></h1>
        <p class="fade-in">
          <?php the_field('hero_sub_text');?>
        </p>
        <a href="#rooms" class="btn btn-primary fade-in">Explore Suites</a>
      </div>
    </header>

    <?php get_footer(); ?>
