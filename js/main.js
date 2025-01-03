document.querySelector('.imgUser').addEventListener('click', () => { 
    const userMenu = document.getElementById('userMenu'); 
    userMenu.style.display = userMenu.style.display === 'none' ? 'block' : 'none'; });

    //En clase se le ha puesto un id a imgUser llamado igual que la clase y se ha relizado de la siguiente manera
    //var user=document.getElementById('imgUser');
    //user.onclick=function(){} es exactamente lo mismo que addEventListener
    //Se puede crear primero la funcion con su nombre y luego llamarla en el addEventListener
    //Cuando se pone == significa comparar y === significa comparar y que sea del mismo tipo
    var menuMovil = document.getElementById('burguer');
    menuMovil.onclick = function(){
        if(asideMovil.style.display == 'none'){
            asideMovil.style.display = 'block';
        }else{
            asideMovil.style.display = 'none';
        }
    }
    var papeleras=document.getElementsByClassName('fa-trash');
    for (let index = 0; index < papeleras.length; index++) {
        const element = papeleras[index];
        element.onclick=function(e){//e es un nombre que se le da a un evento, como cualquier otro nombre
          /* e.target.parentElement.parentElement.remove();
         alert('¿Estas seguro de que quieres borrar este elemento?')*/
         var row=this.closest('tr'); // Esta es una manera mas elegante de hacer los mismo que la linea de arriba
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
        fechaInput.value = todayFormatted;
    });