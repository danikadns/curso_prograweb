<?php  

ob_start();
session_start();

include_once("../../model/functions.php");

$loginModel = new loginModel();

$usuario = $_POST['inUsuario'];
$clave = $_POST['inPassword'];

$result = array();

$result = $loginModel->autenticar($usuario, $clave);

if($row = mysqli_fetch_array($result)){
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['user_nombre'] = $row['nombres'];
    $_SESSION['user_apellido'] = $row['apellidos'];
    $_SESSION['username'] = $row['usuario'];

    header("location: ../../main.php");

    

}else{
    echo "<script>
    alert('AUTENTICACION FALLIDA, AL PARECER SU USUARIO O CLAVE SON INVALIDOS');
    history.back();
    </script>";
    exit(-1);
    
}

/*echo "USUARIO: ".$usuario." CLAVE: ".$clave;
echo "NOMBRES: ".$row['nombres']."APELLIDOS: ".$row['apellidos'];
echo "NO HAY DATOS";
*/

ob_end_flush();
?>