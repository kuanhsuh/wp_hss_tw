<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package hss
 */

get_header();

$spec_image = get_field('spec_image');

?>
<?php
while (have_posts()) : the_post();

?>
  <section class="product">
    <div class="container">
      <div class="row">
        <div class="col-md-6 product--img">
          <?php
          if (has_post_thumbnail()) { // check if the post has a Post Thumbnail assigned to it.
            the_post_thumbnail('full', array('class' => 'img-fluid d-block')); // show featured image
          } else { ?>
            <img src="https://via.placeholder.com/400x500" alt="" class="img-fluid d-block" />
          <?php } ?>
        </div>
        <div class="col-md-6 product--description">
          <h1 class="text-center product--heading"><?php the_title(); ?></h1>
          <p class="product--model mb-30 text-center">(<?php echo $model_num; ?>)</p>
          <p>
            <?php the_content(); ?>
          </p>
        </div>
      </div>
    </div>
  </section>

  <?php if ($spec_image['url']) { ?>
    <section class="specification pt-60 pb-60">
      <div class="container">
        <div class="row justify-content-center">
          <h2 class="page-heading mb-30">Specification</h2>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-8">
            <img src="<?php echo $spec_image['url'] ?>" alt="<?php echo $spec_image['alt'] ?>" class="img-fluid d-block" />
          </div>
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </section>
  <?php } ?>

<?php endwhile;
wp_reset_query(); ?>

<?php
get_footer();
