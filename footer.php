<?php

$logo = get_field( 'footer_logo', 'options' );
$copyright = get_field( 'copyright', 'options' );


$address = get_field( 'footer_address', 'options' );
$phone = get_field( 'footer_phone_number', 'options' );
$email = get_field( 'footer_email', 'options' );
$heading = get_field( 'footer_header', 'options' );
$footer_form = get_field( 'footer_form', 'options' );
?>

<footer class="footer">
  <div class="container">
    <ul class="footer__sections">
      <li>
        <ul class="footer__menu">
          <?php
            wp_nav_menu(array(
            'theme_location'  => 'footer',
              'menu_class'      => '',
              'container'       => false,
            ));
          ?>
        </ul><!-- /.footer__menu -->
      </li>
      <li>
        <h6 class="subheading">Get in Touch</h6>
        <address>112 N. 12th St. #1609 <br>Tampa, Florida 33602<br>813.816.2593</address>
      </li>
      <li>
        <h6 class="subheading">Newsletter Sign Up</h6>
        <div class="footer__form mc-field-group">
          <input type="email" value="" placeholder="Email Address" name="EMAIL" class="required email" id="mce-EMAIL">
          <button class="btn--submit">Submit</button>
        </div>
      </li>
    </ul><!-- /.footer__sections -->
    <div class="footer__disclaimer">
      <figure class="footer__mark"><?php get_template_part( "vector/logo", "primary" ) ?></figure>
      <div class="footer__copy">
        <div class="footer__copy-inner">
          <li>&copy; 2020</li>
          <li><a href="#">Privacy Policy</a></li>
        </div><!-- /.footer__copyright -->
        <div class="footer__socials">
          <ul>
            <a href="<?php the_field('facebook_link', 'options') ?> target="_blank">
              <?php get_template_part( "vector/icon", "facebook" ) ?>
            </a>
            <a href="<?php the_field('twitter_link', 'options') ?> target="_blank">
              <?php get_template_part( "vector/icon", "twitter" ) ?>
            </a>
            <a href="<?php the_field('instagram_link', 'options') ?>" target="_blank">
              <?php get_template_part( "vector/icon", "instagram" ) ?>
            </a>
          </ul><!-- /.social-links -->
        </div><!-- /.footer__socials -->
      </div><!-- /.footer__copy -->
    </div><!-- /.footer__copyright -->
  </div><!-- /.container -->
</footer><!-- /.footer -->

<?php wp_footer(); ?>
</div><!--#page-->

</body>
</html>