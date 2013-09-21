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
			  ownerEmail:'#'
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
                        <p>Nos coordonnées :</p>
                        <dl>
                            <dt>KALEESSI<br/>115, rue Rambuteau<br/>71000 MACON<br/>FRANCE</dt>
                            <dd><span>T&eacute;l&eacute;phone:</span>04 56 78 90 12</dd>
                            <dd>E-mail: &nbsp;&nbsp;&nbsp;<a href="#" class="color-12">contact@kaleessi.fr</a></dd>
                        </dl>
                        <p>&nbsp;</p>
                        <p>Nos horaires d'ouverture :</p>
                        <dl>
                            <dt>Lundi : 14H - 18H<br/>Mardi : 09H30 - 18H (non-stop)</dt>
                        </dl>
                    </div>
                </div>
             </div>   
            <div class="grid_12 line-1"></div>
            <div class="grid_12">
            	<h2 class="top-2">Formulaire de contact</h2>
                <form id="form">
                  <div class="success">Votre message a &eacute;t&eacute; correctement envoy&eacute;. Merci.<br>
                  <strong>Nous entrerons en contact avec vous le plus rapidement possible !</strong> </div>
                  <fieldset>
                    <label class="name">
                      <input type="text" value="Nom et prénom" class="fleft">
                        <span class="error error-empty">*Nom invalide.</span><span class="empty error-empty">*Ce champ est obligatoire.</span> </label>
                      <div class="clear"></div>
                    <label class="email">
                      <input type="text" value="Adresse email" class="fleft">
                        <span class="error error-empty">*Adresse email invalide.</span><span class="empty error-empty">*Ce champ est obligatoire.</span> </label>
                      <div class="clear"></div>
                    <label class="phone">
                      <input type="tel" value="Téléphone" class="fleft">
                        <span class="error error-empty">*Num&eacute;ro de t&eacute;l&eacute;phone invalide.</span><span class="empty error-empty">*Ce champ est obligatoire.</span> </label>
                      <div class="clear"></div>
                    <label class="message">
                      <textarea>Votre message</textarea>
                      <span class="error">*Message invalide (trop court).</span> <span class="empty">*Ce champ est obligatoire.</span> </label>
                      <div class="btns"><a data-type="reset" class="button" >Effacer</a><a data-type="submit" class="button" >Envoyer le message</a></div>
                  </fieldset>
                </form>
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
