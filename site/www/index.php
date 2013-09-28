<!DOCTYPE html>
<html lang="en">
<head>
    <?php require('include/header.php'); ?>
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
      <?php require('include/menu.php'); ?>
      <div class="clear"></div>
  </header> 
<div class="max">   
    <div class="main">  
    <!--==============================content================================-->
      <section id="content">
          <div class="container_12">
            <div class="grid_12">
                <div class="slider">
                  <ul class="items">
                     <li><img src="images/slider-1.jpg" alt=""><div class="banner slider-text"><strong>Vernis permanant</strong></div></li>
                     <li><img src="images/slider-2.jpg" alt=""><div class="banner slider-text"><strong>French manucure</strong></div><strong></strong></li>
                     <li><img src="images/slider-3.jpg" alt=""><div class="banner slider-text"><strong>Nail art</strong></div></li>
                     <li><img src="images/slider-4.jpg" alt=""><div class="banner slider-text"><strong>Graine de plaisir</strong></div></li>
                  </ul>
                  <div class="pagination">
                      <ul>
                        <li><a href="#"><img src="images/slider-1-small.jpg" alt=""></a></li>
                        <li><a href="#"><img src="images/slider-2-small.jpg" alt=""></a></li>
                        <li><a href="#"><img src="images/slider-3-small.jpg" alt=""></a></li>
                        <li><a href="#"><img src="images/slider-4-small.jpg" alt=""></a></li>
                      </ul>
                  </div>  
                </div>
            </div>

            <?php require('include/welcome.php'); ?>
            <?php require('include/misc.php'); ?>

            <div class="grid_4">
            	<article class="block-3 maxheight">
                    <h5>Nos Horaires</h5>
                    <div class="block-3-text">
                        <p class="color-5">Avec ou sans rendez-vous</p>
                        <?php require('include/hours.php'); ?>
					</div>
                </article>    
            </div>
            <div class="grid_5">
            	<article class="block-4 maxheight">
					<a href="saloon.php#gdp"><img src="images/graine-de-plaisir/logo-graine-de-plaisir-full.png" alt="Graine de Plaisir"></a>
                    <div class="block-4-text">
                      <p class="color-5">Kertyade Fertasera Miaseras Lertyas</p>
                      <p>Malerosac cusa ntium reuede eareicta lertyasera
su explicabonemo enim ipsam lertase volupta lertas
fugised quia consequ lertyuntures.</p>
					  <a href="saloon.php#gdp" class="button">En savoir plus</a>
                    </div>
           		</article>
            </div>

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
</body>
</html>
