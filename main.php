<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("Location: login.php");
}
include("conexiondb.php");
$sql = "SELECT * FROM incidencias";
$resultado = $conexion->query($sql);
include("./partials/cabecera.php");

?>


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
                                <a href='editar_incidencia.php?idincidencia=" . $row['id'] . "'><i class='fa-solid fa-pen-to-square'></i></a>
                                <a href='borrar_incidencia.php?idincidencia=" . $row['id'] . "'><i class='fa-solid fa-trash'></i></a>
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

<?php
include("./partials/footer.php");
?>
