<?php
if (isset($_POST["email"])) { //si existe la variable email en el array post
    include("conexiondb.php"); //incluye el archivo de conexión a la base de datos
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql = "SELECT password,id,nombre,apellidos,foto FROM usuarios WHERE email = :email"; //consulta sql para seleccionar los datos de la tabla usuarios donde el email sea igual al email introducido
    $stmt = $conexion->prepare($sql); //prepara la consulta
    $stmt->bindParam(':email', $email); //asigna el valor del campo email del formulario al parámetro :email
    $stmt->execute(); //ejecuta la consulta
    $resultado = $stmt->fetch(PDO::FETCH_ASSOC); //guarda el resultado de la consulta en un array asociativo

    if ($resultado) { //si el resultado es verdadero
        if (password_verify($password, $resultado["password"])) { //si la contraseña introducida coincide con la contraseña encriptada en la base de datos
            session_start(); //inicia la sesión
            $_SESSION["email"] = $email; //guarda el email en la variable de sesión
            $_SESSION["foto"] = $resultado["foto"]; //guarda la foto en la variable de sesión
            $_SESSION['idusuario'] = $resultado['id'];
            $_SESSION['nombre'] = $resultado['nombre'];
            $_SESSION['apellidos'] = $resultado['apellidos'];
            header("Location: main.php"); //redirige a la página main
        } else {
            $error = "Contraseña incorrecta"; //muestra un mensaje de error si la contraseña es incorrecta
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web2 - login</title>
    <link rel="stylesheet" href="css/login.css">
    <style>
        body {
            background-image: url(img/Teclado.jpg);
            background-size: cover;
            /* Ajusta la imagen para que cubra toda la pantalla */
            background-position: center;
            /* Centra la imagen */
            background-repeat: no-repeat;
            /* Evita que la imagen se repita */
            margin: 0;
            height: 100vh;

            a {
                color: #3498db;
                /* Cambia el color del texto */
                text-decoration: none;
                /* Elimina el subrayado del enlace */
                font-weight: bold;
                /* Cambia el peso de la fuente a negrita */
            }

            a:hover {
                color: #2980b9;
                /* Cambia el color del texto al pasar el ratón por encima */
                text-decoration: underline;
                /* Añade subrayado al pasar el ratón por encima */
            }

            p {
                font-size: 20px;
                color: #e0e6eb;
                /* Cambia el color del texto */
                text-decoration: none;
                /* Elimina el subrayado del enlace */
                font-weight: bold;
                /* Cambia el peso de la fuente a negrita */
            }
        }
    </style>
</head>

<body>
    <div>
        <a href="index.php"><img src="img/Logo3.jpeg" alt="logo"></a>
        <form action="" method="post" id="formulario"><!--cambiamos get por post por que vamos a enviar password y no queremos que se vea en la url-->
            <!--Para introducir formularios en los que los usuarios puedan interactuar-->
            <label for=""> <!--Etiquetas-->
                <strong>Usuario</strong>
            </label>
            <input type="email" name="email" id="usuario" placeholder="Introduce tu email"> <!--Para que el usuario pueda interactuar-->
            <label for="password">
                <strong>Password</strong>
            </label>
            <input type="password" name="password" id="password" placeholder="Introduce tu contraseña">
            <button> <!--Para introducir un boton para enviar los datos cubiertos en las label-->
                Login
            </button>
            <p>Haz clic en este <a class="enlace" href="registro.php"><strong><i>enlace</i></strong></a> para registrarte.</p>
            <?php if (isset($error)) {
                echo "<p style='color:red;'>$error</p>";
            } ?>
        </form>
    </div>
    <script src="js/login.js"></script>

</body>

</html>