<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
  <?php the_field('google_analytics_script_header', 'options') ?>

</head>

<?php
// Custom Field Group == Site Options
// $site_logo = get_field('site_logo', 'option');
?>

<body <?php body_class(); ?>>

<!-- LOADING -->
<div class="loader-wrapper" id="loader">
  <div class="team-loader">
    <div id="loader-text" class="loader-text">
      <span>&</span>
     </div><!-- /.loader-text -->
  </div><!-- /.team-loader -->
</div><!-- /.loader-wrapper -->
<!--/LOADER -->


<div class="nav-open-overlay"></div>

<header class="header site-header">
  <div class="container">
    <div class="row header__row">
      <div class="header__logo" id="site-logo">
        <a href="<?php echo get_site_url(); ?>" class="header__logo-wrapper">
          <svg viewBox="0 0 424 224"><g fill="#003463" fill-rule="evenodd"><path d="M50.818 100.051H55c-6.369 0-12.097-1.337-17.185-4.032-5.067-2.695-9.347-6.279-12.832-10.763-3.485-4.466-6.162-9.743-8.066-15.813-1.883-6.069-2.824-12.589-2.824-19.564 0-6.972 1.186-13.493 3.58-19.562 2.393-6.069 5.973-11.347 10.74-15.834 4.786-4.484 10.798-8.008 18.07-10.591 7.275-2.6 15.68-3.881 25.233-3.881h18.221c-7.366 3.975-13.304 10.44-17.77 19.393-4.486 8.97-6.725 19.131-6.725 30.475 0 11.346 2.24 21.447 6.726 30.306 4.465 8.858 10.403 15.495 17.769 19.866-9.364 4.578-17.13 12.383-23.291 23.447-6.18 11.042-9.27 23.841-9.27 38.373 0 7.161.808 13.983 2.394 20.447 1.602 6.486 3.842 12.401 6.725 17.773 2.884 5.373 6.313 10.101 10.288 14.193 3.996 4.07 8.367 7.311 13.154 9.706h-24.8c-12.737 0-23.231-1.999-31.486-5.975-8.273-3.976-14.83-9.009-19.708-15.078-4.882-6.069-8.311-12.796-10.31-20.167-1.976-7.368-2.977-14.322-2.977-20.899 0-6.769 1.246-13.779 3.734-21.052 2.484-7.276 5.97-13.947 10.438-20.016 4.483-6.07 9.854-11.046 16.128-14.928 6.275-3.882 13.098-5.824 20.447-5.824h-.585M369.776 223.99h54.043V.01h-54.043v223.98zm-86.286 0l28.058-73.165L234.217.012h-65.388L283.49 223.989zm-90.485-40.314c3.993 6.37 9.12 13.192 15.376 20.448 6.275 7.276 13.889 13.891 22.858 19.865h-99.436c8.947-5.974 16.562-12.589 22.836-19.865 6.274-7.256 11.4-14.077 15.376-20.447 4.787-7.371 8.668-14.833 11.646-22.411 2.789 7.578 6.575 15.04 11.344 22.41z"/></g></svg>
        </a><!--/.header__logo-wrapper-->
      </div><!--/.header__logo-->

        <?php
          wp_nav_menu( array(
            'theme_location'  => 'primary',
            'menu_class'      => 'nav-desktop u-visible-desktop u-visible-desktop--flex',
            'container'       => false,
          ) );
        ?>

      <div class="nav-toggle u-hidden-desktop" id="js-nav-toggle">
        <div></div>
      </div><!--/.nav-toggle-->
    </div><!--/.header__row-->
  </div><!--/.container-->
</header>

  <!-- NAV-MOBILE -->
  <div class="nav-mobile" id="js-nav-mobile">
    <?php
      wp_nav_menu( array(
        'theme_location'  => 'mobile',
        'menu_class'      => 'nav-mobile__inner',
        'container'       => false,
      ) );
    ?>
  </div><!--/.nav-mobile-->