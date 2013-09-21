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
    <script type="text/javascript" src="js/Century_400.font.js"></script>
    <script type="text/javascript" src="js/superfish.js"></script>
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="js/FF-cash.js"></script>
    <script type="text/javascript">
	function goToByScroll(id)
		{
			$('html,body').animate({scrollTop: $("#"+id).offset().top},'slow');
		}
	$(function(){
			$('.lightbox-image').prettyPhoto({theme:'facebook',autoplay_slideshow:false,social_tools:false,animation_speed:'normal'}).append('<span></span>').hover(function(){$(this).find('>img').stop().animate({opacity:.5})},function(){$(this).find('>img').stop().animate({opacity:1})})	  
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
            <div class="grid_8 page-2-col-1">
            	<h2 class="pad-1">Tired of Your Look?</h2>
                <div class="wrapper">
                	<img src="images/page-2-img-1.jpg" alt="" class="img-indent">
                    <div class="extra-wrap">
                    	<p class="color-8">Kertyade Fertasera Miaseras Lertyas</p>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada.</p>
<p>&nbsp;</p>
<p>Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan.</p>
                    </div>
                </div>
                <div class="wrapper">
                	<ul class="list-2">
                        <li><a href="#">Ultrices posuere cubilia Curae</a></li>
                        <li><a href="#">Suspendisse sollicitudin</a></li>
                        <li><a href="#">Ut pharetra augue nec augue</a></li>
                    </ul>
                    <ul class="list-2">    
                        <li><a href="#">Lacinia fermentum</a></li>
                        <li><a href="#">Donec in velit vel ipsum auctor</a></li>
                        <li><a href="#">Vestibulum iaculis lacinia est</a></li>
                    </ul>
                </div>
                <p>Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
            </div>
            <div class="grid_4">
                <div class="page-2-banner">
                	<div class="page-2-banner-img"><div><strong>2011</strong></div></div>
                    <div class="page-2-banner-text">
                    	<div>
                    		<strong class="col-1">New</strong><strong class="col-2"> Hairstyle</strong>
                            <p class="color-4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit raesent vestibulum.</p>
                        </div>    
                    </div>
                </div>
            </div>
            <div class="grid_12 line-1"></div>
            <div class="grid_12 page-2-row-1">
            	<h2 class="pad-2">How to Choose a New Hair Style!</h2>
                <div class="wrapper">
                	<img src="images/page-2-img-3.jpg" alt="" class="img-indent-2">
                    <div class="extra-wrap">
                    	<p class="color-5">Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis, lobo
rtis dignissim, pulvinar ac, lorem. Vestibulum sed ante.</p>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada.Morbi nunc odio, gravida at, cursus nec, luctus a, lorem.</p>
                        <a href="#" class="button">read more</a>
                    </div>
                </div>
            </div>
            <div class="grid_12 line-1"></div>
            <div class="grid_12">
            	<h2 class="pad-2">Best Masters</h2>
            </div>  
            <div class="grid_3 page-2-box">
            	<a class="lightbox-image" data-gal="prettyPhoto[1]" href="images/image-blank.png"><img src="images/page-2-img-4.jpg" alt=""></a>
                <p><a href="#" class="color-9">Julie Herzigova</a></p>
            </div>  
            <div class="grid_3 page-2-box">
            	<a class="lightbox-image" data-gal="prettyPhoto[1]" href="images/image-blank.png"><img src="images/page-2-img-5.jpg" alt=""></a>
                <p><a href="#" class="color-9">Alan Smith</a></p>
            </div>
            <div class="grid_3 page-2-box">
            	<a class="lightbox-image" data-gal="prettyPhoto[1]" href="images/image-blank.png"><img src="images/page-2-img-6.jpg" alt=""></a>
                <p><a href="#" class="color-9">Camala Haddon</a></p>
            </div>
            <div class="grid_3 page-2-box">
            	<a class="lightbox-image" data-gal="prettyPhoto[1]" href="images/image-blank.png"><img src="images/page-2-img-7.jpg" alt=""></a>
                <p><a href="#" class="color-9">Patrick Pool</a></p>
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