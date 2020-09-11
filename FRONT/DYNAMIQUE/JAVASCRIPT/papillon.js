document.getElementById("image").style.display="none";

function produit(x, y)
    {
    var x = window.prompt("Entrez un nombre");
    var y = window.prompt("Entrez un multiplicateur");
    var resultat = parseInt(x)*parseInt(y);

     document.getElementById("p1").innerHTML= "Le produit de "+x+" x "+y+" est égal à "+resultat;      
       return resultat;   
    }
    produit()

    function afficheImg()
    {
    let image = document.getElementById("image").style.display ="block"
    }
    afficheImg()