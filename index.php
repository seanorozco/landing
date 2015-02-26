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
        
        <h1>You've got the <span class="emphasis">knowledge</span>, now get the <span class="emphasis">funding</span>.</h1>
        
      </div><!-- .container -->
    </div>

    
<!-- 
    
///////////// STRIP /////////// 
    
-->
    
    <div class="strip strip-pad">
      <div class="steps">
        <div class="container">

          <h2>Getting funding is fast and simple.</h2>

          <div class="row">
            
            <div class="col-sm-4 signup">
              <i class="fa fa-pencil fa-lg"></i>
              <h3 class="signup">Sign Up</h3>
            </div>  

            <div class="col-sm-4 preapproved">
              <i class="fa fa-check-square fa-lg"></i>
              <h3 class="preapproved">Get Pre-Approved</h3>
            </div>

            <div class="col-sm-4 getfunded">
              <i class="fa fa-dollar fa-lg"></i>
              <h3 class="getfunded">Get Funded</h3> 
            </div>

          </div><!-- .row -->
        </div><!-- .container -->
        
      </div><!-- .steps --> 
    </div><!-- .strip -->
    
    
<!-- 

///////////// STRIP /////////// 

-->
    
    <div class="strip strip-gray strip-pad">
<!--
      <div class="container">
        <h2 class="revolvingcreditlines">Get up to $150,000 in Revolving Credit Lines to Fund Your New Real Estate Business!</h2>
      </div>
-->
    </div><!-- .strip -->
    
    
<!-- 

///////////// STRIP /////////// 

-->

    <div class="strip">
    
      <div class="container-fluid">

        <div class="row">
          <div class="col-sm-6 strip-media">
            <img class="img-responsive" src="<?php bloginfo('template_directory') ?>/img/home-for-sale.jpg" />
          </div>
          <div class="col-sm-6 strip-content right">
            <h3>Get up to $150,000 to start flipping now!</h3>
            <p>If you are Pre-Approved, we guarantee funding or you don't pay a cent in fees! Use the revolving lines with interest as low as 0% for the first 12-18 months.</p>
          </div>
        </div><!-- .row -->


      </div><!-- .container-fluid -->
        
    </div><!-- .strip -->
    
    
<!-- 

///////////// STRIP ///////////

-->
    
    <div class="strip strip-dkgray strip-pad">
      
      <div class="container">
        
        <h2>A sentence convincing someone to click the button.</h2>
        <a class="btn btn-default">Get Pre-Approved</a>
        
      </div>
      
    </div><!-- .strip -->
    
    
<!-- 
    
///////////// STRIP /////////// 

-->
    
    <div class="strip">
    
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6 strip-content left">
            <h3>Use the funds for anything you need.</h3>
            <p>Utilize the new cash for Property Purchases, Renovation Expenses, Marketing &amp; Promotion... Anything your new business needs!</p>
          </div>
          <div class="col-sm-6 strip-media">
            <img class="img-responsive" src="<?php bloginfo('template_directory') ?>/img/new-home.jpg" />
          </div>
        </div><!-- .row -->
      </div><!-- .container-fluid -->
      
    </div><!-- .strip -->
    
    <div class="container">
      <?php echo do_shortcode( '[gravityform id="1" name="Flip Funding" title="false" description="false"]' ); ?>
    </div>


<?php get_footer(); ?>
