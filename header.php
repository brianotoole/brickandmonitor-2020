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
<!--
<div class="loader-wrapper" id="loader">
  <div class="team-loader">
    <div id="loader-text" class="loader-text">
      <span>&</span>
     </div>
  </div>
</div>
-->
<!--/LOADER -->


<div class="nav-open-overlay"></div>

<header class="header site-header">
  <div class="container">
    <div class="row header__row">
      <div class="header__logo" id="site-logo">
        <a href="<?php echo get_site_url(); ?>" class="header__logo-wrapper">
          <?php get_template_part( "vector/logo", "primary" ) ?>
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