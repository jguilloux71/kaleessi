<!-- Add content to the popup -->
<div id="basic" class="well" style="max-width:44em;">
    <h4>Annonce importante</h4>
    <br/>
    <h2>Commencez votre activite en partageant mon salon !</h2>
    <br/>
    <p>Kaleessi propose un concept dans l'air du temps, le <strong>co-working</strong>.</p>
    <br/>
    <p>Afin de pouvoir développer votre activité de bien-être ou de beauté, <strong>je mets à votre disposition un espace dans mon propre salon</strong>, avec les avantages suivants :</p>
    <br/>
    <ul class="list-1">
        <li><a href="#">fini le travail en solitaire, plus de convivialité et d'échanges</a></li>
        <li><a href="#">vous faire connaitre plus rapidement avec une boutique déjà existante</a></li>
        <li><a href="#">moins de frais locatif</a></li>
        <li><a href="#">vous arrivez, vous avez déjà tout : connexion internet, téléphone, eau, EDF, ...</a></li>
    </ul>
    <br/>
    <p>Si cela vous interesse, n'hésitez pas à me <a href="contact.php">contacter</a>.</p>
    <br/>
    <button class="basic_close button-1">Fermer</button>
    <a class="button-1" href="contact.php#contact">Contacter</a>
</div>

<!-- Include jQuery Popup Overlay -->
<script src="js/jquery.popupoverlay.js"></script>

<script>
    $(document).ready (function() {
        // Initialize the plugin
        $('#basic').popup(
            {
                autoopen: true,
            }
        );
    });
</script>
