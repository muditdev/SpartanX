<?php
/**
 * Template Name: Forum1
 */

get_header();
?>
<section id="primary" class="content-area">
  <div class="forum-header">
    <div class="f-content">
      <div class="f--bg"></div>
        <div class="fh-cont">
          <h1 class="title">SPARTAN <span>X</span> LEADERSHIP FORUM </h1>
          <div class="select-city-seat">
            <div class="selectcity">
              <select name="">
                <option value="">Select your city </option>
                <option value="Indore">Indore</option>
                <option value="Bhopal">Bhopal</option>
              </select>
            </div>
            <div class="reqseat">
              <a href="javascript:void(0)" class="btn-reqseat">REQUEST A SEAT</a>
            </div>
          </div>
        </div>

    </div>
    </div>
  </div>
  <main id="main" class="site-main oxhide" role="main">

      <?php /*
          while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/content', 'notitle' );
          endwhile; // End of the loop.
    */  ?>
  </main><!-- #main -->
</section><!-- #primary -->
<?php
get_footer();
