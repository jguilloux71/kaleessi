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
            	<h2 class="pad-4">Our Professional Staff</h2>
            </div>
            <div class="grid_12 wrapper page-4-box top-0">   
                <div class="img-indent-2">
                    <img src="images/page-4-img-1.jpg" alt="">
                    <a href="#" class="color-5">View Potfolio</a>
                </div>
                <div class="extra-wrap">
                    <p class="color-1">Hi, I'm Jessica</p>
                    <p class="it">“Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan. malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis...”</p>
                    <a href="#" class="button">read more</a>
                </div>
            </div>
            <div class="grid_12 line-1"></div>
            <div class="grid_12 wrapper page-4-box">   
                <div class="img-indent-2">
                    <img src="images/page-4-img-2.jpg" alt="">
                    <a href="#" class="color-5">View Potfolio</a>
                </div>
                <div class="extra-wrap">
                    <p class="color-1">Hi, I'm Alessandra</p>
                    <p class="it">“Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hen
drerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci...”</p>
                    <a href="#" class="button">read more</a>
                </div>
            </div>
            <div class="grid_12 line-1"></div>
            <div class="grid_12 wrapper page-4-box">   
                <div class="img-indent-2">
                    <img src="images/page-4-img-3.jpg" alt="">
                    <a href="#" class="color-5">View Potfolio</a>
                </div>
                <div class="extra-wrap">
                    <p class="color-1">Hi, I'm Patrick</p>
                    <p class="it">“Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna...”</p>
                    <a href="#" class="button">read more</a>
                </div>
            </div>
            <div class="grid_12 line-1"></div>
            <div class="grid_12 wrapper page-4-box bot-0">   
                <div class="img-indent-2">
                    <img src="images/page-4-img-4.jpg" alt="">
                    <a href="#" class="color-5">View Potfolio</a>
                </div>
                <div class="extra-wrap">
                    <p class="color-1">Hi, I'm Gloria</p>
                    <p class="it">Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.Lorem ipsum dolor sit amet, consectetuevestibulum molestie lacus...”</p>
                    <a href="#" class="button">read more</a>
                </div>
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