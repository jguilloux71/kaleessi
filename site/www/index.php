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
                     <li><img src="images/slider-1.jpg" alt=""><div class="banner slider-text"><strong>Creative Make Up</strong></div></li>
                     <li><img src="images/slider-2.jpg" alt=""><div class="banner slider-text"><strong>Creative Hair Cuts</strong></div><strong></strong></li>
                     <li><img src="images/slider-3.jpg" alt=""><div class="banner slider-text"><strong>Henna Body Art</strong></div></li>
                     <li><img src="images/slider-4.jpg" alt=""><div class="banner slider-text"><strong>Skin Care</strong></div></li>
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
            <div class="grid_8 block-1">
            	<article class="block-1-content">
                	<h3>Bienvenue !</h3>
                    <p class="color-1">New styles in hair cuts, hair color, make up services.</p>
                    <p class="color-2">Architecto beatae naseaeraciat kuiase undeosler miasosac usa ntuedearsteked icexplic
abo nemo enim ipsam lertasevol uptatemia voluptas sit. Aspernatur aut odit aut fugitedera
quia consequuntur magni dolores eosqui ratione voluptatem. Fequi nesciunt neque porro 
quisquam estqui dolorem ipsumquia dolor sitamet.</p>
                </article>
            </div>
            <div class="grid_4 block-2">
            	<article class="block-2-content">
            		<h4>Promotion</h4>
                    <p class="color-3">15.12.2011 Lertasera Miaseras</p>
                    <p class="color-4">unde omasler miase lerosac cntiureuede earsteked icta su expline enim ipsam
ertase volupta quia voluptasit.</p>
					<a href="#" class="button-1">En savoir plus</a>
				</article>
            </div>
            <div class="grid_4">
            	<article class="block-3 maxheight">
                    <h5>Nos Horaires</h5>
                    <div class="block-3-text first">
                        <p class="color-5">Creative Hair Cuts</p>
                        <a href="#" class="color-6">Oluptatemquia volups sitsptur tosedera
    it autfugise consequuntur.</a>
					</div>
                    <div class="block-3-text">
                        <p class="color-5">Permanent Make Up</p>
                        <a href="#" class="color-6">Nasagni doloresoui ratione volupta nera
em sequiunt, neque porro.</a>
					</div>
                    <div class="block-3-text">
                        <p class="color-5">Facials</p>
                        <a href="#" class="color-7">Kertyas foloresqui ratione lerta
em sequi nescique porro quisq uameras 
estqui dolorem ipsumquia.</a>
					</div>
                </article>    
            </div>
            <div class="grid_5">
            	<article class="block-4 maxheight">
            		<h5>Graine de Plaisir</h5>
                    <img src="images/page-1-img-1.jpg" alt="">
                    <p class="color-8">Kertyade Fertasera Miaseras Lertyas</p>
                    <p>Malerosac cusa ntium reuede eareicta lertyasera
su explicabonemo enim ipsam lertase volupta lertas
fugised quia consequ lertyuntures.</p>
					<a href="#" class="button">En savoir plus</a>
           		</article>
            </div>
            <div class="grid_3">
            	<article class="block-5">
                    <h5>Retrouvez-nous</h5>
                    <ul class="list-1">
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                    </ul>
                </article>    
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
