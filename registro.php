<?php
if(isset($_POST["nombre"])){//si existe la variable nombre en el array post
    var_dump($_POST);
    exit();
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web2 - Login</title>
    <link rel="stylesheet" href="css/registro.css">
</head>

<body>

    <img src="img/Imagenpararegistro.jpeg" alt="Fondo" class="imgfondo">
    <div>
        <a href="index.html"><img src="img/Logo3.jpeg" alt="Logo"></a>
        <form class="register" action="" method="post"> <!--Una vez convertida la página en php se necesita un action y un método de envio get(se envía y ve en la url) o post (los datos no se ven en url y se envía en la cabecera) al cubrir el action me envía una página que se haya creado.-->
            <label for="nombre">Nombre</label>
            <input required type="text" name="nombre" id="nombre"> <!--necesitamos poner los nombres para trabjar con php, ya que sólo se envian los imput que tienen name.-->
            <label for="apellidos">Apellidos</label>
            <input required type="text" name="apellidos" id="apellidos">
            <label for="usuario">Email</label>
            <input required type="email" name="email" id="email">
            <label for="fecha">Fecha Nacimiento</label>
            <input type="date" name="fecha" id="fecha">
            <label for="password">Contraseña</label>
            <input type="password" name="" id="password">
            <label for="password">Repite la contraseña</label>
            <input type="password" name="" id="repassword">
            <span id="msg">*Las contraseñas deben ser iguales</span>
            <button id="btnCrear" disabled>Crear usuario</button>
        </form>
        <p>*Si tienes usuario <a href="login.html">logéate</a></p>
    </div>

    <script src="js/registro.js"></script>
</body>

</html>