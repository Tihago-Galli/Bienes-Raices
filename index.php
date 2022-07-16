<?php 
require 'includes/app.php';


incluirTemplates('header', $inicio = true);

?>

    <main class="contenedor seccion">   
        
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


<section class="seccion contenedor">

<?php 

$limite = 3;

 include 'includes/templates/anuncios.php';
?>  
</section>

    </main>

    <section class="imagen-contacto">

        <h3>Envianos un Mail y contactanos!</h3>
        <p>Lorem ipsdebitis harum? Sequi corrupti aperiam nobis ducimus unde. Alias, architecto sit?</p>
        <a href="contacto.php" class="boton-amarillo-block">Contacto</a>
    </section>

<div class="contenedor seccion seccion-inferior">
    <section class="blog">
        <h3>Nuestro Blog</h3>

        <article class="entrada_blog">
                <div class="imagen">
                    <pinture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img/blog1.jpeg" type="image/jpeg">
                        <img loading="lazy" width="200" height="300" src="build/img/blog1.jpg" alt="Entrada Blog">
                    </picture>
                </div>
            

                <div class="entrada_texto">
                     <a href="entrada.php">
                         <h4>Terraza en el techo de tu casa</h4>
                         <p class="info-meta">Escrito el: <span>20/1/2022</span> por: <span>Ardim</span></p>
                         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. a adipisci repellat fugia</p>
                     </a>
                </div>
           
        </article>

        <article class="entrada_blog">
            <div class="imagen">
                <pinture>
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpeg" type="image/jpeg">
                    <img loading="lazy" width="200" height="300" src="build/img/blog2.jpg" alt="Entrada Blog">
                </picture>
            </div>
        

            <div class="entrada_texto">
                 <a href="entrada.php">
                     <h4>Guia para la decoracion de tu Hogar</h4>
                     <p class="info-meta">Escrito el: <span>20/1/2022</span> por: <span>Ardim</span></p>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. a adipisci repellat fugia</p>
                 </a>
            </div>
       
    </article>
    </section>

    <section class="testimoniales">
        <h3>Testimoniales</h3>
        <div class="testimonio">
            <blockquote>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid iure tenetur doloribus tempore, possimus quidem sapiente, voluptates sunt nobis inventore vitae, temporibus numquam earum natus ipsum hic eius eveniet. Deserunt!
            </blockquote>
            <p>- Tihago Adriel Galli</p>
        </div>
    </section>
</div>

   <?php 
        incluirTemplates('footer');
   ?>

    <script src="build/js/bundle.min.js"></script>
</body>
</html>