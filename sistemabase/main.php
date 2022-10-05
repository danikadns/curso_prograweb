<?php
session_start();
if(!$_SESSION['user_id']){
    header("location: index.php");
}

/**
 * IMPORTANDO EL TEMPLATE
 */

 #header
 include 'template/header.php';

/*echo "HOLA MUNDO, BIENVENIDO AL SISTEMA WEB: ".$_SESSION['user_nombre'];*/
?>

<!--Contenido html -->

<?php
#footer
include 'template/footer.php';

#userinfo
include 'template/userinfo.php';
?>