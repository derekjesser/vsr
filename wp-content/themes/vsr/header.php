<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/banner-styles.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/iconochive.css" />
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0, maximum-scale=1">
<title><?php bloginfo("name"); ?> <?php wp_title('&bull;'); ?></title> 

<meta name="description" content=""/>
<meta name="keywords" content=""/>

<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon.ico"/>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.css" rel="stylesheet">
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/modernizr-custom.js"></script>
<script src="http://use.typekit.net/wyt7gwu.js"></script>
<script>try{Typekit.load();}catch(e){}</script>

<style type="text/css">
.main_partnerwrap {
	background-image: none;
}
.partner_mobile {
	background: #f7f5f5 url(/) no-repeat left bottom;
	-moz-background-size: cover;
	-o-background-size: cover;
	-webkit-background-size: cover;
	background-size: cover;
}
 @media (min-width: 1200px) {
.main_partnerwrap {
	background: #f7f5f5 url(/) no-repeat center top;
	-moz-background-size: cover;
	-o-background-size: cover;
	-webkit-background-size: cover;
	background-size: cover;
}
.partner_mobile {
	background-image: none;
	background-color:transparent;
}	 
 }
</style>

<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<!-- Fixed navbar --> 
<div class="navbar navbar-default" role="navigation">
  <div class="masthead">
    <div class="mast_container">

		<div class="grid-x grid-padding-x">
			<div class="large-4 medium-6 small-12 cell">
				<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/vsr-logo-large.png" alt=""></a>
			</div>

			<div class="large-8 medium-6 small-12 cell">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>


				<div class="top-button-container">
					<div class="mast-directions hidden-xs hidden-sm">
					<!--div class="col-xs-5 mast-directions hidden-xs hidden-sm"-->
					<a href="directions-contact-us">Contact Us</a>
					</div>

					<div class="mast-directions hidden-xs hidden-sm">
					<!--div class="col-xs-5 mast-directions hidden-xs hidden-sm"-->
					<a href="#" target="_blank">Join Our Team</a>
					</div>

					<div class="mast-facebook hidden-xs hidden-sm">
					<a href="#" target="_blank">Facebook</a>
					</div>
				</div>

				<div class="nav_container">   
				<!-- Fixed navbar -->
					<div class="navbar-collapse collapse">
						<?php grav_menu('main'); ?>
					</div>
				<!--/.nav-collapse --> 
				</div>
		</div>

  </div>
  <!-- end .masthead --> 
</div>
</div>
<!-- end .navbar --> 