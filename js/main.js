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