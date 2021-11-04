<?php 
    session_start();
    include_once '../funciones/conexion.php';
    $conexion = conectar();

    $consulta = 'SELECT usuario, foto FROM usuarios WHERE 
                    usuario = \'' . $_POST['usuario'] . '\'
                    AND password = \'' . sha1($_POST['password']) . '\';';

    $q = mysqli_query($conexion, $consulta);
    if (mysqli_num_rows($q) == 1) {
        $datos = mysqli_fetch_array($q);
        $_SESSION['usuario'] = $datos['usuario'];
        $_SESSION['foto'] = $datos['foto'];
        header('refresh:0,url=../../index.php');
    }

    desconectar($conexion)
?>