/*changement de style*/

function setActiveStyleSheet(title) {
  var i, a, main;
  for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
    if(a.getAttribute("rel").indexOf("style") != -1 && a.getAttribute("title")) {
      a.disabled = true;
      if(a.getAttribute("title") == title) a.disabled = false;
    }
  }
}

function getActiveStyleSheet() {
  var i, a;
  for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
    if(a.getAttribute("rel").indexOf("style") != -1 && a.getAttribute("title") && !a.disabled) return a.getAttribute("title");
  }
  return null;
}

function getPreferredStyleSheet() {
  var i, a;
  for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
    if(a.getAttribute("rel").indexOf("style") != -1
       && a.getAttribute("rel").indexOf("alt") == -1
       && a.getAttribute("title")
       ) return a.getAttribute("title");
  }
  return null;
}

function createCookie(name,value,days) {
  if (days) {
    var date = new Date();
    date.setTime(date.getTime()+(days*24*60*60*1000));
    var expires = "; expires="+date.toGMTString();
  }
  else expires = "";
  document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name) {
  var nameEQ = name + "=";
  var ca = document.cookie.split(';');
  for(var i=0;i < ca.length;i++) {
    var c = ca[i];
    while (c.charAt(0)==' ') c = c.substring(1,c.length);
    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
  }
  return null;
}

var cookie = readCookie("style");
var title = cookie ? cookie : getPreferredStyleSheet();
setActiveStyleSheet(title);

window.onload = function(e) {
  var cookie = readCookie("style");
  var title = cookie ? cookie : getPreferredStyleSheet();
  setActiveStyleSheet(title);
}

window.onunload = function(e) {
  var title = getActiveStyleSheet();
  createCookie("style", title, 365);
}

//Pour les avis
const CONSIGNES_IMPRESSION = "Donnez vos impressions sur le site";

// Chargement de la page HTML
window.onload = loadJS;

// Fonction Wrapper de addEventListener et attachEvent
function addEvent(element, event, func) {
  if (element.addEventListener) {
    // Si notre ÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â©lÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â©ment possède la méthode addEventListener()
    // Mozilla, Chrome, Safari, Opera,...
    element.addEventListener(event, func, false);
  } else {
    // Si notre ÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â©lÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â©ment ne possède pas la méthode addEventListener()
    // Internet Explorer
    element.attachEvent("on" + event, func);
  }
}

// Surligne ou annule le surlignement d'un champ
function surligne(champ, erreur) {
  if(erreur) {
    champ.style.backgroundColor = "#fba";
  } else {
    champ.style.backgroundColor = "";
  }
}

function blurNom(event) {
  return verifNom(event.target);
}

// Vérification de données d'un champ de type nom
function verifNom(champ) {
  var erreur = false;

  if(champ.value.length < 3 || champ.value.length > 12) {
    erreur = true;
  }

  surligne(champ, erreur);
  return !erreur;
}

function focusImpression(event) {
  var impression = document.getElementById("impression");

  if (impression.value == CONSIGNES_IMPRESSION) {
    impression.value = "";
  }
}

function blurImpression(event) {
  return verifImpression();
}

// Vérification de données de la zone de texte impression
function verifImpression() {
  var impression = document.getElementById("impression");
  var erreur = false;

  if(impression.value.length < 3 || impression.value.length > 150 || impression.value == CONSIGNES_IMPRESSION) {
    erreur = true;
  }

  if (impression.value == "") {
    impression.value = CONSIGNES_IMPRESSION;
  }

  surligne(impression, erreur);
  return !erreur;
}

// Efface le champ impression
function effacerForm(event) {
  var impression = document.getElementById("impression");

  impression.value = CONSIGNES_IMPRESSION;

  verifImpression();
}

// Vérification de l'ensemble des données du formulaire
function verifForm(event) {
  var prenom = document.getElementById("prenom");
  var nom = document.getElementById("nom");
  var impression = document.getElementById("impression");
  var message = document.getElementById("message");

  var prenomOk = verifNom(prenom);
  var nomOk = verifNom(nom);
  var impressionOk = verifImpression(impression);

  if(prenomOk && nomOk && impressionOk) {
    message.innerHTML = "Message en cours d'envoi";
    return true;
  } else {
    // On empêche  l'action par défaut du formulaire
    event.preventDefault();
    message.innerHTML = "Veuillez remplir correctement tous les champs";
    return false;
  }
}

function loadJS() {
  var prenom = document.getElementById("prenom");
  var nom = document.getElementById("nom");
  var impression = document.getElementById("impression");
  var effacer = document.getElementById("effacer");
  var form = document.getElementById("form");

  // On affecte le texte de consignes d'impression par défaut
  impression.value = CONSIGNES_IMPRESSION;

  addEvent(prenom, "blur", blurNom);
  addEvent(nom, "blur", blurNom);
  addEvent(impression, "focus", focusImpression);
  addEvent(impression, "blur", blurImpression);
  addEvent(effacer, "click", effacerForm);
  addEvent(form, "submit", verifForm);
}