<?php   session_start();    ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <section class="logo">
            <h3>LOGO</h3>
        </section>

        <?php if (isset($_SESSION) && !empty($_SESSION)) : ?>
            <section class="user">
                <a href="#"><h3><?php echo $_SESSION['usuario'] ?></h3></a>
            </section>

            <section class="cerrar_sesion">
                <a href="php/procesar/logout.php?cerrar_sesion=true"><h3>CERRAR SESION</h3></a>
            </section>
        <?php else : ?>
            <section class="login">
                <a href="./php/login.php"><h3>LOGIN</h3></a>
            </section>

            <section class="crear_cuenta">
                <a href="./php/crear_cuenta.php"><h3>CREAR CUENTA</h3></a>
            </section>
        <?php endif; ?>
    </header>

    <div class="container">
        <aside>
            <?php if (isset($_SESSION['usuario'])): ?>
                <section class="subir">
                    <h3><a href="./php/cargar_imagen.php">SUBIR IMAGEN</a></h3>
                </section>
            <?php endif ?>
            <section class="categorias">
                <h3>CATEGORIAS</h3>
            </section>

            <section class="resoluciones">
                <h3>RESOLUCIONES</h3>
            </section>
        </aside>

        <main>
            <section class="search">
                    <input type="text" name="search" id="input-search" placeholder="BUSCAR">
            </section>

            <section class="galery">
                <?php 
                    include_once './php/funciones/conexion.php';
                    $conexion = conectar();
                    $consulta = 'SELECT titulo FROM imagenes';
                    $q = mysqli_query($conexion, $consulta);
                    desconectar($conexion);

                    if (mysqli_num_rows($q) > 0) :
                        $filas = mysqli_num_rows($q);
                        for ($i = 0; $i < $filas; $i++) :
                            $datos = mysqli_fetch_array($q);
                ?>
                            <article>
                                <img src="./img/imagenes/<?php echo $datos['titulo'] ?>" alt="">
                            </article>

                        <?php endfor ?>
                    <?php endif ?>
            </section>
        </main>
    </div>
</body>
</html>