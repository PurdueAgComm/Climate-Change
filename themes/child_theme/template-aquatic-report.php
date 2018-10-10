<?php
/**
 * The template for displaying all single posts
 * Template Name: Aquatic Report
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
              <li><a href="#aquatic">Aquatic Ecosystems</a></li>
              <li><a href="#changing">Changing Climate</a></li>
              <li><a href="#water">Water Temperature</a></li>
              <li><a href="#amount">Amount and Timing of Water</a></li>
              <li><a href="#agriculture">Agriculture and Nutrients</a></li>
              <li><a href="#lake">Lake Michigan</a></li>
              <li><a href="#invasive">Invasive Species</a></li>
              <li><a href="#management">Management Strategies</a></li>
              <li><a href="#gaps">Key Knowledge Gaps</a></li>
              <li><a href="#conclusions">Conclusions</a></li>
              <li><a href="#references">References</a></li>
              <li><a href="#cite">How to Cite</a></li>
              <li><a href="#footer">Footnotes</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-9">
          <h2 style="padding-top: 0; margin-top: 0;">Aquatic species are responding to change</h2>

          <p>Indiana is home to many types of aquatic ecosystems, including lakes, rivers, streams, wetlands, and temporary (ephemeral) pools, which provide habitats for a wide range of plants and animals. </p>

          <p>These ecosystems will experience changes in water quantity, water temperature, ice cover, water clarity, and oxygen content as the state’s temperature and rainfall patterns shift. The plants and animals living in these aquatic ecosystems will undergo changes that will vary based on the species and the specific places they inhabit. </p>

          <p>It is challenging to know precisely how organisms will respond to changes in climate. Effects on one species create a difficult-to-predict chain reaction that potentially influences other species in the same ecosystem. Some organisms will adapt and evolve to survive, or even thrive, as the climate changes, but they will have to adjust to more than just the changes in climate. They will also respond to changes in a wide variety of other environmental factors that affect them, including invasive species, habitat destruction, contaminants, nutrient runoff, and land management decisions. While these complicated interactions make it challenging to predict the long-term fate of Indiana’s aquatic species, enough is known about climate-related stressors to help managers develop strategies to avoid the most critical outcomes, hopefully avoiding species loss. </p>

          <p>This report from the Indiana Climate Change Impacts Assessment (IN CCIA) uses climate projections for the state to explore the potential threats to Indiana’s aquatic ecosystems and describes potential management implications and opportunities. The findings presented here are primarily based on the IN CCIA <a href="#cite">Aquatic Ecosystems Working Group</a> <a href="https://docs.lib.purdue.edu/aquatictr/">technical report</a> (Höök et al., in review) and the IN CCIA report <a href="/indianaclimate/indiana-climate-report/">Indiana's Past and Future Climate</a> (Widhalm et al., 2018).</p>

          <a class="btn btn-1a btn-default" style="border:1px solid #333; margin-bottom:20px; white-space:pre-wrap;" href="https://docs.lib.purdue.edu/aquatictr/"><i class="fa fa-download"></i> Download the full report</a>

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
              <li>As air temperatures warm 5&#176;F to 6&#176;F by mid-century, water temperatures in Indiana’s streams, rivers and lakes will increase, the duration and extent of ice cover will decline, and lake stratification during the warm season will last longer. Shifting thermal characteristics in Indiana’s water bodies will have rippling effects on aquatic organisms, including their growth, survival, and reproduction patterns.</li>
              <li>Warming water temperatures will generally maintain or increase habitat range for Indiana’s warmwater fishes, while significantly reducing habitat for Indiana’s coolwater and coldwater fishes.
              <li>Changes in the timing, intensity and amount of Indiana’s precipitation, along with warmer air temperature and increased evaporation, will alter local hydrology, including wetland flooding and drying patterns. In response, plant species in and around wetlands will shift, leading to changes in breeding patterns for amphibians and invertebrates, and influencing the dispersal of both native and invasive species.</li>
              <li>Indiana’s streamflows are expected to become more variable, with seasonal changes in the amount and timing of flows. Altered streamflow patterns threaten habitat, breeding, and survival of sensitive species such as Indiana’s endangered freshwater mussels.</li>
              <li>More frequent and intense precipitation, especially in the spring, will increase the risk of human-derived nutrients entering Indiana waterways as subsurface tile drainflow and total runoff increases. Warming waters, combined with elevated nutrient levels, will lead to more algal blooms, reduced water clarity, and depleted oxygen levels.</li>
              <li>Lake stratification—where warm surface water and cold bottom water are unable to mix—is expected to begin earlier in the year and last longer in Indiana lakes and reservoirs in response to warming air temperatures and reduced ice cover. In stratified lakes, increased risk of large algal blooms will increase the occurrence, extent, and intensity of bottom-water hypoxia (low oxygen levels), which will reduce habitat for coldwater fishes like cisco and rainbow trout.</li>
              <li>Near-surface summer water temperatures throughout Lake Michigan have warmed by over 3°F since 1980, and this warming trend is projected to continue in the coming decades. However, the impact of warming temperatures on aquatic habitats in southern Lake Michigan is uncertain. Future conditions for Indiana’s shallow and highly variable near-shore water will depend on future water levels, wind patterns, and lake-wide warming.</li>
              <li>Indiana’s changing climate will lead to shifts in the types and number of aquatic and semiaquatic species throughout the state. As air and water temperatures warm, invasive animals and plants, along with new parasites, may expand their ranges into Indiana. Increased precipitation and flooding raises the risk of invasive freshwater species spreading to new habitats.</li>
              <li>It is difficult to confidently predict how species will respond and adapt to continued changes in climate, land use, and human management. Managing for ecosystem diversity and implementing precautionary management approaches may help protect Indiana’s aquatic ecosystems from a rapidly changing environment.</li>
            </ul>

            <a class="btn btn-1a btn-default" style="border:1px solid white; margin-bottom:20px; white-space:pre-wrap;" href="https://docs.lib.purdue.edu/aquatictr/"><i class="fa fa-download"></i> Download the full report</a>

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