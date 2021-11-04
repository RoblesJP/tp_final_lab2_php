<?php   session_start();    ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/form.css">
    <title>Document</title>
</head>

<body>
    <?php include '../modulos/header.php' ?>
    <?php include '../modulos/aside.php' ?>

        <main>
            <form action="procesar/login.php" method="POST">
                <input type="text" name="usuario" id="login-usuario" placeholder="Usuario">
                <input type="password" name="password" id="login-password" placeholder="Contraseña">
                <input type="submit" value="LOGIN">
            </form>
        </main>
    </div>

</body>
</html>