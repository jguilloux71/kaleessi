<form id="form">
  <div class="success">
    Votre message a &eacute;t&eacute; correctement envoy&eacute;. Merci.<br>
    <strong>Nous entrerons en contact avec vous le plus rapidement possible !</strong>
  </div>

  <fieldset>
    <label class="name">
      <input type="text" value="Nom et prénom" class="fleft" />
      <span class="error error-empty">*Nom invalide.</span>
      <span class="empty error-empty">*Ce champ est obligatoire.</span>
    </label>

    <div class="clear"></div>

    <label class="email">
      <input type="text" value="Adresse email" class="fleft" />
      <span class="error error-empty">*Adresse email invalide.</span>
      <span class="empty error-empty">*Ce champ est obligatoire.</span>
    </label>

    <div class="clear"></div>

    <label class="phone">
      <input type="tel" value="Téléphone" class="fleft">
      <span class="error error-empty">*Num&eacute;ro de t&eacute;l&eacute;phone invalide.</span>
      <span class="empty error-empty">*Ce champ est obligatoire.</span>
    </label>

    <div class="clear"></div>

    <label class="message">
      <textarea>Votre message</textarea>
      <span class="error">*Message invalide (trop court).</span>
      <span class="empty">*Ce champ est obligatoire.</span>
    </label>

    <div class="btns">
      <a data-type="reset" class="button" >Effacer</a>
      <a data-type="submit" class="button" >Envoyer le message</a>
    </div>
  </fieldset>
</form>
