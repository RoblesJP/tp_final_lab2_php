<?php 
    session_start();
    if (!isset($_SESSION['usuario'])) {
        header('refresh:0,url=./login.php');
    } else {
?> 

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
                    <form action="procesar/cargar_imagen.php" method="POST" enctype="multipart/form-data">
                        <label for="autor">
                            Autor <input type="text" name="autor" id="titulo">
                        </label>

                        <label for="categoria">
                            Categoría   <select name="categoria" id="categoria">
                                            <option value="cat1">Categoria 1</option>
                                            <option value="cat2">Categoria 2</option>
                                            <option value="cat3">Categoria 3</option>
                                            <option value="cat4">Categoria 4</option>
                                        </select>
                        </label>

                        <label for="imagen">
                            Imagen <input type="file" name="imagen" id="imagen" oninput="sizeControl(5242880)">
                        </label>
                        <span id="sizeControl"></span>

                        <input type="submit" name="submit" value="CARGAR IMAGEN">
                    </form>
                </main>
            </div>

            <script src="../js/sizeControl.js" type="text/javascript"></script>
        </body>
        </html>
<?php   }   ?>