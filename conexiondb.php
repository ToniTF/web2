<?php
$host = "localhost"; // o la IP de tu servidor MySQL
$user = "root";
$password = "";
$database = "web2";
try {
    // Crear la conexión con PDO
    $conexion = new PDO("mysql:host=$host;dbname=$database", $user, $password);
    // Establecer el modo de error de PDO a excepción
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
/*Se definen las variables necesarias para la conexión a la base de datos:
$host: el servidor de la base de datos, en este caso localhost.
$user: el nombre de usuario para la base de datos, en este caso root.
$password: la contraseña para el usuario de la base de datos, en este caso una cadena vacía.
$database: el nombre de la base de datos a la que se desea conectar, en este caso web2.
Se utiliza un bloque try-catch para manejar posibles excepciones durante la conexión a la base de datos.
Dentro del bloque try:
Se crea una nueva instancia de PDO para establecer la conexión a la base de datos
utilizando las variables definidas anteriormente.
Se establece el modo de error de PDO a ERRMODE_EXCEPTION para que lance excepciones en caso de error.
Se imprime un mensaje de "Conexión exitosa" si la conexión se establece correctamente.
Si ocurre una excepción (PDOException), se captura en el bloque catch y se imprime
un mensaje de error con el detalle de la excepción.
En resumen, este código intenta establecer una conexión a una base de datos MySQL utilizando PDO
y maneja cualquier error que pueda ocurrir durante el proceso,
mostrando un mensaje de éxito o error según corresponda.*/
