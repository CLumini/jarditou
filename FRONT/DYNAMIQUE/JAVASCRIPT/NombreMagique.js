let magicNumber = Math.round(Math.random()*100);
console.log(magicNumber);

let saisieUtilisateur = document.getElementById("textBox1")
function verif()
{
  if  (saisieUtilisateur.value > magicNumber)
    {
      document.getElementById("label1").innerHTML= "Trop grand !"
    }
      else if (saisieUtilisateur.value < magicNumber)
    {
      document.getElementById("label1").innerHTML= "Trop petit"
    }
  else if (saisieUtilisateur.value = magicNumber)
    {
      let result = document.getElementById("label1").innerHTML= "Bravo, vous avez trouvé le Nombre Magique !"
      }
}