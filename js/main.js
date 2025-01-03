document.querySelector('.imgUser').addEventListener('click', () => {
    const userMenu = document.getElementById('userMenu');
    userMenu.style.display = userMenu.style.display === 'none' ? 'block' : 'none';
});

//En clase se le ha puesto un id a imgUser llamado igual que la clase y se ha relizado de la siguiente manera
//var user=document.getElementById('imgUser');
//user.onclick=function(){} es exactamente lo mismo que addEventListener
//Se puede crear primero la funcion con su nombre y luego llamarla en el addEventListener
//Cuando se pone == significa comparar y === significa comparar y que sea del mismo tipo
var menuMovil = document.getElementById('burguer');
menuMovil.onclick = function () {
    if (asideMovil.style.display == 'none') {
        asideMovil.style.display = 'block';
    } else {
        asideMovil.style.display = 'none';
    }
}
var papeleras = document.getElementsByClassName('fa-trash');
for (let index = 0; index < papeleras.length; index++) {
    const element = papeleras[index];
    element.onclick = function (e) {//e es un nombre que se le da a un evento, como cualquier otro nombre
        /* e.target.parentElement.parentElement.remove();
       alert('¿Estas seguro de que quieres borrar este elemento?')*/
        var row = this.closest('tr'); // Esta es una manera mas elegante de hacer los mismo que la linea de arriba
        row.remove(); //This es el elemento que se esta clicando, solamente ese

    };
}
document.addEventListener('DOMContentLoaded', () => {
    // Establecer la fecha de hoy en el campo de entrada de tipo date
    const fechaInput = document.getElementById('fecha');
    const today = new Date();
    const yyyy = today.getFullYear();
    const mm = String(today.getMonth() + 1).padStart(2, '0'); // Enero es 0
    const dd = String(today.getDate()).padStart(2, '0');
    const todayFormatted = `${yyyy}-${mm}-${dd}`;
    fechaInput.value = todayFormatted; // Asignar la fecha de hoy al campo de entrada
});

var formulario = document.getElementById("formIncidencias");
formulario.onsubmit = function (e) {
    e.preventDefault();
    var incidencia = document.getElementById("descripcion").value;
    var fecha = document.getElementById("fecha").value;
    var tabla = document.getElementById("tablaIncidencias");
    var tr = document.createElement("tr");
    var td1 = document.createElement("td");
    var td2 = document.createElement("td");
    var td3 = document.createElement("td");
    var td4 = document.createElement("td");
    var i = document.createElement("i");
    i.classList.add("fa-solid");
    i.classList.add("fa-trash");
    i.onclick = function (e) {
        var row = this.closest("tr");
        row.remove();
    };
    td1.innerText = obtenerMaxId("tablaIncidencias") + 1;
    td2.innerText = formatearFecha(fecha); //formatearFecha es una funcion que se ha creado al final del main.js
    td3.innerText = incidencia;
    td4.appendChild(i);
    tr.appendChild(td1);
    tr.appendChild(td2);
    tr.appendChild(td3);
    tr.appendChild(td4);
    tabla.appendChild(tr);
    formulario.reset();
};
function formatearFecha(fechaOriginal) {
    var datosFecha = fechaOriginal.split('-'); //split es un metodo que separar una cadena de texto en un caracter que yo decida
    return datosFecha[2] + '/' + datosFecha[1] + '/' + datosFecha[0];//el símbolo + en cadena de texto significa concatenar

}
// Función para obtener el ID más grande de la tabla
function obtenerMaxId(idTabla) {
    var tabla = document.getElementById(idTabla);
    var celdas = tabla.getElementsByTagName('td');//se le puede indicar que busque en una determinada parte de mi documento, sustituyendo document por donde quieras que busque.getElementsByTagName es un metodo que devuelve una coleccion de elementos con el nombre de la etiqueta que le pases
    var maxId = 0;
    for (var i = 0; i < celdas.length; i += 4) { // Asumiendo que el ID está en la primera celda de cada fila
        var id = parseInt(celdas[i].innerText);
        if (!isNaN(id) && id > maxId) {
            maxId = id;
        }
    }
    return maxId;
}



