function prikaziGrad(gradId1, gradId2, gradId3, element)
{
    document.getElementById(gradId1).style.display = element.value == "Srbin" ? 'block' : 'none';
    document.getElementById(gradId2).style.display = element.value == "Bosanac" ? 'block' : 'none';
    document.getElementById(gradId3).style.display = element.value == "Crnogorac" ? 'block' : 'none';
}


$(document).ready(function(){
$("#submit2").click(function(event) {
event.preventDefault();
   
$.ajax ({
type:"POST",
url:"novi_zahtev.php",
data:"",
cache:"false",
success:function(){
    $("#formaZahteva")[0].reset();
    alert("Podaci poslati bez ponovnog ucitavanja stranice!");  
}

});


});
});
