<?php 

require 'includes/app.php';
incluirTemplates('header');
?>

    <main class="contenedor seccion">   
        
        <h1>Conoce mas sobre Nosotros</h1>

        <div class="nosotros">
            <div class="nosotros_imagen">
                <pinture>
                    
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="sobre nosotros">
                </picture>
            </div>
            <div class="nosotros_texto">
               
                <blockquote>25 Años de experiencia</blockquote>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, accusamus. Odio esse voluptatum dolores sapiente fugit id nulla dolorem consequatur, excepturi similique mollitia dolore, illum sint eaque nesciunt minima veritatis.</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias, omnis? Tempora maxime ullam doloribus, hic, optio facilis magni, ducimus eum velit repellat a unde ad harum reiciendis? Reiciendis, earum atque.</p>
            </div>
        </div>


    </main>

    <section class="seccion contenedor">
        <h1>Mas sobre nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Seguridad" loading="Lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae quia saepe vero repellendus veritatis quis. Praesentium odio id corrupti porro dicta,</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Precio" loading="Lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae quia saepe vero repellendus veritatis quis. Praesentium odio id corrupti porro dicta,</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="A Tiempo" loading="Lazy">
                <h3>A tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae quia saepe vero repellendus veritatis quis. Praesentium odio id corrupti porro dicta,</p>
            </div>
        </div>
    </section>

    <?php 
        incluirTemplates('header');
   ?>

    <script src="build/js/bundle.min.js"></script>
</body>
</html>