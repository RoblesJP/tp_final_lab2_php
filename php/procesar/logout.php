<?php 

    if (isset($_GET['cerrar_sesion'])) {
        session_start();
        session_destroy();
        header('refresh:0,url=../../index.php');
    } else {
        header('refresh:0,url=../../index.php');
    }

?>