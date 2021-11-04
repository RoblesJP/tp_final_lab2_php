<?php 

    if (isset($_POST['submit'])) {

        $autor = $_POST['autor'];
        $categoria = $_POST['categoria'];
        $imagen = $_FILES['imagen'];
        $imagen_name = $imagen['name'];
        $imagen_tmp_name = $imagen['tmp_name'];
        $imagen_type = $imagen['type'];
        $imagen_size = $imagen['size'];
        $imagen_error = $imagen['error'];

        $imagen_ancho = getimagesize($imagen_tmp_name)[0];
        $imagen_alto = getimagesize($imagen_tmp_name)[1];

        if (!empty($autor) && !empty($categoria) && !empty($imagen_name)) {
            if ($imagen_error === 0) {
                if ($imagen_type == 'image/jpg' || $imagen_type == 'image/jpeg' || $imagen_type == 'image/png') {
                    if ($imagen_ancho < 1280 || $imagen_alto < 720) {
                        var_dump($imagen);
                    } else {
                        header('Location: ../cargar_imagen.php?error=size');
                        exit();
                    }
                } else {
                    header('Location: ../cargar_imagen.php?error=type');
                    exit();
                }
            } else {
                header('Location: ../cargar_imagen.php?error=upload');
                exit();
            }
        } else {
            header('Location: ../cargar_imagen.php?error=empty');
            exit();
        }
    } else {
        header('Location:../cargar_imagen.php');
        exit();
    }

?>