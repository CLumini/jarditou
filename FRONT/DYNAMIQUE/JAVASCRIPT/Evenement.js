let controle = document.getElementById("submit")
controle.onclick = function saisie(text) 
{
 text = document.getElementById("text")
 window.alert("vous avez saisi : " + text.value);
 }
