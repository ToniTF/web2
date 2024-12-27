var formulario = document.getElementById("formulario");
formulario.onsubmit = function (e) {//onsubmit para capturar un evento de envio, hemos puesto el parametro e o cualquier otro nombre
    e.preventDefault(); //para prevenir el comportamiento por defecto del onsubmit, en nuestro caso para parar el envío
var usuario=document.getElementById("usuario").value;
var password=document.getElementById("password").value;
if(usuario=="admin" && password=="admin"){ //estamos creando un comando para comprobar que funciona la pagina al dar login, ya que no tenenmos servidor para enviar datos
    window.location.href="main.html";
}else{
    alert("Usuario o contraseña incorrectos")
}

}