<!DOCTYPE html>
<html lang="en">
<head>
    <?php require('include/header.php'); ?>
    <title><?php require('include/title.php'); ?> - Résiliation newsletter</title>
    <meta name="description" content="Kaleessi, onglerie et salon de pose d'ongles sur Mâcon."/>
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
		function goToByScroll(id)
		{
			$('html,body').animate({scrollTop: $("#"+id).offset().top},'slow');
		}
		$(function(){
			 $('#form_resiliation').forms({
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
      <?php require('include/social.php'); ?>
      <?php require('include/menu.php'); ?>
      <div class="clear"></div>
  </header> 
<div class="max">   
    <div class="main">  
    <!--==============================content================================-->
      <section id="content">
          <div class="container_12">
            <div class="grid_12">
            	<h2 class="top-2">Formulaire de resiliation pour la lettre d'information Kaleessi</h2>
                <?php require('include/form-resiliation.php'); ?>
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
