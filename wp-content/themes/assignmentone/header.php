<!doctype html>
<html lang="<?php language_attributes(); ?>">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <!-- add JS -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- add our custom CSS file -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo esc_url( home_url('wp-content/themes/assignmentone/assets/css/styles.css')); ?>">
    <!-- add our custom font -->
  </head>
  <body <?php body_class(); ?>>
    <header>
      <div>
        <a href="<?php echo esc_url( home_url() );?>">
          <img src="<?php echo esc_url( home_url( '/wp-content/uploads/2024/02/prd.jpg' ) ); ?>" alt="logo">
        </a>
      </div>
      <nav>
        <?php
          wp_nav_menu( array(
            'menu'           => 'navbar',
            'theme_location' => '',
            'depth'          => 2,
            'fallback_cb'    => false
          ));
        ?>
      </nav>
    </header>