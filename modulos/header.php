<header>
    <section class="logo">
        <h3>LOGO</h3>
    </section>

    <?php if (isset($_SESSION) && !empty($_SESSION)) : ?>
        <section class="user">
            <a href="#"><h3><?php echo $_SESSION['usuario'] ?></h3></a>
        </section>

        <section class="cerrar_sesion">
            <a href="./procesar/logout.php?cerrar_sesion=true"><h3>CERRAR SESION</h3></a>
        </section>
    <?php else : ?>
        <section class="login">
            <a href="./login.php"><h3>LOGIN</h3></a>
        </section>

        <section class="crear_cuenta">
            <a href="./crear_cuenta.php"><h3>CREAR CUENTA</h3></a>
        </section>
    <?php endif; ?>
</header>