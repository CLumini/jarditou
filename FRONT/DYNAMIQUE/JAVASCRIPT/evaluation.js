// 1 Calcul du nombre de jeunes, de moyens et de vieux

let ageMin = [];
let ageMax = [];
let ageMoy = [];
let userAge = 0

while (userAge < 100) {
    let age = prompt("Veuillez entrer un âge (le compteur s'arrête à 100")
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
console.log("Il y a " + ageMin.length + " personnes de moins de 20 ans, " + ageMax.length + " personnes de plus de 40 ans, "+ ageMoy.length + " personnes entre 20 et 40 ans")

// 2 Table de multiplication

let N = 0
let M = 0

function tableMultiplication(M) {
    for (var i = 0; i < 10; i++) {
        N++
        var result = parseInt(N) * parseInt(M)
        console.log(N + "x" + M + "=" + result)
    }
}

tableMultiplication(7)


// 3 recherche d'un prénom

let tabPrenom = ["Audrey", "Aurélien", "Flavien", "Jérémy", "Laurent", "Melik", "Nouara", "Salem", "Samuel"]

function recherche() {
    var prenom = prompt("Veuillez entrer un prénom")
    let index = tabPrenom.indexOf(prenom)
    if (index == -1) {
        alert("le Prénom : '" + prenom + "' ne se trouve pas dans le tableau")
        console.log(tabPrenom)
    } else {
        tabPrenom.splice(parseInt(index), 1);
        tabPrenom.push("")
        console.log(tabPrenom)

    }
}

recherche()

//4 total d'une commande

let pUnitaire = prompt("saisissez le prix")
let quantité = prompt("saisissez la quantité")
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

console.log("le total non remisé est de : " + total + "€ ");
console.log("la remise est de " + remise + " €");
console.log("les frais de port sont de " + fPortA + " €");
console.log("le prix total à payer est de: " + Math.round(pAPayer * 100) / 100 + " €");