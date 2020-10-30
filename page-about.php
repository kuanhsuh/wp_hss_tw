<?php
/* Template Name: About Page */
get_header(); ?>

<header class="page-header" style="background: url('<?php echo get_theme_file_uri('/img/header-about.jpg') ?>') no-repeat center/cover;">
</header>

<?php while (have_posts()) :
  the_post(); ?>
  <section class="about pb-90 pt-30">
    <div class="container pb-60 pt-60 about--container">
      <div class="row justify-content-center">
        <h1 class="page-heading mb-30">
          <?php the_title(); ?>
        </h1>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <?php the_content(); ?>
        </div>
        <!-- col -->
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </section>
<?php endwhile; ?>

<?php
get_footer();
