<?php
/**
 *
 * Template Name: Home Page with Banner
 *
**/

get_header(); ?>

<div class="full-width-banner" style="background-image: url('/climate/wp-content/themes/child_theme/climate-bg.jpg');">
  <div class="container">
    <div class="col-lg-12">
      <div class="shader">
      <article>
        <div class="fullwidthheader">Purdue Climate Change Research Center</div>
        <p class="fullwidthparagraph">Facilitating interdisciplinary climate change research and education</p>
      </article>
      </div>
    </div>
  </div>
</div>
<br>



<?php while ( have_posts() ) : the_post(); ?>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <?php get_template_part( 'content', 'home' ); ?>
      </div>
    </div>
  </div>
<?php endwhile; // end of the loop. ?>


<br>
<?php
//get_sidebar();
get_footer();


