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
    <script type="text/javascript" src="js/FF-cash.js"></script>
    <script type="text/javascript">
	function goToByScroll(id)
		{
			$('html,body').animate({scrollTop: $("#"+id).offset().top},'slow');
		}
	$(function(){
		$('.hover-caption').hover(
			function(){$(this).parent().find('.caption').stop().animate({bottom:0})},
			function(){$(this).parent().find('.caption').stop().animate({bottom:-50})}
		)
	})
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
            <div id="coffrets" class="grid_12 page-3-row-1">
            	<h2 class="pad-3">Coffrets - Fetes de fin d'annees</h2>
                <p class="color-5">Pour votre information, tous les coffrets ci-dessous peuvent être modulés à votre guise : couleurs de vernis, type de limes, couleurs de bracelets, formes de pochoirs, ...</p>
            </div>
            <div class="grid_3">
                <figure class="page-3-box">
                    <a href="images/kaleessi/coffrets/big/102_3619.jpg" class="hover-caption">
                        <img src="images/kaleessi/coffrets/small/102_3619.jpg" alt="" width="220" />
                        <div class="caption">12,90 - lime, vernis, pochoirs</div>
                    </a>
                </figure>    
            </div>
            <div class="grid_3">
                <figure class="page-3-box">
                    <a href="images/kaleessi/coffrets/big/102_3617.jpg" class="hover-caption">
                        <img src="images/kaleessi/coffrets/small/102_3617.jpg" alt="" width="220" />
                        <div class="caption">17,90 - lime, vernis, bracelet, pochoirs</div>
                    </a>
                </figure>    
            </div>
            <div class="grid_3">
                <figure class="page-3-box">
                    <a href="images/kaleessi/coffrets/big/102_3624.jpg" class="hover-caption">
                        <img src="images/kaleessi/coffrets/small/102_3624.jpg" alt="" width="220" />
                        <div class="caption">29,90 - huile corps, effervescent bain</div>
                    </a>
                </figure>    
            </div>
            <div class="grid_3">
                <figure class="page-3-box">
                    <a href="images/kaleessi/coffrets/big/102_3625.jpg" class="hover-caption">
                        <img src="images/kaleessi/coffrets/small/102_3625.jpg" alt="" width="220" />
                        <div class="caption">30,90 - huile massage, "cupcakes" bain</div>
                    </a>
                </figure>    
            </div>
            <div class="grid_3">
                <figure class="page-3-box">
                    <a href="images/kaleessi/coffrets/big/102_3623.jpg" class="hover-caption">
                        <img src="images/kaleessi/coffrets/small/102_3623.jpg" alt="" width="220" />
                        <div class="caption">34,90 - bougie massage, "cupcake" bain</div>
                    </a>
                </figure>    
            </div>
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
