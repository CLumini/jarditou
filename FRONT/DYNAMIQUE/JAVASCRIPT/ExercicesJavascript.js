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