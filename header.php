<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hss-taiwan
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>


  <style>
    .googlemap {
      position: relative;
      /* 4:3 ratio*/
      overflow: hidden;
      height: 600px;
    }

    .googlemap iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100% !important;
      height: 400px;
    }

    @media screen and (max-width: 620px) {
      .googlemap {
        height: 350px;
      }

      .googlemap iframe {
        height: 350px;
      }
    }
  </style>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <nav class="navbar pb-10 pt-10">
    <div class="container">
      <div class="row navbar--container">
        <!-- Keep within 1140px width -->
        <div class="navbar--left">
          <a href="<?php echo esc_html(site_url()) ?>"><img src="<?php echo get_theme_file_uri('/img/hss-logo-light.jpg') ?>" alt="HSS Logo" class="navbar--logo" /></a>

        </div>
        <ul class="navbar--nav">
          <li>
            <a href="<?php echo esc_html(site_url("/")); ?>">首頁</a>
          </li>
          <li>
            <a href="<?php echo esc_html(site_url("/about")); ?>">關於</a>
          </li>
          <li>
            <a href="<?php echo esc_html(site_url("/products")); ?>">產品</a>
          </li>
          <li>
            <a href="<?php echo esc_html(site_url("/download")); ?>">下載</a>
          </li>
          <li>
            <a href="<?php echo esc_html(site_url("/contact")); ?>">聯絡</a>
          </li>
          <li class="search">
            <span class="search--group">
              <input type="text" class="search--input">
            </span>
            <div class="search--dropdown">
              <div>
                <h3 class="text-center">Model Number</h3>
                <ul class="search--dropdown-menu">
                  <li><img src="https://via.placeholder.com/30x30" alt="" srcset="" class="img-fluid d-block search--img">Lorem, ipsum dolor.
                  </li>
                  <li><img src="https://via.placeholder.com/30x30" alt="" srcset="" class="img-fluid d-block search--img">Lorem, ipsum dolor.
                  </li>
                  <li><img src="https://via.placeholder.com/30x30" alt="" srcset="" class="img-fluid d-block search--img">Lorem, ipsum dolor.
                  </li>
                </ul>
              </div>
              <div>
                <h3 class="text-center">Product Name</h3>
                <ul class="search--dropdown-menu">
                  <li><img src="https://via.placeholder.com/30x30" alt="" srcset="" class="img-fluid d-block search--img">Lorem, ipsum dolor.
                  </li>
                  <li><img src="https://via.placeholder.com/30x30" alt="" srcset="" class="img-fluid d-block search--img">Lorem, ipsum dolor.
                  </li>
                  <li><img src="https://via.placeholder.com/30x30" alt="" srcset="" class="img-fluid d-block search--img">Lorem, ipsum dolor.
                  </li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
        <div class="navbar--burger">
          <div class="bar top"></div>
          <div class="bar middle"></div>
          <div class="bar bottom"></div>
        </div>
        <!-- No href -->
      </div>
    </div>
  </nav>