var inputPass=document.getElementById("password");
var inputRePass=document.getElementById("repassword");
var btncrear=document.getElementById("btncrear");
inputPass.onchange=function(){ /*se ejecuta onchange cuando cambia ek valor del elemento*/
    var txtPass=inputPass.value; /*Para evaluar los cambios, txtPass es un nombre que nosotros creamos*/
    console.log(txtPass);
}