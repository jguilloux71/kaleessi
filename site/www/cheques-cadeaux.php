<!DOCTYPE html>
<html lang="en">
<head>
    <?php require('include/header.php'); ?>
    <title><?php require('include/title.php'); ?> - Chèques cadeaux</title>
    <meta name="description" content="Kaleessi, onglerie et salon de pose d'ongles sur Mâcon, vous présente ses chèques cadeaux à acheter en ligne et valable sur tout le salon !" />
    <?php require('include/keywords.php'); ?>
    <script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/cufon-yui.js"></script>
    <script type="text/javascript" src="js/cufon-replace.js"></script>
    <script type="text/javascript" src="js/Yellowtail_400.font.js"></script>
	<script type="text/javascript" src="js/Century_gothic_400.font.js"></script>
    <script type="text/javascript" src="js/superfish.js"></script>
    <script type="text/javascript" src="js/FF-cash.js"></script>
    <script type="text/javascript" src="js/popup.js"></script>
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
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
      <?php require('include/social.php'); ?>
      <?php require('include/menu.php'); ?>
      <div class="clear"></div>
  </header> 
<div class="max">   
    <div class="main">  
    <!--==============================content================================-->
      <section id="content">
        <div class="container_12">
          <!-- First container -->
          <div class="grid_12 page-3-row-1">
          	<h2 class="pad-3">Achetez en ligne votre cheque cadeau a offrir</h2>
            <p class="color-5">Vous voulez faire un cadeau et faire vraiment plaisir ?</p>
            <p>Offrez des chèques cadeaux à vos proches utilisables <strong>uniquement dans le salon Kalesssi à Mâcon</strong>.</p>
            <p>Le chèque cadeau est valable sur toutes les <a class="color-6" href="prices.php">prestations</a> et sur tous les cosmétiques.</p>
            <p>Anniversaire, Crémaillère, Saint Valentin, Fête des Pères, Fêtes des Mères, Noël, Saint-Sylvestre, ...</p>

            <br/><br/>
            <p class="color-5">Comment payer en ligne le chèque cadeau ?</p>
            <p><strong>Pour acheter un chèque cadeau Kaleessi, vous n’avez pas besoin d’avoir un compte PayPal</strong>.</p>
            <p><strong>Vous pouvez payer avec votre carte bleue</strong>.</p>
            <p>Et pour ceux qui ont un compte Paypal, cette solution de paiement est bien entendu acceptée.</p>

            <br/><br/>
            <p class="color-5">Simple, rapide et sécurisé : achetez et offrez un chèque cadeau en 4 clics seulement !</p>
            <div class="wrapper">
              <ul class="list-2">
                <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cliquez sur le bouton ci-dessous : <strong>Offrir un chèque cadeau</strong></li>
                <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Remplissez le formulaire qui s'affiche devant vous et choisissez le montant du chèque cadeau</li>
                <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Payez par carte bancaire ou par PayPal le chèque cadeau</li>
                <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Envoyez le chèque cadeau au bénéficiaire par email ou imprimer-le !</li>
              </ul>
            </div>
          </div>
          <!-- End of first container -->

          <!-- Second container -->
          <div class="grid_12 page-3-row-1">
            <br/><br/>
            <div class="grid_3">
              <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="Q5CM7ZV7YDBAC">
                <input type="hidden" name="business" value="payment@kaleessi.fr">
                <input type="hidden" name="no_note" value="0">
                <input type="hidden" name="currency_code" value="EUR">
                <input type="hidden" name="country" value="FR">
                <input type="hidden" name="min_denom" value="5.00">
                <input type="hidden" name="max_denom" value="200.00">
                <input type="hidden" name="style_color" value="RED">
                <input type="hidden" name="shopping_url" value="le salon Kaleessi a Macon">
                <input type="image" name="submit" border="0" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_giftCC_LG.gif" alt="PayPal - The safer, easier way to pay online">
                <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" >
              </form>
            </div>
            <div class="grid_6">
              <a href="#" class="color-6" onclick="open_gift_certificate_conditions();">Conditions d'utilisation du chèque cadeau dans le salon Kaleessi</a>
            </div>
          </div>
          <!-- End of second container -->
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
