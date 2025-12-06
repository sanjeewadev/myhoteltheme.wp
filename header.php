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