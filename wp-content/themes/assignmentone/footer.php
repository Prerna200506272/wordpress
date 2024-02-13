<footer>
  <section>
    <div class="custom-footer-widget-area">
      <a href="<?php echo esc_url( home_url() );?>">
        <?php dynamic_sidebar( 'custom-footer-widget-one' ); ?>
      </a>
    </div>
    <div class="custom-footer-widget-area">
      <?php dynamic_sidebar( 'custom-footer-widget-two' ); ?>
    </div>
  </section>
</footer>
