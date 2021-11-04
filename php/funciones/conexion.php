<?php 

    function conectar() {
        $servidor = 'localhost';
        $usuario = 'root';
        $password = '';
        $db = 'galeria';

        $conexion = mysqli_connect($servidor, $usuario, $password, $db);

        if($conexion){
           //echo '<h3>Conexion Exitosa</h3>';
        } else {
            //echo '<h3>Conexion Fallida</h3>';
        }

        return $conexion;
    }

    function desconectar($conexion) {

        if ($conexion){
            mysqli_close($conexion);
            //echo '<h3>Desconexion Exitosa</h3>';
        } else {
            //echo "<h3>No se puede desconectar</h3>";
        }

    }

 

?>