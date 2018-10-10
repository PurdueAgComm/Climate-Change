<?php
/**
 * The template for displaying all single posts
 * Template Name: Urban Report
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
              <li><a href="#benefits">Benefits of Urban Green Infrastructure</a></li>              
              <li><a href="#climate">Our Changing Climate</a></li>
              <li><a href="#responses">Responses of Urban Trees</a></li>            
              <li><a href="#impacts">Impacts on Other Green Infrastructure</a></li>
              <li><a href="#strategies">Management Strategies</a></li>
              <li><a href="#gaps">Key Knowledge Gaps</a></li>
              <li><a href="#conclusion">Conclusion</a></li>
              <li><a href="#references">References</a></li>
              <li><a href="#cite">How to Cite</a></li>
              <li><a href="#footer">Footnotes</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-9">
          <h2 style="padding-top: 0; margin-top: 0;">Protecting the benefits of nature in cities</h2>
          <p>Cities use green infrastructure, including forests, community gardens, lawns and prairies, to improve the quality of life for residents, promote sustainability and mitigate the effects of climate change. These and other kinds of green spaces can decrease energy consumption, increase carbon storage and improve water quality, among other benefits.</p>

          <p>More than 70 percent of Hoosiers reside in urban settings, and green infrastructure can provide significant economic advantages. In Indianapolis, for example, urban forests provide a $10 million annual benefit through stormwater control, carbon sequestration, energy reduction and air pollution filtration.</p>

          <p>However, just like human-built infrastructure, urban green infrastructure will be subject to the impacts of a changing climate, and its management must be considered as Indiana gets warmer and precipitation patterns change. This report from the Indiana Climate Change Impacts Assessment (IN CCIA) applies climate projections for the state to explore the potential threats to urban green infrastructure, and considers potential management implications and opportunities. The findings presented here are primarily based on the IN CCIA <a href="#cite">Urban Green Infrastructure Working Group</a> <a href="https://docs.lib.purdue.edu/urbanpub/1/">technical report</a> (Reynolds et al., in review) and the IN CCIA report <a href="https://ag.purdue.edu/indianaclimate/indiana-climate-report/">Indiana’s Past and Future Climate</a> (Widhalm et al., 2018a).</p>

          <a class="btn btn-1a btn-default" style="border:1px solid #333; margin-bottom:20px; white-space:pre-wrap;" href="https://docs.lib.purdue.edu/urbantr/1/"><i class="fa fa-download"></i> Download the full report</a>

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
              <li>Urban green infrastructure—including forests, green roofs, community gardens, and native plantings—provides economic, environmental and health benefits to cities in Indiana. The importance of maintaining green infrastructure to support those benefits will likely increase in a changing climate.</li>

              <li>Maples are among the most commonly planted street trees in Indiana. Many of them could experience negative effects from a warming climate. By late-century, habitat suitability for black maple and sugar maple is projected to decline in Indiana. Silver and red maples, conversely, are likely to have no change or increased habitat suitability.</li>

              <li>Warming temperatures are expected to increase heat stress on urban plants and may result in additional pressure from pests and diseases. Plant heat stress days—with temperatures reaching above 86°F—in central Indiana are projected to increase by 6.5 to 8 weeks by mid-century<sup><a href="#footer">1</a></sup>. Elevated temperatures within urban areas (urban "heat islands") may further exacerbate the impacts of climate change.</li>

              <li>Projected increases in rainfall volume and intensity by mid- and late-century may result in added soil erosion and are expected to increase stress on Indiana’s green drainage infrastructure, which could lead to degradation and loss of function.</li>

              <li>A warmer, longer growing season with higher levels of atmospheric carbon dioxide (CO<sub>2</sub>) may promote tree growth and carbon storage in Indiana’s urban green spaces. However, excessive heat stress may lead to carbon storage reductions in trees and increased CO<sub>2</sub> emissions from soil. Damage from extreme weather events to trees, and reduced snow cover on lawns can also lead to carbon losses.</li>

              <li>Just as for human-built "gray infrastructure," proactive planning for climate change involves anticipating potential impacts to green infrastructure, such as increased stormwater and heat stress, and adjusting management strategies. Communities may consider managing for key characteristics of resilient ecosystems (e.g. biodiversity, redundancy) and/or adopting strategies to deal with a specific aspect of climate change (e.g. shifting species compositions, building soil water holding capacity).</li>

              <li>Climate change may present opportunities to promote urban green infrastructure. Unlike human-built "gray infrastructure," green infrastructure can be conducive to grassroots stewardship and governance, and has the potential to relieve climate change-related strains on municipal budgets.</li>

            </ul>

            <a class="btn btn-1a btn-default" style="border:1px solid white; margin-bottom:20px; white-space:pre-wrap;" href="https://docs.lib.purdue.edu/urbantr/1/"><i class="fa fa-download"></i> Download the full report</a>

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