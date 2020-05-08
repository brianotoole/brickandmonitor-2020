
<?php /* Template Name: Home */

// Header
get_header();

// Hero
get_template_part('template-parts/hero', '');

// Intro 
?>
<section class="section intro u-bg-tertiary">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="subheading subheading--primary">Who We Are</h2>
        <p>Brick & Monitor is a full-service creative agency specializing in real estate, architecture, &amp; urban development. Through branding, content, design, &amp; technology we offer custom packages to help your project breakthrough.</p>
      </div>
    </div>
  </div>
</section>

<section class="section u-bg-primary">
  <div class="container u-pad-r-0-md">
    <div class="row">
      <div class="col-md-6">
        <h2 class="subheading subheading--white">Our Clients</h2>
        <h4>Client Name</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam libero doloribus consequuntur accusamus dolores consequatur autem saepe iure, eveniet repellendus tempore, a recusandae hic? Earum minus eos laboriosam dolorem saepe?</p>
      </div><!-- /.col -->
      <div class="col-md-6 u-pad-r-0-md">
          <div class="slideshow">
            <div class="slider">
              <div class="item">
                <img src="https://images.unsplash.com/photo-1445768593937-05a3f7832b68?dpr=1&auto=compress,format&crop=entropy&fit=crop&w=700&h=500&q=80" />
              </div>
              <div class="item">
                <img src="https://images.unsplash.com/photo-1443363742879-63e3d75de2f8?dpr=1&auto=compress,format&crop=entropy&fit=crop&w=700&h=500&q=80" />
              </div>
            </div>
          </div><!-- /.slideshow -->
      </div>
    </div>
  </div>
</section>

<section class="section intro u-bg-tertiary">
<div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2 class="subheading subheading--primary">What We Do</h2>
        <p>We help your project stand-out in real estate's modern age, by offering a creative suite of content, design and technology. We've helped many real estate firms &amp; commercial companies innovate the way they showcase their projects online and connect to the people they care about.</p>
      </div>
      <div class="col-md-6">
        <h2 class="subheading subheading--primary">We Work With</h2>
        <p>We work best with the following audiences:</p>
        <ul>
          <li>Real Estate Development</li>
          <li>Real Estate Brokers</li>
          <li>Real Estate Property Management</li>
          <li>Architects</li>
          <li>Engineering</li>
          <li>Interior Design</li>
          <li>Land & Infrastructure Re-use</li>
        </ul>
      </div>
    </div>
  </div>
</section>


<?php
// Footer
get_footer();

?>