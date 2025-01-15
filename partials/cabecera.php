<?php


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
        <img src="img/Logo3.jpeg" alt="Logo3">
        <div>
            <h1>FormaClassroom</h1>
            <style>
                h1 {
                    color: white;
                    font-size: 50px;
                    font-weight: bold;
                    display: inline;
                }
            </style>
        </div>
        <div>
            <img class="imgUser" src="img/usuario.png" alt="Imagen Usuario">
            <div class="userMenu">
                <ul id="userMenu" style="display: none;"> <!--Se podría hacer en el archivo css con #userMenu-->
                    <li>
                        <a href="">Datos de usuario</a>
                    </li>
                    <li>
                        <a href="cerrar_session.php">Cerrar sesión</a>
                    </li>
                </ul>
            </div>
        </div>

    </header>
    <main>
        <aside> <!--Menú lateral-->
            <ul>
                <li><i class="fa-solid fa-cart-shopping"></i>Pedidos</li>
                <li><i class="fa-solid fa-newspaper"></i>Presupuestos</li>
                <li><i class="fa-solid fa-file-invoice"></i>Facturas</li>
                <li><i class="fa-solid fa-circle-exclamation"></i>Incidencias</li>
                <li><i class="fa-solid fa-calendar"></i>Calendario</li>
            </ul>
        </aside>
        <div class="asideMovil">
            <i id="burguer" class="fa-solid fa-bars"></i>
            <ul id="asideMovil">
                <li><i class="fa-solid fa-cart-shopping"></i>Pedidos</li>
                <li><i class="fa-solid fa-newspaper"></i>Presupuestos</li>
                <li><i class="fa-solid fa-file-invoice"></i>Facturas</li>
                <li><i class="fa-solid fa-circle-exclamation"></i>Incidencias</li>
                <li><i class="fa-solid fa-calendar"></i>Calendario</li>
            </ul>
        </div>