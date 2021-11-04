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