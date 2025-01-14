<?php
session_start();//inicia la sesión
session_unset();//libera todas las variables de sesión
session_destroy();//cierra la sesión
header("Location: index.php");//redirige a la página principal

?>