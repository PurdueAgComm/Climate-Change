<?php
/**
 * The template for displaying all single posts
 * Template Name: Agriculture Report
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
              <li><a href="#agriculture">Indiana Agriculture</a></li>
              <li><a href="#climate">Our Changing Climate</a></li>            
              <li><a href="#agronomic">Agronomic Crops</a></li>
              <li><a href="#specialty">Specialty Crops</a></li>
              <li><a href="#livestock">Livestock and Poultry</a></li>
              <li><a href="#resources">Soil Health and Water Resources</a></li>
              <li><a href="#pests">Pests and Disease</a></li>
              <li><a href="#gaps">Key Knowledge Gaps</a></li>
              <li><a href="#conclusions">Conclusions</a></li>
              <li><a href="#references">References</a></li>
              <li><a href="#footnotes">Footnotes</a></li>
              <li><a href="#cite">How to Cite</a></li>              
            </ul>
          </div>
        </div>
        <div class="col-sm-9">
          <h2 style="padding-top: 0; margin-top: 0;">Successful farming depends on our climate</h2>
          <p>Indiana has long been one of the nation’s leaders in agricultural productivity. Favorable temperatures and precipitation help Indiana farmers generate over $31 billion worth of sales per year, making the state 11th in total agricultural products sold<sup><a href="#footnotes">1</a></sup>.</p>

          <p>Changes to the state’s climate over the coming decades, including increasing temperatures, changes in precipitation amounts and patterns, and rising levels of carbon dioxide (CO<sub>2</sub>) in the air will result in several direct and indirect impacts to the state’s agricultural industry.</p>

          <p>This report from the Indiana Climate Change Impacts Assessment (IN CCIA) describes how projected changes in the state’s climate will affect the health of livestock and poultry, growing season conditions for crops, the types of crops that can be planted, soil health and water quality as well as weed, pest and disease pressure for agricultural production statewide.</p>

          <a class="btn btn-1a btn-default" style="border:1px solid #333; margin-bottom:20px; white-space:pre-wrap;" href="https://docs.lib.purdue.edu/agriculturetr/"><i class="fa fa-download"></i> Download the full report</a>

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
              <li><strong>Key finding:</strong> Warmer overnight temperatures in Indiana have contributed to reduced corn yields over the last decade. Elevated overnight temperatures increase plant respiration, reducing sugar availability for grain production, and can affect the timing and success of pollination—resulting in lower crop yield. Observations show that Indiana corn yields are reduced by about 2 percent for every 1°F increase in overnight temperatures during July.<br><br>
              <em>Coping with change:</em> Earlier planting or using varieties that more quickly reach maturity could help corn plants avoid summer heat stress during pollination. Breeding corn for traits that improve factors contributing to yield in warmer conditions may also help offset the effect of warming overnight temperatures.</li>
      
              <li><strong>Key finding:</strong> More frequent heat stress and a doubling of water deficits are expected to reduce Indiana corn yields, for current varieties, by 16 to 20 percent by mid-century. Soybean yields are expected to decline 9 to 11 percent.<br><br>
              <em>Coping with change:</em> Yield losses could be partially offset with changes in cropping systems, planting date, crop genetics, soil health, supplemental irrigation and/or drainage management. Increasing atmospheric carbon dioxide may lessen yield losses in soybeans, and double-cropping of soybeans will become increasingly viable in southern Indiana.</li>
              
              <li><strong>Key finding:</strong> While Indiana’s frost-free season is expected to start about one month earlier by mid-century, average crop planting dates are not expected to significantly shift due to increased spring rainfall limiting early access to fields. Observations over the last 30 years show a declining number of days suitable for spring fieldwork in Indiana, and this trend is expected to continue.<br><br>
              <em>Coping with change:</em> Improving soil health with management practices that increase soil stability and water movement can help with managing additional spring rainfall. Fall-planted cereal crops that continue growing into early spring can aid in extracting excess soil water, potentially providing earlier field access. Investing in additional subsurface drainage and machinery suitable for wetter conditions may also improve field accessibility.</li>

              <li><strong>Key finding:</strong> The onset of winter dormancy in perennial trees and vine fruit, as signaled by the first killing frost, is projected to occur 10 days later in Indiana by mid-century. Warmer winter and spring temperatures will allow plants that have accumulated enough chilling hours to break dormancy up to 2 weeks earlier in the spring, meaning some fruit crops may begin flowering before the risk of frost damage has ended. By mid-century, reduced chilling in some areas of Indiana may no longer meet the requirement for bud emergence for some varieties of apples, peaches and grapes.<br><br>
              <em>Coping with change:</em> Winter damage may be reduced, in part, by developing cultivars with improved dormancy that do not respond to brief winter and spring warm periods. A warming of Indiana’s coldest annual temperatures will expand the suitable range for peach, pluot and nectarine production and it may become possible to grow fruit that currently lacks hardiness for Indiana’s climate, like boysenberry and tayberry.</li>

              <li><strong>Key finding:</strong> Higher temperatures will put Indiana livestock at increased risk of heat stress, which can lead to reduced animal feed intake, productivity and fertility. By mid-century, the annual number of days with high temperatures above 86°F, a critical threshold for livestock heat stress, is projected to double from 40 days per year to 80-100 days per year. The average duration of heat stress events is also expected to double.<br><br>
              <em>Coping with change:</em> Maintaining optimal microclimates for confined feeding operations may require improved or expanded ventilation systems and increased energy, operating, and maintenance costs. Pasture-based systems may incur costs of additional shelters or other environmental buffers to protect animals from the increased frequency of weather extremes.</li>

              <li><strong>Key finding:</strong> Decreasing forage quality is a serious threat to Indiana livestock and poultry. Warmer temperatures will decrease plant protein content and increase neutral detergent fiber levels in certain legumes, including alfalfa, affecting animal growth and milk production. Variable winter conditions may also affect overall forage quantity.<br><br>
              <em>Coping with change:</em> Despite their climate sensitivity, C<sub>3</sub>-photosynthetic legumes still provide better quality forage than C<sub>4</sub> grasses because the very high fiber, low intake and poor digestibility of C<sub>4</sub> plants severely limit animal performance.</li>

              <li><strong>Key finding:</strong> Increasing winter and spring precipitation will result in about a 30 to 50 percent increase in spring subsurface tile drainflow in Indiana by mid-century. These shifts will likely lead to nutrient loss from farm fields, and some existing drains may be overwhelmed by the higher flows.<br><br>
              <em>Coping with change:</em> Implementing in-field and edge-of-field conservation practices can reduce nutrient losses. Capturing drainflow during the non-growing season could become more effective as the timing of peak drainflow is projected to occur earlier in the winter and spring. Increased use of winter cereal crops, like rye, that capture nutrients and transpire water may help with managing water-stressed fields.</li>

              <li><strong>Key finding:</strong> Warming temperatures have the potential to increase rates of soil organic matter decomposition in Indiana by about 50 percent by mid-century, which can reduce infiltration and soil water holding capacity and increase the release of carbon dioxide and nitrogen gases from the soil into the atmosphere.<br><br>
              <em>Coping with change:</em> Adopting management practices that improve overall soil quality, such as increasing plant diversity and use of cover crops and reduced/no-till systems, can help maintain soil organic matter even as temperatures warm.</li>

              <li><strong>Key finding:</strong> Warmer winters, wetter springs and hotter summers may result in increasing weed, pest and disease pressure on Indiana’s agricultural production. These indirect influences are complex, difficult to predict and can be positively or negatively affected by farm management decisions.<br><br>
              <em>Coping with change:</em> With no change to current cropping systems, producers of all crops will likely need to increase foliar pesticide and herbicide applications, increasing the risk of pesticide resistance. Pest disease damage may be reduced by selecting plant species with increased insect and disease resistance.</li>
            </ul>

            <a class="btn btn-1a btn-default" style="border:1px solid white; margin-bottom:20px; white-space:pre-wrap;" href="https://docs.lib.purdue.edu/agriculturetr/"><i class="fa fa-download"></i> Download the full report</a>

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