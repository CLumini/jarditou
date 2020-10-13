let formValid = document.getElementById('bouton_envoi');
formValid.addEventListener("click", validation);

let categorie = document.getElementsByName('categorie');
let reference = document.getElementsByName('reference');
let libelle = document.getElementsByName('libelle');
let description = document.getElementsByName('description');
let prix = document.getElementsByName('prix');
let stock = document.getElementsByName('stock');
let couleur = document.getElementById('couleur');
let date_ajout = document.getElementsByName('date_ajout');
let bloqueOui = document.getElementsById('oui');
let bloqueNon = document.getElementsById('non');
let erreur = document.getElementById('erreur')
let erreurBloque = document.getElementById('erreurBloque');


function validation(event) {
	if (couleur.valueMissing) {
		event.preventDefault();
		erreur.innerHTML = "vous devez renseigner tous les champs.";
		erreur.style.color = 'red';
	}
	if (bloqueOui.checked || bloqueNon.checked) {
		erreurBloque.innerHTML = "";
		return true;
	} else {
		erreurBloque.innerHTML = "vous devez cocher une option.";
	}
}