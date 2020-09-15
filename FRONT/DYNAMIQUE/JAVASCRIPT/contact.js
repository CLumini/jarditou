let formValid = document.getElementById("bouton_envoi");
formValid.addEventListener("click", validation);
var nom = document.getElementById("nom");
var prenom = document.getElementById("prenom");
var naissance = document.getElementById("naissance");
var codePostal = document.getElementById("codePostal");
var eMail = document.getElementById("eMail");
var regExpL= /^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$/
var erreur = document.getElementsByTagName("span")


function validation(event) {
    if (nom.validity.valueMissing) {
        event.preventDefault();
        alert("Vous devez renseigner le nom de la société !");
        return 

    } else if (validite.test(societe.value) == false) {
        event.preventDefault();
        alert("Le nom de la Société doit comporter au moins un caractère de type 'lettre' ! ");
        return 
    }

    if (persoContact.validity.valueMissing) {
        event.preventDefault();
        alert("Vous devez renseigner le nom de la Personne à contacter !");
        return 
    } else if (validite.test(persoContact.value) == false) {
        event.preventDefault();
        alert("Le nom de la personne à contacter doit comporter au moins un caractère de type 'lettre' ! ");
        return 
    }
    if (codePostal.validity.valueMissing) {
        event.preventDefault();
        alert("Vous devez renseigner le Code postal !");
        return 

    } else if (validite2.test(codePostal.value) == false) {
        event.preventDefault();
        alert("Le Code postal ne peut contenir que des chiffres !");
        return 
    }
    if (ville.validity.valueMissing) {
        event.preventDefault();
        alert("Vous devez renseigner le nom de la ville !");
        return 

    } else if (validite.test(ville.value) == false) {
        event.preventDefault();
        alert("Le nom de la ville doit comporter au moins un caractère de type 'lettre' ! ");
        return 
    }
    if (eMail.validity.valueMissing) {
        event.preventDefault();
        alert("Vous devez renseigner votre Mail !");
        return 

    } else if (validite3.test(eMail.value) == false) {
        event.preventDefault();
        alert("Votre mail doit comporter au moins un caractère de type 'lettre' ainsi que le sigle @ ");
        return 
    }
}