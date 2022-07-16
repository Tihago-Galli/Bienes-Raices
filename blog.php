<?php 

require 'includes/app.php';
incluirTemplates('header');
?>

    <main class="contenedor seccion">   
        
        <h1>Nuestro blog</h1>

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
                     <p>Escrito el: <span>20/1/2022</span> por: <span>Ardim</span></p>
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
                 <p>Escrito el: <span>20/1/2022</span> por: <span>Ardim</span></p>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. a adipisci repellat fugia</p>
             </a>
        </div>
   
</article>

<article class="entrada_blog">
    <div class="imagen">
        <pinture>
            <source srcset="build/img/blog3.webp" type="image/webp">
            <source srcset="build/img/blog3.jpeg" type="image/jpeg">
            <img loading="lazy" width="200" height="300" src="build/img/blog3.jpg" alt="Entrada Blog">
        </picture>
    </div>


    <div class="entrada_texto">
         <a href="entrada.php">
             <h4>Terraza en el techo de tu casa</h4>
             <p>Escrito el: <span>20/1/2022</span> por: <span>Ardim</span></p>
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. a adipisci repellat fugia</p>
         </a>
    </div>

</article>

<article class="entrada_blog">
<div class="imagen">
    <pinture>
        <source srcset="build/img/blog4.webp" type="image/webp">
        <source srcset="build/img/blog4.jpeg" type="image/jpeg">
        <img loading="lazy" width="200" height="300" src="build/img/blog4.jpg" alt="Entrada Blog">
    </picture>
</div>


<div class="entrada_texto">
     <a href="entrada.php">
         <h4>Guia para la decoracion de tu Hogar</h4>
         <p>Escrito el: <span>20/1/2022</span> por: <span>Ardim</span></p>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. a adipisci repellat fugia</p>
     </a>
</div>

</article>

    </main>

    <?php 
        incluirTemplates('header');
   ?>

    <script src="build/js/bundle.min.js"></script>
</body>
</html>