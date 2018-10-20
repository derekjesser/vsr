<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

<div class="footer_triangle"></div>
<div class="footerwrap">
  <div class="container footer_nav1 hidden-xs"> <a href="index">Main</a> | <a href="directions-contact-us">Directions</a> | <a href="directions-contact-us">Contact Us</a> | <a href="https://web.archive.org/web/20171010184747/https://wfa.kronostm.com/index.jsp?locale=en_US&amp;applicationName=FortisNonReqExt&amp;seq=locationDetails&amp;deviceMode=desktop&amp;location_id=37671424938" target="_blank">Join Our Team</a> </div>
  <div class="container footer_nav2 hidden-xs"> <a href="service-and-care-options">Services &amp; Care Options</a> | <a href="gallery">Gallery</a> | <a href="points-of-difference">Points of Difference</a> | <a href="amenities">Amenities</a><br/>
    <a href="life-enrichment-programs">Life Enrichment Programs</a> | <a href="privacy-policy">Privacy Policy</a> </div>
  <div class="footer_address">
    <p class="hidden-xs">Pacific | 1015 North Garrison Road, Vancouver, WA 98664 | Phone: (360) 694-7501 | Fax: (360) 694-8148</p>
    <p class="visible-xs"><span class="mobile_name">Pacific</span><br/>
      1015 North Garrison Road<br/>
      Vancouver, WA 98664<br/>
      Phone: (360) 694-7501<br/>
      Fax: (360) 694-8148</p>
  </div>
  <div class="container copyright">
    <p>&copy; 2018. All Rights Reserved.</p>
  </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
<script src="<?php echo get_template_directory(); ?>/assets/js/bootstrap.min.js"></script> 
<script src="<?php echo get_template_directory(); ?>/assets/js/jquery.bootstrap-autohidingnavbar.js"></script> 
<script>
      $("div.navbar-fixed-top").autoHidingNavbar();
</script> 
<script type="text/javascript" src="<?php echo get_template_directory(); ?>/assets/js/skrollr.min.js"></script> 
<script type="text/javascript">
if(!(/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera)){
    skrollr.init({
        forceHeight: false
    });
}
</script> 
<script type="text/javascript"> 
    $(document).ready(function() {

        //  get the device agent and conver to lover case
        var deviceAgent = navigator.userAgent.toLowerCase();


 if(deviceAgent.match(/iPhone|iPad|iPod/i)){
            $('.ipad').css('background-attachment','scroll');
        }


    }); 
</script> 
<script type="text/javascript" src="<?php echo get_template_directory(); ?>/assets/fancybox/jquery.mousewheel-3.0.2.pack.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory(); ?>/assets/fancybox/jquery.fancybox-1.3.1.js"></script>
<link href="<?php echo get_template_directory(); ?>/assets/fancybox/jquery.fancybox-1.3.1.css" rel="stylesheet">
<script type="text/javascript">

/* .fancybox:  */		

$(document).ready(function() {

	
	$("a.gallery").fancybox();

	
});
</script> 
<script type="text/javascript"> 
    $(document).ready(function() {

        //  get the device agent and conver to lover case
        var deviceAgent = navigator.userAgent.toLowerCase();


 if(deviceAgent.match(/iPhone|iPad|iPod/i)){
            $('.ipad').css('background-attachment','scroll');
        }


    }); 
</script> 

<script src="<?php echo get_template_directory(); ?>/assets/js/parallax.min.js"></script> 

<?php wp_footer(); ?>

</body>
</html>
