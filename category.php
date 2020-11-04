<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hss
 */
$category = get_queried_object();
$cat_id = $category->cat_ID;
get_header();
?>
<header class="page-header" style="background: url('<?php echo get_theme_file_uri('/img/header-products.jpg') ?>') no-repeat center/cover;">
</header>

<section class="product">
  <div class="container">

    <div class="row justify-content-between">
      <?php get_template_part('template-parts/content', 'sidebar'); ?>

      <div class="col-md-8">
        <div class="row justify-content-center">
          <h2 class="page-heading mb-30"><?php single_cat_title(); ?></h2>
        </div>
        <div class="row">
          <?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $args = array(
            'cat' => $cat_id,
            'posts_per_page' => 9,
            'paged'         => $paged
          );
          $my_query = new WP_Query($args);
          if ($my_query->have_posts()) {
            while ($my_query->have_posts()) : $my_query->the_post(); ?>
              <div class="col-6 col-md-4  mt-30">
                <a href="<?php the_permalink(); ?>">
                  <div class="product--card">
                    <div class="product--card--image">
                      <?php
                      if (has_post_thumbnail()) { // check if the post has a Post Thumbnail assigned to it.
                        the_post_thumbnail('full', array('class' => 'img-fluid d-block product--img')); // show featured image
                      } else { ?>
                        <img src="https://via.placeholder.com/500x500" alt="" class="img-fluid d-block" />
                      <?php } ?>
                    </div>
                    <div class="product--card--description text-center mt-10">
                      <?php the_title(); ?>
                    </div>
                  </div>
                  <!-- card -->
                </a>
              </div>
              <!-- col -->
          <?php endwhile;
          }
          wp_reset_query(); ?>
        </div>

      </div><!-- col-md-9 -->
    </div>
    <!-- row -->
  </div>
  <!-- container -->
</section>

<?php
get_footer();
