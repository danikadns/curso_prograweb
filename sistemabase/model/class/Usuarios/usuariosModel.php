<?php

class usuariosModel {
    /**
     * Método para obtener todos los usuarios
     */

     function getUsuarios(){
        $conexionClass = new Tools();
        $conexion = $conexionClass->conectar();

        $sql = "SELECT
                    id,
                    nombres,
                    apellidos,
                    usuario,
                    password,
                    fecha_created,
                    fecha_updated
                FROM
                     users";

        $resultado = mysqli_query($conexion, $sql);
        $conexionClass->desconectar($conexion);
        return($resultado);
     }


     /***
      * Métodos para eliminar usuarios
      */

      function eliminarUsuario($id){
        $conexionClass = new Tools();
        $conexion = $conexionClass->conectar();
        $sql = "DELETE from users where id = $id";
        $resultado = mysqli_query($conexion, $sql);
        if($resultado){
           
            $conexionClass->desconectar($conexion);
            return 1;
        }else{
            $conexionClass->desconectar($conexion);
            return 0;
        }
      }
}

?>