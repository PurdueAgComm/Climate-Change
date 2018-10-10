<?php
/**
 * The template for displaying all single posts
 * Template Name: Forest Report
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
              <li><a href="#forests">Indiana Forests Through Time</a></li>
              <li><a href="#climate">A Changing Climate</a></li>
              <li><a href="#regeneration">Forest Regeneration</a></li>
              <li><a href="#composition">Forest Composition</a></li>
              <li><a href="#growth">Tree Growth &amp; Harvest</a></li>
              <li><a href="#habitat">Habitat and Other Benefits</a></li>
              <li><a href="#products">Forest Products</a></li>
              <li><a href="#gaps">Key Knowledge Gaps</a></li>
              <li><a href="#conclusion">Conclusion</a></li>
              <li><a href="#references">References</a></li>
              <li><a href="#cite">How to Cite</a></li>
              <li><a href="#footer">Footnotes</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-9">
          <h2 style="padding-top: 0; margin-top: 0;">Our forests will respond to climate change</h2>
          <p>Over the next century, rising temperatures and changing precipitation patterns across the Midwest will likely have widespread consequences for Indiana's forests. Expected changes include shifts in the distributions and abundances of trees, understory plants and wildlife, as well as changes in the environmental, economic and cultural benefits these forests provide. </p>

          <p>This report from the Indiana Climate Change Impacts Assessment (IN CCIA) examines the direct and indirect impacts that climate change is expected to have on Indiana's forests. The report specifically addresses forest regeneration, forest composition, tree growth and harvest, wildlife habitat and forest products. The findings presented here are based primarily on the IN CCIA <a href="#cite">Forest Ecosystem Working Group</a> <a href="https://docs.lib.purdue.edu/forestpub/1/">technical report</a> (Phillips et al., in review) and the IN CCIA report <a href="https://ag.purdue.edu/indianaclimate/indiana-climate-report/">Indiana's Past and Future Climate</a> (Widhalm et al., 2018).</p>

          <p>Predicting the future of a complex ecosystem with hundreds of interacting species is challenging, even under stable conditions. But conditions are not stable. Indiana's forests are living through simultaneous changes in climate, the concentration of carbon dioxide (CO<sub>2</sub>) in the atmosphere, exposure to atmospheric pollutants that can damage or fertilize trees, management practices and other factors. Even a single change, such as an increase in temperature, has consequences that ripple through the system. Because both forests and the changes in climate and atmosphere are complex, the results described in this assessment are necessarily more qualitative than quantitative.</p>

          <a class="btn btn-1a btn-default" style="border:1px solid #333; margin-bottom:20px; white-space:pre-wrap;" href="https://docs.lib.purdue.edu/foresttr/1/"><i class="fa fa-download"></i> Download the full report</a>

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
              <li>Predicted changes in climate – warmer, wetter springs followed by hotter, drier summers – may increase habitat suitability for a growing assortment of tree species in Indiana. More species' habitats are predicted to enter the state than leave the state by century's end. Habitat suitability is expected to increase for 43 to 52 percent of tree species and decrease for 17 to 29 percent of tree species in Indiana.</li>

              <li>A longer growing season and greater concentration of carbon dioxide (CO<sub>2</sub>) in the atmosphere may increase forest productivity and carbon uptake in the short term. However, increases in the frequency and intensity of spring flooding and summer drought are likely to offset or negate these benefits. The wetter springs and more frequent flooding will also promote pathogen-related diseases.</li>

              <li>Many of the tree species that are positioned to become dominant as forests age, such as maples and tulip trees, are poorly adapted to the warm, drier summer conditions that are predicted by most climate models. Thus, changes in forest composition have the potential to decrease forest productivity and carbon uptake. However, management factors, such as rotation length and harvesting intensity, may influence changes in species composition and growth rates.</li>

              <li>Forest regeneration, which depends on the survival and growth of tree seedlings, will be affected by changes in the climate, as well as by changes in the abundance of other species such as herbivores and understory plants. Longer growing seasons could help seedlings establish, but increased spring precipitation and flooding, as well as drier summers, may damage seedlings during sensitive phases of growth.</li>

              <li>Changes in climate will likely have varying effects on the proliferation of invasive plants already in the state. Warmer temperatures may increase the number of new invasive species, as plants such as kudzu and Chinese privet expand their ranges northward in response to an altered climate.</li>

              <li>The number of days with frozen soil is projected to drop by half to two-thirds by late century<sup><a href="#footer">1</a></sup>, dramatically shrinking the time window for harvesting trees without environmental disturbance and damage. The risk of soil rutting and erosion from harvest activities on wet soil is likely to increase in Indiana.</li>

              <li>Other forest benefits are also likely to be affected by a shifting climate. For instance, maple syrup season is expected to be earlier and shorter, and some species commonly used as Christmas trees, like white pine, are likely to suffer from the warmer temperatures.</li>

            </ul>

            <a class="btn btn-1a btn-default" style="border:1px solid white; margin-bottom:20px; white-space:pre-wrap;" href="https://docs.lib.purdue.edu/foresttr/1/"><i class="fa fa-download"></i> Download the full report</a>

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