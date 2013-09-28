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
    <script type="text/javascript" src="js/forms.js"></script>
    <script type="text/javascript" src="js/FF-cash.js"></script>
    <script type="text/javascript">
		function goToByScroll(id)
		{
			$('html,body').animate({scrollTop: $("#"+id).offset().top},'slow');
		}
		$(function(){
			 $('#form').forms({
			  ownerEmail:'contact@kaleessi.fr'
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
            	<h2 class="pad-1">Comment nous trouver</h2>
                <div class="wrapper page-5-row-1">   
                    <div class="map">
                      <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.fr/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=115,+rue+rambuteau&amp;aq=&amp;sll=46.655921,4.543941&amp;sspn=1.562828,4.22699&amp;ie=UTF8&amp;hq=&amp;hnear=115+Rue+Rambuteau,+71000+Macon,+Sa%C3%B4ne-et-Loire,+Bourgogne&amp;t=m&amp;ll=46.307513,4.823771&amp;spn=0.020752,0.036478&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
                    </div>
                    <div class="extra-wrap">
                        <h6>Nos coordonn&eacute;es</h6>
                        <div class="block-3-text">
                          <strong>KALEESSI<br/>115, RUE RAMBUTEAU<br/>71000 MACON<br/>FRANCE</strong>
                        </div>
                        <div class="block-3-text first">
                        <dl>
                          <dd>T&eacute;l&eacute;phone&nbsp;:&nbsp;09 73 66 41 05</dd>
                          <dd>E-mail: &nbsp;&nbsp;&nbsp;<a href="#" class="color-12">contact@kaleessi.fr</a></dd>
				        </dl>
                        </div>
                        <h6>Nos Horaires</h6>
                        <div class="block-3-text">
                          <p>Avec ou sans rendez-vous</p>
                          <p>&nbsp;</p>
                          <?php require('include/hours.php'); ?>
				        </div>
                    </div>
                </div>
             </div>   
            <div class="grid_12 line-1"></div>
            <div class="grid_12">
            	<h2 class="top-2">Formulaire de contact</h2>
                <?php require('include/form-contact.php'); ?>
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
