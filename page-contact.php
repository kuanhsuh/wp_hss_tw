<?php
/* Template Name: Contact Page */
$address = get_field('address');
$phone   = get_field('phone');
$fax     = get_field('fax');
$email   = get_field('email');
get_header(); ?>


<!-- Page Header-->
<header class="page-header" style="background: url('<?php echo get_theme_file_uri('/img/header-contact.jpg') ?>') no-repeat center/cover;">
</header>

<section class="contact pb-60 pt-90">
  <div class="container">
    <div class="row">
      <div class="col-md-7 googlemap">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3682.8379231620465!2d120.26709111513188!3d22.62252678515713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e03f5fb18ab2f%3A0xb42f99bf0bc9210a!2z6auY5a-G6ZuG5a-m5qWt6IKh5Lu95pyJ6ZmQ5YWs5Y-4!5e0!3m2!1szh-TW!2stw!4v1601260089334!5m2!1szh-TW!2stw" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
      <div class="col-md-5">
        <div class="contact--card">
          <h2 class="page-heading mb-30">聯絡我們</h2>
          <ul class="contact--list">
            <li>高雄市鼓山區哨船街75-17號</li>
            <li>T <?php echo $phone; ?></li>
            <li>F <?php echo $fax; ?></li>
            <li>E <?php echo $email; ?></li>
          </ul>
        </div>
        <!-- card -->
      </div>
      <!-- col -->
    </div>
    <!-- row -->
  </div>
  <!-- container -->
</section>

<?php
get_footer();
