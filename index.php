<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package landing
 */

get_header(); ?>




    <div class="jumbotron">
      <div class="container">
        
        <h1>You have the business idea, the skills and the drive...Now get the capital you need to <span class="emphasis">start, build and grow</span> your business.</h1>
        
      </div><!-- .container -->
    </div>

    
<!-- 
    
///////////// STRIP /////////// 
    
-->
    
    <div class="strip strip-pad">
      <div class="steps">
        <div class="container">

          <h2>Get Fast Easy Funding Now!</h2>

          <div class="row">
            
            <div class="col-sm-4 signup">
              <div class="step-content">
                <i class="fa fa-pencil fa-lg"></i>
                <h3 class="signup">Sign Up</h3>
              </div>
            </div>  

            <div class="col-sm-4 preapproved">
              <div class="step-content">
                <i class="fa fa-check-square fa-lg"></i>
                <h3 class="preapproved">Get Pre-Approved</h3>
              </div>
            </div>

            <div class="col-sm-4 getfunded">
              <div class="step-content">
                <i class="fa fa-dollar fa-lg"></i>
                <h3 class="getfunded">Get Funded</h3>
              </div> 
            </div>

          </div><!-- .row -->
        </div><!-- .container -->
        
      </div><!-- .steps --> 
    </div><!-- .strip -->
    
    
<!-- 

///////////// STRIP /////////// 

-->
    
    <div class="strip strip-gray strip-pad">
      <div class="container">
        <h2 class="revolvingcreditlines">Get up to $150,000 in Revolving Credit Lines to Fund Your New Business!</h2>
      </div>
    </div><!-- .strip -->
    
    
<!-- 

///////////// STRIP /////////// 

-->

    <div class="strip">
    
      <div class="container-fluid">

        <div class="row">
          <div class="col-sm-6 strip-media">
            <img class="img-responsive" src="<?php bloginfo('template_directory') ?>/img/flowershop-owner.jpg" />
          </div>
          <div class="col-sm-6 strip-content right">
            <h3>Get up to $150,000 to start, build and grow your business.</h3>
            <p>Guaranteed minimum $50,000 if you are pre-approved! 0% interest for 12 months!</p>
          </div>
        </div><!-- .row -->


      </div><!-- .container-fluid -->
        
    </div><!-- .strip -->
    
    
<!-- 

///////////// STRIP ///////////

-->
    
    <div class="strip strip-dkgray strip-pad">
      
      <div class="container">
        
        <div class="cta-wrap">
          <h2>Ready to move on to the next level?</h2>
          <a data-scroll href="#form-wrapper" class="btn btn-primary">Get Pre-Approved</a>
        </div>
      </div>
      
    </div><!-- .strip -->
    
    
<!-- 
    
///////////// STRIP /////////// 

-->
    
    <div class="strip">
    
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6 col-sm-push-6 strip-media">
            <img class="img-responsive" src="<?php bloginfo('template_directory') ?>/img/home-for-sale.jpg" />
          </div>
          <div class="col-sm-6 col-sm-pull-6 strip-content left">
            <div class="content-wrap">
              <h3>Use the funds for anything you need.</h3>
              <p>Marketing and promotion, property purchases and rehabs. Use the funds multiple times!</p>
            </div>
          </div>
        </div><!-- .row -->
      </div><!-- .container-fluid -->
      
    </div><!-- .strip -->
    
    <div class="container">
    <div class="container">
      
      <div id="form-wrapper" class="form-wrap">
        <h3>Sign up to see if you qualify.</h3>
        <p>Fill out the info below to get Pre-Approved for up to $150,000 in funding!</p>
        <?php echo do_shortcode( '[gravityform id="2" name="Flip Funding" title="false" description="false"]' ); ?>
      </div><!-- .form-wrap -->
    </div>


<?php get_footer(); ?>
