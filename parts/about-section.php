<?php

/**
 * About Section.
 *
 * @package understrap
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}
?>

<!-- about-section -->

<section id="about-section" class="py-5">
  <div class="container h-100">
    <h3 class="text-center mb-5 display-4 text-light">ABOUT</h3>
    <div class="row align-items-center h-100">
      <div class="col-sm mx-auto text-light">

        <blockquote class="blockquote">
          <p class="font-italic about-text"><?php the_field("about_quote"); ?><p>
              <footer class="blockquote-footer">Hector Gonzalez - <cite title=""><small>Founder/CFO</small></cite>
              </footer>
        </blockquote>

      </div>
      <div class="col-sm">
        <img class="img-fluid rounded mx-auto d-block about__image" src="<?php the_field('about_image'); ?>" alt="">
      </div>

    </div>
    <div class="row">
      <div class="col-sm text-center mt-5">
        <a href="#contact-section" class="btn btn-secondary mb-3">
          <i class="fa fa-calendar" aria-hidden="true"></i> SET UP AN APPOINTMENT TODAY
        </a>
      </div>
    </div>

  </div>


</section>