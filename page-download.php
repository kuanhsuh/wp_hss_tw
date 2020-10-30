<?php
/* Template Name: Download Page */
get_header(); ?>

<!-- Page Header-->
<header class="page-header" style="background: url('<?php echo get_theme_file_uri('/img/header-downloads.jpg') ?>') no-repeat center/cover;">
</header>


<section class="pb-90 pt-90 downloads">
  <div class="container downloads--container ">
    <div class="row justify-content-center mt-60">
      <h1 class="page-heading mb-60">Product Catalog</h1>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">產品目錄</th>
              <th scope="col">連結</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">下載2</th>
              <td><a href="https://www.hss.com.tw/wp-content/uploads/2020/08/workbench.pdf" target="_blank" style="cursor: pointer; color: #213f6a;">Download PDF</a></td>
            </tr>
            <tr>
              <th scope="row">下載2</th>
              <td><a href="https://www.hss.com.tw/wp-content/uploads/2020/08/shelf.pdf" target="_blank" style="cursor: pointer; color: #213f6a;">Download PDF</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- row -->
  </div>
  <!-- container -->
</section>
<?php
get_footer();
