<!DOCTYPE html>
<html lang="en">
<head>
    <?php require('include/header.php'); ?>
    <title><?php require('include/title.php'); ?> - Description des prestations "Soin des mains"</title>
    <meta name="description" content="Kaleessi, onglerie et salon de pose d'ongles sur Mâcon. Présentations des soins des mains." />
    <?php require('include/keywords.php'); ?>
    <script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/cufon-yui.js"></script>
    <script type="text/javascript" src="js/cufon-replace.js"></script>
    <script type="text/javascript" src="js/Yellowtail_400.font.js"></script>
	<script type="text/javascript" src="js/Century_gothic_400.font.js"></script>
    <script type="text/javascript" src="js/superfish.js"></script>
    <script type="text/javascript" src="js/tms-0.3.js"></script>
	<script type="text/javascript" src="js/tms_presets.js"></script>
    <script type="text/javascript" src="js/jquery.equalheights.js"></script>
    <script type="text/javascript" src="js/forms.js"></script>
    <script type="text/javascript" src="js/FF-cash.js"></script>
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
    <!--==============================content================================-->
      <section id="content">
        <div class="container_12">
          <?php require('include/hand-beauty.php'); ?>
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
</body>
</html>
