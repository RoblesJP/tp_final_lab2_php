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
            <form action="procesar/crear_cuenta.php" method="POST" enctype="multipart/form-data">
                <label for="usuario">
                    Usuario <input type="text" name="usuario" id="usuario">
                </label>

                <label for="password">
                    Contraseña <input type="password" name="password" id="password">
                </label>

                <label for="email">
                    E-mail <input type="email" name="email" id="email">
                </label>
                
                <label for="foto">
                    Foto de perfil <input type="file" name="foto" id="foto">
                </label>

                <input type="submit" value="CREAR CUENTA">
            </form>
        </main>
    </div>

</body>
</html>