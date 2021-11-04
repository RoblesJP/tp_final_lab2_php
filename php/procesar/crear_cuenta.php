<?php

    if (
    !isset($_POST['usuario']) 
    || empty($_POST['usuario']) 
    || !isset($_POST['password']) 
    || empty($_POST['password'])) {

        header('refresh:0,url=../crear_cuenta.php');

    } elseif (
        $_FILES['foto']['type'] != 'image/jpg'
        && $_FILES['foto']['type'] != 'image/jpeg'
        && $_FILES['foto']['type'] != 'image/png') {
            
            header('refresh:0,url=../crear_cuenta.php');

    } else {
            include_once '../funciones/conexion.php';

            $conexion = conectar();

            $usuario = $_POST['usuario'];
            $password = sha1($_POST['password']);
            if (isset($_FILES['foto']) && !empty($_FILES['foto']['name'])) {
                $ext = explode('.', $_FILES['foto']['name'])[1];
                $foto = $_POST['usuario'] . '.' . $ext;
                move_uploaded_file($_FILES['foto']['tmp_name'], '../../img/usuarios/' . $foto);
            } else {
                $foto = 'default.png';
            }
            $email = $_POST['email'];
            $fecha = date('Y-m-d');
            $consulta = "INSERT INTO usuarios (usuario, password, email, foto, fecha, tipo)
                                    VALUES ('$usuario', '$password', '$email', '$foto', '$fecha', 'Usuario')";

            $q = mysqli_query($conexion, $consulta);
            desconectar($conexion);
            header('refresh:0,url=../../index.php');
    }
?>