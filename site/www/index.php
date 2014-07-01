<!DOCTYPE html>
<html lang="en">
<head>
    <?php require('include/header.php'); ?>
    <title><?php require('include/title.php'); ?></title>
    <meta name="description" content="Kaleessi, onglerie et salon de pose d'ongles sur Mâcon est heureux de vous accueillir dans son univers moderne et innovant où la prothésie ongulaire côtoie le plaisir et le bien-être." />
    <?php require('include/keywords.php'); ?>
    <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/cufon-yui.js"></script>
    <script type="text/javascript" src="js/cufon-replace.js"></script>
    <script type="text/javascript" src="js/Yellowtail_400.font.js"></script>
	<script type="text/javascript" src="js/Century_gothic_400.font.js"></script>
    <script type="text/javascript" src="js/superfish.min.js"></script>
    <script type="text/javascript" src="js/tms-0.3.min.js"></script>
	<script type="text/javascript" src="js/tms_presets.min.js"></script>
    <script type="text/javascript" src="js/jquery.equalheights.js"></script>
    <script type="text/javascript" src="js/forms.min.js"></script>
    <script type="text/javascript" src="js/FF-cash.min.js"></script>
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script type="text/javascript">
	$(window).load(function(){
		$('.slider')._TMS({
			prevBu:'.prev',
			nextBu:'.next',
			pagNums:false,
			duration:1100,
			easing:'easeOutQuad',
			preset:'simpleFade',
			slideshow:5000,
			waitBannerAnimation:false,
			pagination:'.pagination',
			banners:'fromLeft'
		})
	})
	function goToByScroll(id)
		{
			$('html,body').animate({scrollTop: $("#"+id).offset().top},'slow');
		}
	$(function(){
	    $('#form_newsletter').forms({
        })
    });
	</script>
	<!--[if lt IE 7]>
  		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg"border="0"alt=""/></a></div>  
 	<![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
    	<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
	<![endif]-->
</head>
<body>


<!--==============================header=================================-->
  <header id="top">
      <?php require('include/logo.php'); ?>
      <?php require('include/social.php'); ?>
      <?php require('include/menu.php'); ?>
      <div class="clear"></div>
  </header> 
<div class="max">   
    <div class="main">
    <br/> 
    <!--==============================content================================-->
      <section id="content">
          <div class="container_12">
            <?php require('include/panorama.php'); ?>
            <?php require('include/welcome.php'); ?>
            <?php require('include/misc.php'); ?>

            <div id="horaires" class="grid_4">
            	<article class="block-3 maxheight">
                    <h1 class="size30">Nos Horaires</h1>
                    <div class="block-3-text">
                        <p class="color-5">Avec ou sans rendez-vous</p>
                        <?php require('include/hours.php'); ?>
					</div>
                </article>
            </div>
            <?php require('include/gdp-intro.php'); ?>
            <?php require('include/newsletter.php'); ?>
            <?php require('include/retrieve-us.php'); ?>

            <div class="clear"></div>
          </div>
      </section> 
    <!--==============================footer=================================-->
      <?php require('include/footer.php'); ?>
    </div>
    <a class="top" onClick="goToByScroll('top'); return false;" href="#"><span>TOP</span></a>    
</div>    
<script>
	Cufon.now();
</script>		

<?php require('include/popup-coworking.php'); ?>

</body>
</html>
