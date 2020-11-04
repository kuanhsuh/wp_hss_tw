<?php
/* Template Name: Products Page */
get_header(); ?>

<!-- Page Header-->
<header class="page-header" style="background: url('<?php echo get_theme_file_uri('/img/header-products.jpg') ?>') no-repeat center/cover;">
</header>


<section class="product">
  <div class="container">

    <div class="row justify-content-between">
      <?php get_template_part('template-parts/content', 'sidebar'); ?>

      <div class="col-md-8">
        <div class="row justify-content-center">
          <h2 class="page-heading mb-30">產品</h2>
        </div>
        <div class="row">
          <div class="col-6 col-md-4 mt-30">
            <a href="<?php echo esc_url(get_category_link(7)); ?>">
              <div class="product--card">
                <div class="product--card--image">
                  <img src="<?php echo get_theme_file_uri('/img/product-1-wireshelf-v1.jpg') ?>" alt="" class="img-fluid d-block" />
                </div>
                <div class="product--card--description text-center mt-10">
                  Wire Shelf
                </div>
              </div>
              <!-- card -->
            </a>
          </div>
          <!-- col -->
        </div>
      </div><!-- col-md-9 -->
    </div>
    <!-- row -->
  </div>
  <!-- container -->
</section>
<?php
get_footer();
