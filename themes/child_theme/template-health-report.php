<?php
/**
 * The template for displaying all single posts
 * Template Name: Health Report
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
              <li><a href="#heat">Heat-related Illnesses and Impacts</a></li>
              <li><a href="#air">Air Quality</a></li>
              <li><a href="#insect">Insect-borne Illnesses</a></li>
              <li><a href="#water">Water-based Problems</a></li>
              <li><a href="#additional">Additional Impacts</a></li>
              <li><a href="#gaps">Key Knowledge Gaps</a></li>
              <li><a href="#conclusions">Conclusions</a></li>
              <li><a href="#references">References</a></li>
              <li><a href="#cite">How to Cite</a></li>
              <li><a href="#footer">Footnotes</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-9">
          <h2 style="padding-top: 0; margin-top: 0;">Our health is linked to our climate</h2>

          <p>In the coming decades, Indiana’s changing climate will bring with it higher temperatures, longer heat waves, more extremely hot days and more frequent extreme storm events. Those changes will affect the health of Hoosiers in every part of the state.</p>

          <p>The pathways that lead to human health impacts are both direct and indirect. Direct effects include health impacts resulting directly from a hazard, such as heat stroke from extreme heat and respiratory illnesses from poor air quality. Indirect effects include increasing risks from “tropical” diseases like West Nile and Zika as populations of the insects that can spread these viruses grow, and increased rates of anxiety and depression as a result of coping with the loss of people or property after a severe weather event.</p>

          <p>This report from the Indiana Climate Change Impacts Assessment (IN CCIA) describes historical and future climate-related health impacts that affect Hoosiers. The findings presented here are primarily based on the IN CCIA <a href="#cite">Health Working Group</a> <a href="https://docs.lib.purdue.edu/healthpub/1/">technical report</a> (Filippelli et al., in review) and the IN CCIA report <a href="https://ag.purdue.edu/indianaclimate/indiana-climate-report/">Indiana’s Past and Future Climate</a> (Widhalm et al., 2018a).</p>

          <p>Many analyses in this report focus on how climate change will affect death rates. Fortunately, only a small fraction of the people whose health is compromised by climate change will die from it, but the non-lethal health problems (morbidity) experienced by a much larger population of Hoosiers will also burden our society. These other illnesses still cause missed work or school, lost income, increased health expenses, and general disruption to people’s lives. However, because morbidity research has focused on national and international estimates that are not specific to Indiana, these results are not reported here.</p>

          <a class="btn btn-1a btn-default" style="border:1px solid #333; margin-bottom:20px; white-space:pre-wrap;" href="https://docs.lib.purdue.edu/healthtr/1/"><i class="fa fa-download"></i> Download the full report</a>

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
              <li>Injuries and deaths caused by extreme heat are projected to increase, while injuries and deaths caused by extreme cold are projected to decrease. Overall, the annual number of temperature-related deaths in Indiana is expected to increase, and potentially even double, by mid-century<sup><a href="#footer">1</a></sup>. Children, the elderly, those in low-income households and those with pre-existing conditions will be at the greatest risk.

              <li>Higher temperatures and stagnant air will increase ground-level ozone production, worsening air quality. Reduced air quality can trigger asthma attacks or heart attacks, and cause or worsen respiratory and cardiovascular illnesses such as asthma, emphysema, chronic obstructive pulmonary disease (COPD), high blood pressure, diabetes and heart failure. These then cause premature deaths.</li>

              <li>Indiana's allergy season is projected to lengthen by a month by mid-century<sup><a href="#footer">2</a></sup>, due to a longer growing season. Ragweed and other plants will produce more pollen as the rising carbon dioxide in the air increases their growth. </li>

              <li>Ticks have expanded their range and increased reproduction rates across Indiana as temperatures have warmed in recent decades. As a result, the number of tick-borne illnesses such as Lyme disease has increased. This trend will continue and intensify as the warming continues.</li>

              <li>In the past 30 years, increased precipitation and flooding may have contributed to the increase in Indiana's mosquito population. Greater spring rainfall and warmer temperatures are projected to continue this trend and will provide living conditions for the more "tropical" types of mosquitoes that carry diseases such as malaria, dengue fever, and Zika.</li>

              <li>Increased precipitation, especially in winter and spring, will heighten flooding risks. Floods directly impact human health through physical injuries, displacement, property loss, and post-flood mold and fungus growth. </li>

              <li>Cities like Indianapolis will be particularly vulnerable to health risks since urban areas create "heat islands" that can intensify temperature and precipitation impacts, and also contain more sources of harmful ozone. </li>

            </ul>

            <a class="btn btn-1a btn-default" style="border:1px solid white; margin-bottom:20px; white-space:pre-wrap;" href="https://docs.lib.purdue.edu/healthtr/1/"><i class="fa fa-download"></i> Download the full report</a>

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