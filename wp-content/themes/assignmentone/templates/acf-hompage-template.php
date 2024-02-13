<?php
/**
 * Template Name: Homepage Using ACF
 * Template Post Type: page
 */
get_header();
?>
<main>
  <section class="masthead" style="background-image: url('<?php echo wp_kses_post(get_field('masthead_image')); ?>')">
    <div class="container text-center">
      <h1><?php echo wp_kses_post(get_field('masthead_title')); ?></h1>
    </div>
  </section>
  <!-- About Me Section -->
  <section class="about-me container mt-5">
    <div class="row">
      <div class="col-lg-12">
        <h2>About Me</h2>
        <p><?php echo wp_kses_post(get_field('aboutme_text')); ?></p>
      </div>
    </div>
  </section>
  <!-- Professional Skills Section -->
  <section class="professional-skills container mt-5">
    <div class="row">
      <div class="col-lg-12">
        <h2>Professional Skills</h2>
        <p><?php echo wp_kses_post(get_field('professional_intersts')); ?></p>
      </div>
    </div>
  </section>

  <!-- Career Goals Section -->
  <section class="career-goals container mt-5">
    <div class="row">
      <div class="col-lg-12">
        <h2>Career Goals</h2>
        <p><?php echo wp_kses_post(get_field('career_goals')); ?></p>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>