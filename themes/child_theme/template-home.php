<?php
/**
 *
 * Template Name: Home Page with Banner
 *
**/

get_header(); ?>

<style>
  .report-wrapper {
    text-align: center;
    border-top: 7px solid gold;
    padding-top: 10px;
    margin-top: 30px;
  }

  @media (max-width: 768px) {
    .report-wrapper {

    }
  }

    .report-wrapper h3 {
      padding-top: 5px;
    }

      .report-list-heading {
        text-decoration: none !important;
      }

  .report-wrapper:hover {
    border-top: 7px solid black;
    transition: .5s ease;
  }

    .image {
      opacity: 1;
      display: block;
      width: 100%;
      height: auto;
      transition: .5s ease;
      backface-visibility: hidden;
    }

    .middle {
      transition: .5s ease;
      opacity: 0;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      text-align: center;
    }

    .report-wrapper:hover .image {
      opacity: 0.3;
    }

    .report-wrapper:hover .middle {
      opacity: 1;
    }

    .text {
      background-color: #FFD100;
      color: black;
      font-size: 16px;
      padding: 7px 15px;
    }

    .about-blurb::before {
      content: '';
      position: absolute;
      z-index: 0;
      left: 0;
      right: 0;
      height: 620px;
      background: #f6f9fc;
      transform: skew(0, -4deg);
      border-top: 60px solid #FFD100;
      background-image: linear-gradient(-4deg, #dfe9f3 0%, white 100%);
    }

    .bottom { height: 200px; }


      @media (max-width: 768px) {
        .about-blurb::before {
          display: none;
        }
      }

    .home-about {
      margin: 140px 0 30px 0;
    }

      @media (max-width: 768px) {
        .home-about {
          margin: 20px 0 20px 0;
        }

        .about-blurb::before {
          height: 650px;
        }
      }

    .footer, .bottom {
      position: relative;
    }

    .disabled {
      opacity: .6;
    }


.btn{font-family:inherit;font-size:inherit;color:inherit;background:none;cursor:pointer;padding:10px 60px;display:inline-block;text-transform:uppercase;letter-spacing:1px;font-weight:700;outline:none;position:relative;-webkit-transition:all 0.3s;-moz-transition:all 0.3s;transition:all 0.3s;border-radius:0;width:auto;}
.btn:after{content:'';position:absolute;z-index:-1;-webkit-transition:all 0.3s;-moz-transition:all 0.3s;transition:all 0.3s;}
.btn-1{border:2px solid #171717;color:#171717;}
.btn-1a:hover,
.btn-1a:active{color:#171717 !important;background:#FFD100;}
.btn-1a:visited, .btn-1a:link{color:#171717;text-decoration:none;}

</style>
<div class="full-width-banner" style="background-image: url('/indianaclimate/wp-content/uploads/2018/07/covered-bridge-banner.jpg');">
  <div class="container">
    <div class="col-lg-12">
      <div class="shader">
      <article>
        <div class="fullwidthheader">Indiana Climate Change Impacts Assessment</div>
        <p class="fullwidthparagraph">Putting global change into local perspective</p>
      </article>
      </div>
    </div>
  </div>
</div>
<br>

<div class="container">
  <div class="row">

    <div class="col-sm-3">
      <a href="/indianaclimate/indiana-climate-report" class="report-list-heading">
        <div class="report-wrapper">
          <img src="/indianaclimate/wp-content/uploads/2018/02/climate-report-1.jpg" class="img-responsive image" alt="Climate Report" />
          <div class="middle">
            <div class="text">Learn More</div>
          </div>
          <h3>Climate</h3>
        </div>
      </a>
    </div>


     <div class="col-sm-3">
      <a href="/indianaclimate/hoosier-health-report" class="report-list-heading">
        <div class="report-wrapper">
          <img src="/indianaclimate/wp-content/uploads/2018/04/health.jpg" class="img-responsive image" alt="Health Report" />
          <div class="middle">
            <div class="text">Learn More</div>
          </div>
          <h3>Health</h3>
        </div>
      </a>
    </div>

     <div class="col-sm-3">
      <a href="/indianaclimate/forest-ecosystems-report/" class="report-list-heading">
        <div class="report-wrapper">
          <img src="/indianaclimate/wp-content/uploads/2018/05/Forest-Ecosystems.jpg" class="img-responsive image" alt="Forest Report" />
          <div class="middle">
            <div class="text">Learn More</div>
          </div>
          <h3>Forest Ecosystems</h3>
        </div>
      </a>
    </div>

     <div class="col-sm-3">
      <a href="/indianaclimate/urban-ecosystems-report/" class="report-list-heading">
        <div class="report-wrapper">
          <img src="/indianaclimate/wp-content/uploads/2018/05/Urban-Ecosystems.jpg" class="img-responsive image" alt="Urban Green Space" />
          <div class="middle">
            <div class="text">Learn More</div>
          </div>
          <h3>Urban Green Space</h3>
        </div>
      </a>
    </div>

  </div>
  <div class="row">

    <div class="col-sm-3">
      <a href="/indianaclimate/agriculture-report/" class="report-list-heading">
        <div class="report-wrapper">
          <img src="/indianaclimate/wp-content/uploads/2018/07/ag-report.jpg" class="img-responsive image" alt="Agriculture Report" />
          <div class="middle">
            <div class="text">Learn More</div>
          </div>
          <h3>Agriculture</h3>
        </div>
      </a>
    </div>

    <div class="col-sm-3">
      <a href="/indianaclimate/aquatic-ecosystems-report" class="report-list-heading">
        <div class="report-wrapper">
          <img src="/indianaclimate/wp-content/uploads/2018/02/aqua.jpg" class="img-responsive image" alt="Aquatic Report" />
          <div class="middle">
            <div class="text">Learn More</div>
          </div>
          <h3>Aquatic Ecosystems</h3>
        </div>
      </a>
    </div>

    <div class="col-sm-3">
      <a class="report-list-heading">
        <div class="report-wrapper disabled">
          <img src="/indianaclimate/wp-content/uploads/2018/02/tourism.jpg" class="img-responsive image" alt="Tourism & Recreation Report" />
          <div class="middle">
            <div class="text">Coming Soon</div>
          </div>
          <h3>Tourism &amp; Recreation</h3>
        </div>
      </a>
    </div>

    <div class="col-sm-3">
      <a class="report-list-heading">
        <div class="report-wrapper disabled">
          <img src="/indianaclimate/wp-content/uploads/2018/02/water.jpg" class="img-responsive image" alt="Water Report" />
          <div class="middle">
            <div class="text">Coming Soon</div>
          </div>
          <h3>Water</h3>
        </div>
      </a>
    </div>

  </div>
  <div class="row">

    <div class="col-sm-3">
      <a class="report-list-heading">
        <div class="report-wrapper disabled">
          <img src="/indianaclimate/wp-content/uploads/2018/02/energy.jpg" class="img-responsive image" alt="Energy Report" />
          <div class="middle">
            <div class="text">Coming Soon</div>
          </div>
          <h3>Energy</h3>
        </div>
      </a>
    </div>

    <div class="col-sm-3">
      <a class="report-list-heading">
        <div class="report-wrapper disabled">
          <img src="/indianaclimate/wp-content/uploads/2018/02/infrastructure.jpg" class="img-responsive image" alt="Infrastructure Report" />
          <div class="middle">
            <div class="text">Coming Soon</div>
          </div>
          <h3>Infrastructure</h3>
        </div>
      </a>
    </div>

    <div class="col-sm-3">
      <a class="report-list-heading">
        <div class="report-wrapper disabled">
          <img src="/indianaclimate/wp-content/uploads/2018/02/assessment.jpg" class="img-responsive image" alt="Assessment Summary Report" />
          <div class="middle">
            <div class="text">Coming Soon</div>
          </div>
          <h3>Assessment Summary</h3>
        </div>
      </a>
    </div>


    <!-- <div class="col-sm-3">
      <a href="LINK">
        <div class="report-wrapper">
          <img src="IMAGE" class="img-responsive image" alt="REPORT" />
          <div class="middle">
            <div class="text">Learn More</div>
          </div>
          <h3>REPORT</h3>
        </div>
      </a>
    </div> -->

  </div>
</div>

<?php while ( have_posts() ) : the_post(); ?>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <?php get_template_part( 'content', 'home' ); ?>
        <br><br><br>
      </div>
    </div>
  </div>
<?php endwhile; // end of the loop. ?>

<div class="section">
  <div class="about-blurb">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="home-about">
            <h2>Climate Change Science for Indiana</h2>
            <div class="text-center"><img src="https://dev.ag.purdue.edu/indianaclimate/wp-content/uploads/2018/02/IN-CCIA-Logo-horizontal-2-300x115.png" alt="ccia logo" class="hidden-sm hidden-md hidden-lg"></div>
            <p><img src="https://dev.ag.purdue.edu/indianaclimate/wp-content/uploads/2018/02/IN-CCIA-Logo-horizontal-2-300x115.png" alt="ccia logo" align="right" class="hidden-xs">Scientists and decision makers from across the state are working together to develop a series of easily understandable reports that shows how a changing climate will affect state and local interests.  Led by the Purdue Climate Change Research Center (PCCRC), the Indiana Climate Change Impacts Assessment (IN CCIA) provides the latest scientific research to help Hoosiers understand and prepare for the impacts of a changing climate.
              <p>Our climate is changing, so let’s start building effective plans for a productive future.</p>
            <div style="text-align:center;">
              <br>
              <a class="btn btn-1a btn-default" style="border:1px solid black;margin-top:20px" href="/indianaclimate/about">Learn More</a>&nbsp;&nbsp;
              <a class="btn btn-1a btn-default" style="border:1px solid black;margin-top:20px" href="https://ag.purdue.edu/indianaclimate/support/">Support</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<br>
<?php
//get_sidebar();
get_footer();


