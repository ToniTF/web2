<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("Location: login.php");
}
include("conexiondb.php");
$sql = "SELECT * FROM incidencias";
$resultado = $conexion->query($sql);

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
        <section class="contenedorPrincipal">
            <h3>Listado de incidencias</h3>
            <div class="incidencias">
                <form action="nueva_incidencia.php" method="post" id="formIncidencias">
                    <label for="fecha">Fecha</label>
                    <input type="date" name="fecha" id="fecha">
                    <label for="descripcion">Descripción</label>
                    <input type="text" name="descripcion" id="descripcion">
                    <button>Añadir</button>
                </form>
            </div>
            <div class="lista">
                <table id="tablaIncidencias">
                    <thead>
                        <th>ID</th>
                        <th>Fechas</th>
                        <th>Descripción</th>
                        <th>Operaciones</th>
                    </thead>
                    <tbody id="tbodyIncidencias">
                        <?php
                        while ($row = $resultado->fetch()) {
                            echo "<tr>
                            <td>" . $row['id'] . "</td>
                            <td>" . $row['fecha'] . "</td>
                            <td>" . $row['descripcion'] . "</td>
                            <td>
                                <i class='fa-solid fa-pen-to-square'></i>
                                <a href='borrar_incidencia.php?idincidencia=".$row['id']."'><i class='fa-solid fa-trash'></i></a>
                                </td>
                                                </tr>";
                        }
                        ?>
                        <!--<tr>
                            <td>1</td>
                            <td>01/01/2021</td>
                            <td>Problema con el servidor</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>02/01/2021</td>
                            <td>Problema con el servidor</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>03/01/2021</td>
                            <td>Problema con el servidor</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>04/01/2021</td>
                            <td>Problema con el servidor</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>05/01/2021</td>
                            <td>Problema con el servidor</td>
                            <td>
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-trash"></i>
                            </td>
                        </tr>-->
                </table>
            </div>


            <p>Contenedor pricipal, que ocupa un 70% del ancho de su padre (excepto en móvil que ocupa el 100%), en este
                caso su padre es una section.</p>
        </section>
    </main>
    <footer>
        <p> 2025 todos los derechos reservados</p>
    </footer>
    <script src="js/main.js"></script>

</body>

</html>