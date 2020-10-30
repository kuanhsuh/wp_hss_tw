<?php
/* Template Name: Home Page */
get_header(); ?>
<header>
  <?php
  echo do_shortcode('[smartslider3 slider="2"]');
  ?>
</header>
<!-- SECTION Qualities-->
<section class="qualities pt-90 pb-90">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-md-5">
        <h2 class="mb-30 qualities--heading"><?php echo $quality_intro_heading; ?></h2>
        <div class="qualities--about-txt">
          <?php echo $quality_intro_text; ?>
        </div>
      </div>
      <div class="col-md-7 d-flex qualities--container">
        <div class="col-md-6">
          <div class="qualities--card">
            <svg class="icon mb-10">
              <use xlink:href="#adjust" />
            </svg>
            <h3 class="qualities--card-heading mb-10"><?php echo $quality_one_heading; ?></h3>
            <div class="qualities--card-txt">
              <?php echo $quality_one_text; ?>
            </div>
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="qualities--card">
            <svg class="icon mb-10">
              <use xlink:href="#storage" />
            </svg>
            <h3 class="qualities--card-heading mb-10"><?php echo $quality_two_heading; ?></h3>
            <div class="qualities--card-txt">
              <?php echo $quality_two_text; ?>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="qualities--card">
            <svg class="icon mb-10">
              <use xlink:href="#warehouse" />
            </svg>
            <h3 class="qualities--card-heading mb-10"><?php echo $quality_three_heading; ?></h3>
            <div class="qualities--card-txt">
              <?php echo $quality_three_text; ?>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="qualities--card">
            <svg class="icon mb-10">
              <use xlink:href="#engineering" />
            </svg>
            <h3 class="qualities--card-heading mb-10"><?php echo $quality_four_heading; ?></h3>
            <div class="qualities--card-txt">
              <?php echo $quality_four_text; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="pt-90 pb-90 video-section">
  <div class="container">
    <h3 class="qualities--heading mb-30 text-center">Video Product Display</h3>
    <div class="row">
      <div class="col-md-6">
        <div class="video-container">
          <iframe src="https://www.youtube.com/embed/LZkYZQFL948" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="video"></iframe>
        </div>
      </div>
      <div class="col-md-6">
        <div class="video-container">
          <iframe src="https://www.youtube.com/embed/DlvMBFKPj-U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="video"></iframe>
        </div>
      </div>
    </div>

  </div>
</section>
<?php
get_footer();
