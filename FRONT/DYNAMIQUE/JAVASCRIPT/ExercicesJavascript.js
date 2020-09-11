/* Exercices "Développer avec Javascript" (J'ai utilisé scratchJs su chrome)
partie 5 "afficher du texte" */
var nom ;
var prenom ;
var sexe ;

nom = window.prompt("quel est votre nom?");
prenom = window.prompt("Quel est votre prenom?");
sexe = window.confirm("êtes-vous un homme ?") ==true;
window.alert("Bonjour Monsieur " +nom + prenom + " bienvenue sur notre site"); 

/*Exercice partie 6 "les opérateurs"*/
var ch = "Afficher ceci est une chaîne de caractère : ";
var a = 100;
var b = 100;
var c = 1.00;
var d = true;


alert(ch+= a);
alert(b= b--);
alert(c+= a);
alert(d!= d);

/* Exercices Partie 7 "Les conditions"
no1 */
var a = window.prompt("Choisissez un nombre: ");
var n= a%2

if (n==0) 
{
  console.log("Ce nombre est pair!");
}

else
{
  console.log("Ce nombre est impair!");
}

/*no2*/
var aN = window.prompt("entrez votre année de naissance");
var aA= 2020;
var age= aA-aN;

window.alert("votre âge est: " +age+" ans");

if(age<18)
  {
    window.alert("vous êtes mineur");
  }
else
  {
    window.alert("vous êtes majeur");
  }
  
  /*no3, c'est un cauchemar!!! je rééssaierai plus tard T_T*/

  /*Partie 8 "Les boucles"
  no1 voir fichier html "les boucles"
  no2*/
  
var result;
var N= window.prompt("Entrez un nombre");
var n=N;

for(n= N ; n >0; n--)
  { 
    result= n-1;
    console.log("les entiers inférieurs à "+n+" sont: "+result);
  }

  /*No3*/

  var N =4
  var X =5
  var r = N+X
  while(N!=0)
    {
  var N = window.prompt("Entrez un entier");
  var X = window.prompt("Entrez un autre entier");
  var r = parseInt(N) + parseInt(X);
      console.log(N+"+"+X+"="+r);
      console.log("La moyenne est :"+r/2);
  
    }

    /*No4*/
    
var resultat;
var X = window.prompt(" Entrez un Entier");
var N = window.prompt("Entrez un multiple");


while(X !=0 )
{
  var resultat=X*N;
  
  console.log(X+"x"+N+"="+resultat);
  X--
}

  /*Partie 9 Les fonctions
  No 1 
  Papillon de l'enfer sur le fichier papillon.js
  No2
  RIEN COMPRIS*/

  /*Partie 10: Les tableaux
  No1*/

  
let tableau = []
let n

function addTableau(n)
{
  for(n = null; n < 5; n++)
  {
  let n = prompt("Saisissez les valeurs du tableau")
  tableau.push(n)
    }
}
 addTableau(n)
console.log(tableau)

/*No2 a decidé de ne plus fonctionner....

var nombrePoste ;
var poste ;
function getInteger()
{
  let e = prompt ("saisissez un entier");
  console.log (parseInt(e));
}
getInteger();

function InitTab()
{
  const tab = prompt("Veuillez entrer le nombre de postes souhaité");
  nombrePoste = tab;
  const tableau =[];
  tableau.length = tab;
}
InitTab();

function SaisieTab()
{
  for(let i =0 ; i< nombrePoste ; i++)
    {
  poste = prompt("veuillez saisir les postes du tableau");
  tableau.push(poste);
		}
  }
SaisieTab();

function AfficheTab()
{
  console.log(tableau);
}
AfficheTab();

function RechercheTab()
{
let n = prompt("Saisissez l'index souhaité");
console.log(tableau[n]);
}

RechercheTab()

function InfoTab()
{
  for (let i = 0; i< tableau.length; i++)
    {
     Math.max(tableau)
    
    }
}

Partie 13 : Les objets natifs
Ecrivez un programme permettant de saisir différentes valeurs numérique (avec l'instruction window.prompt), ces valeurs seront rangées dans un tableau.
La saisie s'arrête quand l'utilisateur entre la valeur 0.
A la fin de la saisie, votre programme doit afficher le nombre de valeurs saisies, la somme et la moyenne.*/

var entier = 3;
let tableau = [];

while (entier !=0 )
{
 	entier = window.prompt("Entrez un entier")
  tableau.push(entier)

}
  console.log("le nombre de valeur(s) saisie(s) est :"+ tableau.length);

var sum = 0;

for (let i = 0; i< tableau.length; i++)
  {
    sum += parseInt(tableau[i])
  }

console.log ("la somme des valeurs saisies est : "+ sum);

let moy = sum / tableau.length;

console.log ("la moyenne des valeur(s) saisie(s) est : "+ moy);

/*Partie 15 : Les Evènements
fichiers Evenement html/js
Nombre Magique Fichiers NombreMagique html/js
Partie 16 : Les formulaires*/


