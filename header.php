<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package landing
 */
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
<!--    <link href="css/bootstrap.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<!--    <link href="css/style.css" rel="stylesheet">-->
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300,600,800,400' rel='stylesheet' type='text/css'>

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->  






<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header>
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1>Epic Capital Solutions, LLC</h1> 
<!--            <img class="img-responsive" src="<?php bloginfo('template_directory') ?>/img/epiccapital-logo.svg" />-->

          </div>           
          
          <div class="col-sm-6">
            <a data-scroll href="#form-wrapper" class="btn btn-primary pull-right hidden-xs">Get Pre-Approved</a>
          </div>                            
        </div>
      </div><!-- .container-fluid -->
    </header>
