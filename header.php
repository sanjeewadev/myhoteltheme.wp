<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <?php wp_head(); ?>
  <title>Document</title>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
      <!-- Navigation -->
    <nav class="navbar" id="navbar">
      <div class="container nav-container">
        <a href="<?php echo home_url(); ?>" class="logo">LUMIÈRE</a>
        <?php wp_nav_menu( array(
            'theme_location' => 'primary_menu',
            'menu_class'     => 'nav-links',
            'container'      => false,
        ) ); ?>
        <div class="menu-toggle" id="mobile-menu">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
      </div>
    </nav>


    <?php if (! is_front_page(  )){ ?>
    <header
      class="page-header"
      style="
        background-image: linear-gradient(
            rgba(0, 0, 0, 0.3),
            rgba(0, 0, 0, 0.3)
          ),
          url('<?php the_field('hero_image') ?>');
      ">
      <div class="header-content fade-in">
        <h1><?php the_field('hero_title') ?></h1>
        <p><?php the_field('hero_sub_title') ?></p>
      </div>
    </header>
    <?php } ?>
