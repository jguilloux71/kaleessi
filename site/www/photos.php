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
            <div class="grid_12 page-3-row-1">
            	<h2 class="pad-3">Photos</h2>
            </div>
            <div class="grid_3">
                <figure class="page-3-box">
                    <a href="#" class="hover-caption">
                        <img src="images/kaleessi/kaleessi-main-vernis.jpg" alt="" width="300" />
                        <div class="caption">Nail art</div>
                    </a>
                </figure>    
            </div>
            <div class="grid_3">
                <figure class="page-3-box">
                    <a href="#" class="hover-caption">
                        <img src="images/kaleessi/creation/vernis-permanent-1.jpg" alt="" width="320" />
                        <div class="caption">Vernis permanent</div>
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
