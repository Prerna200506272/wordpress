<?php
/**
 * Template Name: Single Post Template
 * Template Post Type: post
 */
get_header();
?>
<section class="mypost-masthead" style="background: url('<?php echo esc_url(get_the_post_thumbnail_url($post->ID, 'full')); ?>');">
  <div>
    <h1><?php the_title(); ?></h1>
  </div>
</section>
<section class="row">
  <div class="col-sm-12 col-md-6 col-lg-8">
    <?php echo get_the_content(); ?>
    <p>Date: <?php echo get_the_date(); ?></p>
    <p><?php the_tags(); ?></p>
    <p><?php echo get_the_category_list(', '); ?></p>
  </div>
  <div class="mypost-list col-sm-12 col-md-6 col-lg-4">
    <?php
    // Defining our WP Query Parameters
    $the_query = new WP_Query('posts_per_page=3');
    // Starting  WP Query
    while ($the_query->have_posts()) : $the_query->the_post();
    ?>
      <div>
        <section class="card">
          <a href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail()) : ?>
              <img class="card-img-top "src="<?php echo esc_url(get_the_post_thumbnail_url($post->ID, 'thumbnail')); ?>" alt="post image">
            <?php endif; ?>
          </a>
          <div class="card-body ">
            <a href="<?php the_permalink(); ?>" class="card-title"><?php the_title(); ?></a>
            <p class="card-text"><?php the_excerpt(__('(more…)')); ?></p>
          </div>
            </section>
      </div>
    <?php
    endwhile;
    wp_reset_postdata();
    ?>
  </div>
</section>
<?php get_footer(); ?>
