<?php
/**
 * The template for displaying all single posts
 * Template Name: Climate Report
 */

$postID = get_the_ID();
$featuredURL = get_the_post_thumbnail_url($postID, "full");
$custom_fields = get_post_custom();
get_header();


if ( have_posts() ) : while ( have_posts() ) : the_post();
?>



  <div class="landing" style="background-image: url('<?php echo get_the_post_thumbnail_url($postID, "full"); ?>')"></div>


<style>
  .takeaway-parallax {
    background: url("https://ag.purdue.edu/envision/wp-content/uploads/2017/11/takeaway-bg-data.jpg");
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }

@media (max-width: 768px) {
  #soundscapeQuiz {
    height: 600px;
  }

}

</style>

<div class="container story-body" style="/*shame*/min-height: 0vh;">
  <div class="row">
    <div class="maincontent blog-maincontent col-md-offset-1 col-md-10">
      <?php
       if(isset($custom_fields["banner-caption"])) {
          echo "<div class='blog-meta' style='border-left: 3px solid #dadada;'>";
            echo "<p style='margin: 0;' class='text-muted'><small>" . $custom_fields['banner-caption'][0] . "</small></p>";
          echo "</div>";
        }
        ?>
        <h1 class="blog-title"><?php the_title(); ?></h1>
        <div class="blog-date text-muted">
          <i class="fa fa-calendar fa-fw"></i> <?php the_time('l, F jS, Y'); ?>
          <?php
            // set variable
            if(isset($custom_fields["byline"])) {
              $byline = $custom_fields['byline'];
          ?>
            <i class="fa fa-user fa-fw"></i> <?php echo $byline[0]; ?>
          <?php } ?>
        </div>
        <br>
        <div class="col-sm-3">
          <div class="sidenav">
            <ul>
              <li><a href="#data">The Data</a></li>
              <li><a href="#temperatures">Temperatures</a></li>
              <li><a href="#precipitation">Precipitation</a></li>
              <li><a href="#events">Extreme Events</a></li>
              <li><a href="#gaps">Key Knowledge Gaps</a></li>
              <li><a href="#conclusions">Conclusions</a></li>
              <li><a href="#references">References</a></li>
              <li><a href="#cite">How to Cite</a></li>
              <li><a href="#footer">Footnotes</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-9">
          <p>Indiana’s climate is changing. Temperatures are rising, more precipitation is falling and the last spring frost of the year has been getting steadily earlier.</p>

          <p>The data, going in some cases back to 1895, show clear trends, and there are no signs of them stopping or reversing. In some cases, these have been slow progressions. But the speed with which these changes occur has increased significantly in recent decades.</p>

          <p>Projections show the pace picking up even more speed as heat-trapping gases, produced by humans burning fossil fuels, continue accumulating in the atmosphere. Indiana will continue to warm, more precipitation will fall, and extremely hot days will be common in many parts of the state. These changing climate patterns affect us individually and affect many aspects of our society, including human health, public infrastructure, water resources, agriculture, energy use, urban environments, and ecosystems.</p>

          <p>This report from the Indiana Climate Change Impacts Assessment (IN CCIA) describes historical climate trends from more than a century of data and future projections that detail the ways in which our climate will continue to change.</p>

          <a class="btn btn-1a btn-default" style="border:1px solid #333; margin-bottom:20px; white-space:pre-wrap;" href="https://docs.lib.purdue.edu/climatetr/2"><i class="fa fa-download"></i> Download the full report</a>

        </div>
      </div>
    </div>
  </div>
  <!--Big Idea & Spotlights-->


  <div class="section takeaway-parallax">
    <div class="section takeaway-header">
      <div class="container">
        <h2>the takeaway</h2>
      </div>
    </div>
    <div class="arrow-down"></div>
    <div class="container">
        <div class="col-sm-12 takeaway">
            <ul class="takeaway" style="padding-bottom: 5px;">
              <li><strong>Key finding:</strong> Indiana has already warmed 1.2°F since 1895. Temperatures are projected to rise about 5°F to 6°F by mid-century<a href="#footer1"><sup>1</sup></a>, with significantly more warming by century’s end.</li>
              <li><strong>Why it matters:</strong> A rising average temperature increases the chance of extreme heat and reduces the chance of extreme cold, and it also changes the timing and length of the frost-free season when plants grow. These shifts will impact air quality, extend the growing season and the allergy season, and create more favorable conditions for some pests and invasive species.</li>
            </ul>
            <ul class="takeaway" style="padding-bottom: 5px;">
              <li><strong>Key finding:</strong> The number of extremely hot days<a href="#footer2"><sup>2</sup></a> will rise significantly in all areas of the state. In the past³, southern Indiana averaged about seven of these days per year, but by mid-century this region is projected to experience 38 to 51 extremely hot days per year.</li>
              <li><strong>Why it matters:</strong> Extreme heat raises the likelihood of heat-related illnesses, such as heat exhaustion and heat stroke, which can lead to increased hospitalizations and medical costs. Children and the elderly are especially vulnerable. Extreme heat also reduces crop yields, counteracting the benefits of a longer growing season.</li>
            </ul>
            <ul class="takeaway" style="padding-bottom: 5px;">
              <li><strong>Key finding:</strong> Extreme cold events are declining. By mid-century, the northern third of Indiana will experience on average only six days per year below 5°F, down from 13 days in the past<a href="#footer3"><sup>3</sup></a>.</li>
              <li><strong>Why it matters:</strong> Cold temperatures control populations of disease-carrying insects such as mosquitoes and ticks, as well as forest pests. Warmer winters would allow some of these species to remain active for longer periods or to expand their ranges into Indiana.</li>
              </ul>
            <ul class="takeaway" style="padding-bottom: 5px;">
              <li><strong>Key finding:</strong> Average annual precipitation has increased 5.6 inches since 1895, and more rain is falling in heavy downpours. Winters and springs are likely to be much wetter by mid-century, while expected changes in summer and fall precipitation are less certain.</li>
              <li><strong>Why it matters:</strong> Increased precipitation, especially in the form of heavy rain events, will increase flooding risks and pollute water as combined sewer systems overflow and fertilizers run off of farm fields. Warmer summers with the same or less rain would increase stress on agricultural crops and drinking water supplies.</li>
              </ul>
            <ul class="takeaway" style="padding-bottom: 5px;">
              <li><strong>Key finding:</strong> The frost-free season has lengthened by nine days per year statewide since 1895. This trend is projected to continue and intensify. By mid-century, central Indiana’s frost-free season is projected to increase by 3.5 to 4.5 weeks compared to the past<a href="#footer3"><sup>3</sup></a>.</li>
              <li><strong>Why it matters:</strong> Longer growing seasons can increase the productivity of food crops and forests, and could expand crop-production opportunities in northern latitudes or the possibility of double-cropping further south. But they also increase growth of less desirable plants like ragweed and create favorable conditions for some invasive species.</li>
              </ul>

            <a class="btn btn-1a btn-default" style="border:1px solid white; margin-bottom:20px; white-space:pre-wrap;" href="https://docs.lib.purdue.edu/climatetr/2"><i class="fa fa-download"></i> Download the full report</a>

        </div>
    </div>
  </div>

  <div class="container story-body">
    <div class="row">
      <div class="maincontent blog-maincontent col-md-offset-1 col-md-10">

        <?php the_content();

        if(isset($custom_fields["photo-credit"])) {
          echo "<p class='text-muted small'><em>Photos provided by " . $custom_fields['photo-credit'][0] . ".</em></p>";
        } ?>

        <?php if(has_category() || has_tag()) : ?>
          <div class="blog-meta">
            <?php if(has_category()) : ?>
              <i class="fa fa-folder" title="category"></i> Category: <?php the_category(', '); ?> <br>
            <?php endif; ?>
            <?php if(has_tag()) : ?>
              <i class="fa fa-tags"></i> Tag: <?php the_tags(''); ?>
            <?php endif; ?>
          </div>
        <?php endif; ?>
        <br>
       <!--  <nav id="nav-single">
          <h3 class="sr-only"><?php _e( 'Read more', 'purduetwentyfourteen' ); ?></h3>
          <div class="pull-left"><?php previous_post_link( '%link', __( '<i class="fa fa-arrow-circle-left"></i> %title', 'purduetwentyfourteen' ) ); ?></div>
          <div class="pull-right"><?php next_post_link( '%link', __( '%title <i class="fa fa-arrow-circle-right"></i>', 'purduetwentyfourteen' ) ); ?></div>
        </nav> -->
        <br><br>
    </div>
  </div>
</div>

<?php endwhile; else: ?>
  <p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?>


<?php get_footer(); ?>