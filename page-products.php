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
          <h2 class="page-heading mb-30">Products</h2>
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
          <div class="col-6 col-md-4 mt-30">
            <a href="<?php echo esc_url(get_category_link(13)); ?>">
              <div class="product--card">
                <div class="product--card--image">
                  <img src="<?php echo get_theme_file_uri('/img/product-2-storage-system-v1.jpg') ?>" alt="" class="img-fluid d-block" />
                </div>
                <div class="product--card--description text-center mt-10">
                  Storage System
                </div>
              </div>
              <!-- card -->
            </a>
          </div>
          <!-- col -->
          <div class="col-6 col-md-4 mt-30">
            <a href="<?php echo esc_url(get_category_link(15)); ?>">
              <div class="product--card">
                <div class="product--card--image">
                  <img src="<?php echo get_theme_file_uri('/img/product-3-workbench-v1.jpg') ?>" alt="" class="img-fluid d-block" />
                </div>
                <div class="product--card--description text-center mt-10">
                  Workbench
                </div>
              </div>
              <!-- card -->
            </a>
          </div>
          <!-- col -->
          <div class="col-6 col-md-4 mt-30">
            <a href="<?php echo esc_url(get_category_link(11)); ?>">
              <div class="product--card">
                <div class="product--card--image">
                  <img src="<?php echo get_theme_file_uri('/img/product-4-cart-v1.jpg') ?>" alt="" class="img-fluid d-block" />
                </div>
                <div class="product--card--description text-center mt-10">
                  Cart
                </div>
              </div>
              <!-- card -->
            </a>
          </div>
          <!-- col -->
          <div class="col-6 col-md-4 mt-30">
            <a href="<?php echo esc_url(get_category_link(19)); ?>">
              <div class="product--card">
                <div class="product--card--image">
                  <img src="<?php echo get_theme_file_uri('/img/product-5-caster-v1.jpg') ?>" alt="" class="img-fluid d-block" />
                </div>
                <div class="product--card--description text-center mt-10">
                  Caster
                </div>
              </div>
              <!-- card -->
            </a>
          </div>
          <!-- col -->
          <div class="col-6 col-md-4 mt-30">
            <a href="<?php echo esc_url(get_category_link(17)); ?>">
              <div class="product--card">
                <div class="product--card--image">
                  <img src="<?php echo get_theme_file_uri('/img/product-6-dolly-v1.jpg') ?>" alt="" class="img-fluid d-block" />
                </div>
                <div class="product--card--description text-center mt-10">
                  Dolly
                </div>
              </div>
              <!-- card -->
            </a>
          </div>
          <!-- col -->
          <div class="col-6 col-md-4 mt-30">
            <a href="<?php echo esc_url(get_category_link(12)); ?>">
              <div class="product--card">
                <div class="product--card--image">
                  <img src="<?php echo get_theme_file_uri('/img/product-7-drumheater-v1.jpg') ?>" alt="" class="img-fluid d-block" />
                </div>
                <div class="product--card--description text-center mt-10">
                  Drum Heater
                </div>
              </div>
              <!-- card -->
            </a>
          </div>
          <!-- col -->
          <div class="col-6 col-md-4 mt-30">
            <a href="<?php echo esc_url(get_category_link(20)); ?>">
              <div class="product--card">
                <div class="product--card--image">
                  <img src="<?php echo get_theme_file_uri('/img/product-8-fitting-v1.jpg') ?>" alt="" class="img-fluid d-block" />
                </div>
                <div class="product--card--description text-center mt-10">
                  Fitting
                </div>
              </div>
              <!-- card -->
            </a>
          </div>
          <!-- col -->
          <div class="col-6 col-md-4 mt-30">
            <a href="<?php echo esc_url(get_category_link(18)); ?>">
              <div class="product--card">
                <div class="product--card--image">
                  <img src="<?php echo get_theme_file_uri('/img/product-9-handtruck-v1.jpg') ?>" alt="" class="img-fluid d-block" />
                </div>
                <div class="product--card--description text-center mt-10">
                  Hand Truck
                </div>
              </div>
              <!-- card -->
            </a>
          </div>
          <!-- col -->
          <div class="col-6 col-md-4 mt-30">
            <a href="<?php echo esc_url(get_category_link(32)); ?>">
              <div class="product--card">
                <div class="product--card--image">
                  <img src="<?php echo get_theme_file_uri('/img/product-10-specialtyhandtruck-v1.jpg') ?>" alt="" class="img-fluid d-block" />
                </div>
                <div class="product--card--description text-center mt-10">
                  Specialty HandTruck
                </div>
              </div>
              <!-- card -->
            </a>
          </div>
          <!-- col -->
          <div class="col-6 col-md-4 mt-30">
            <a href="<?php echo esc_url(get_category_link(16)); ?>">
              <div class="product--card">
                <div class="product--card--image">
                  <img src="<?php echo get_theme_file_uri('/img/product-11-platformtruck-v1.jpg') ?>" alt="" class="img-fluid d-block" />
                </div>
                <div class="product--card--description text-center mt-10">
                  Platform Truck
                </div>
              </div>
              <!-- card -->
            </a>
          </div>
          <!-- col -->
          <div class="col-6 col-md-4 mt-30">
            <a href="<?php echo esc_url(get_category_link(33)); ?>">
              <div class="product--card">
                <div class="product--card--image">
                  <img src="<?php echo get_theme_file_uri('/img/product-12-hydraulic-v1.jpg') ?>" alt="" class="img-fluid d-block" />
                </div>
                <div class="product--card--description text-center mt-10">
                  Hydraulic Series
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
