let formValid = document.getElementById("bouton_envoi");
formValid.addEventListener("click", validation);

var nom = document.getElementById("nom");
var prenom = document.getElementById("prénom");
var naissance = document.getElementById("naissance");
var codePostal = document.getElementById("codePostal");
var eMail = document.getElementById("eMail");
var feminin = document.getElementById("Féminin")
var masculin = document.getElementById("Masculin")
var sujet = document.getElementById("Sujet")
var question = document.getElementById("Question")
var check_box = document.getElementById("check_box")
var regExpL = /^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$/
var regExpM = /^[_a-z0-9-]+(.[_a-z0-9-]+)+@[a-z0-9-]+.[a-z]{2,3}$/
var regExpCP = /^[0-9]{5}$/

// J'ai souhaité faire des messages personnalisés par champs du coup, autant de var que d'erreurs

var erreurNom = document.getElementById("erreurNom")
var erreurPrenom = document.getElementById("erreurPrenom")
var erreurNaissance = document.getElementById("var erreurNaissance")
var erreurCP = document.getElementById("erreurCP")
var erreurEMail = document.getElementById("erreurEMail")
var erreurOption = document.getElementById("erreurOption")
var erreurSujet = document.getElementById("erreurSujet")
var erreurQuestion = document.getElementById("erreurQuestion")
var erreurCheck = document.getElementById("erreurCheck")



// J'ai voulu faire une fonction "modèle" histoire de ne pas répéter les conditions....RIEN N'A FONCTIONNÉ

function validation(event) {

    if (nom.validity.valueMissing) {
        event.preventDefault();
        erreurNom.innerHTML = "Vous devez renseigner votre nom !";
        erreurNom.style.color = "red";


    } else if (regExpL.test(nom.value) == false) {
        event.preventDefault();
        erreurNom.innerHTML = "Votre nom doit comporter au moins deux caractères de type 'lettre' ! ";
        erreurNom.style.color = "orange";

    } else {
        erreurNom.innerHTML = ""
    }


    if (prenom.validity.valueMissing) {
        event.preventDefault();
        erreurPrenom.innerHTML = "Vous devez renseigner votre prénom !";
        erreurPrenom.style.color = "red";


    } else if (regExpL.test(prenom.value) == false) {
        event.preventDefault();
        erreurPrenom.innerHTML = "Votre prénom doit comporter au moins deux caractères de type 'lettre' ! ";
        erreurPrenom.style.color = "orange";

    } else {
        erreurPrenom.innerHTML = ""
    }

    if (feminin.checked || masculin.checked) {
        erreurOption.innerHTML = " "
        return true

    } else {
        erreurOption.innerHTML = "il faut cocher une option !"
        erreurOption.style.color = "red"

    }

    if (naissance.validity.valueMissing) {
        event.preventDefault();
        erreurNaissance.innerHTML = "Vous devez renseigner votre date de naissance !";
        erreurNaissance.style.color = "red";

    } else {
        erreurNaissance.innerHTML = ""
    }

    if (codePostal.validity.valueMissing) {
        event.preventDefault();
        erreurCP.innerHTML = "Vous devez renseigner votre Code postal !";
        erreurCP.style.color = "red"


    } else if (regExpCP.test(codePostal.value) == false) {
        event.preventDefault();
        erreurCP.innerHTML = "Votre code postal doit comporter 5 chiffres ! ";
        erreurCP.style.color = "orange";

    } else {
        erreurCP.innerHTML = ""
    }

    if (eMail.validity.valueMissing) {
        event.preventDefault();
        erreurEMail.innerHTML = "Vous devez renseigner votre Mail !";
        erreurEMail.style.color = "red"


    } else if (regExpM.test(eMail.value) == false) {
        event.preventDefault();
        erreurEMail.innerHTML = "Votre mail doit comporter au moins deux caractères de type 'lettre' ainsi que le sigle @ ";
        erreurEMail.style.color = "orange";

    } else {
        erreurEMail.innerHTML = ""
    }

    if (sujet.selectedIndex == 0) {
        event.preventDefault();
        erreurSujet.innerHTML = "Veuillez sélectionner un sujet !"
        erreurSujet.style.color = "red"
        return false
    } else {
        erreurSujet.innerHTML = ""
    }

    if (question.validity.valueMissing) {
        event.preventDefault();
        erreurQuestion.innerHTML = " Vous devez remplir le formulaire !"
        erreurQuestion.style.color = "red"
    }

    if (check_box.checked) {
        return true
    } else {
        erreurCheck.innerHTML = "Veuillez cocher la case ! "
        erreurCheck.style.color = "red"
    }

    return true;
}