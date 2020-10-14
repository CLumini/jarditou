// 1 Calcul du nombre de jeunes, de moyens et de vieux
var exo1=document.getElementById("exo1");
exo1.addEventListener("click", clickExo1);
var ageMin = [];
var ageMax = [];
var ageMoy = [];
var userAge = 0

function clickExo1(){

while (userAge < 100) {
    var age = prompt("Veuillez entrer un âge (le compteur s'arrête à 100")
    userAge = parseInt(age)

    if (userAge < 20) {
        ageMin.push(userAge)
    }
    if (userAge > 40) {
        ageMax.push(userAge)
    }
    if (userAge >= 20 && userAge <= 40) {
        ageMoy.push(userAge)
    }
}
alert("Il y a " + ageMin.length + " personnes de moins de 20 ans, " + ageMax.length + " personnes de plus de 40 ans, "+ ageMoy.length + " personnes entre 20 et 40 ans");
}


// 2 Table de multiplication

var exo2=document.getElementById("exo2");
exo2.addEventListener("click", clickExo2);

function clickExo2(){
var N = 0;
var M = prompt("choisissez un multiplicateur");
var resultTable=[];
function tableMultiplication(M) {
    for (var i = 0; i < 10; i++) {
        N++
        var result = parseInt(N) * parseInt(M)
        var afficher = N + " x " + M + " = " + result+" "
        resultTable.push(afficher)
    }
}

tableMultiplication(M)
alert(resultTable)

}
// 3 recherche d'un prénom

var exo3=document.getElementById("exo3");
exo3.addEventListener("click", clickExo3);

function clickExo3(){

let tabPrenom = ["Audrey", "Aurélien", "Flavien", "Jérémy", "Laurent", "Melik", "Nouara", "Salem", "Samuel"]
alert("Voici un tableau: "+tabPrenom)
function recherche() {
    var prenom = prompt("Veuillez entrer un prénom à supprimer")
    let index = tabPrenom.indexOf(prenom)
    if (index == -1) {
        alert("le Prénom : '" + prenom + "' ne se trouve pas dans le tableau")
        alert("Le tableau n'a pas changé: "+tabPrenom)
    } else {
        tabPrenom.splice(parseInt(index), 1);
        tabPrenom.push("")
        alert(" Suppression accomplie ! Voici le nouveau tableau: "+tabPrenom)

    }
}

recherche()
}

//4 total d'une commande

var exo4=document.getElementById("exo4");
exo4.addEventListener("click", clickExo4);

function clickExo4(){

let pUnitaire = prompt("Saisissez le prix")
let quantité = prompt("Saisissez la quantité")
var pAPayer // Prix à payer
var remise
var fPort // frais de port non arrondis
var fPortA = Math.round(fPort * 100) / 100 // frais de port arrondis à 2 chiffres après la virgule
let total = parseInt(pUnitaire) * parseInt(quantité) // total non remisé

if (total >= 100 && total <= 200) {
    remise = total * 5 / 100;
    var tRemise = total - remise; // total remisé
}
if (total < 100) {
    remise = 0;
    tRemise = total - remise
}

if (total > 200) {
    remise = total * 10 / 100
    tRemise = total - remise
}

if (tRemise < 500) {
    fPortA = tRemise * 2 / 100
    if (fPortA < 6) {
        fPortA = 6
    }
}
if (tRemise > 500) {
    fPortA = 0
}

pAPayer = tRemise + fPortA

alert("Le total non remisé est de : " + total + "€, la remise est de " + remise + " €, les frais de port sont de " + fPortA + " € et le prix total à payer est de: " + Math.round(pAPayer * 100) / 100 + " €");
}