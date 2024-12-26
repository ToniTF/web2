var inputPass = document.getElementById("password");
var inputRePass = document.getElementById("repassword");
var btncrear = document.getElementById("btncrear");
//inputPass.onchange=function(){ se ejecuta onchange cuando cambia el valor del elemento, se lanza cuando pierde el foco, por ejemplo al cambiar el cursor
//var txtPass = inputPass.value; Para evaluar los cambios, txtPass es un nombre que nosotros creamos
//console.log(txtPass); /*Se utiliza para imprimir mensajes en la consola web del navegador. Es una herramienta esencial para los desarrolladores, ya que permite depurar y seguir el comportamiento del código de manera efectiva
//inputPass.onkeyup=function(){ /*se ejecuta onkeyup cuando cambia el valor del elemento, se lanza cuando se levanta una tecla.
//var txtPass = inputPass.value; /*Para evaluar los cambios, txtPass es un nombre que nosotros creamos
//console.log(txtPass);
//inputPass.oninput=function(){ /*En este caso se lanza el efecto en cuanto se termina todo el input, entrada de texto, etc..
   // var txtPass=inputPass.value;
    //var txtRepass=inputRePass.value;
    //if(txtPass==txtRepass){
//btncrear.disabled=false;
    //}else{
    //    btncrear.disabled=true;
   // }
   // console.log(txtPass);
   // Para evitar volver a crear las mismas funciones en pass y repass hacemos lo siguiente, crear una funcion con un nombre X y luego derivar los inputs
inputPass.oninput=validacionImput
inputRePass.oninput=validacionImput
function validacionImput(){
    var txtPass=inputPass.value;
    var txtRepass=inputRePass.value;
    if(txtPass==txtRepass){
btncrear.disabled=false;
    }else{
        btncrear.disabled=true;
    }

}