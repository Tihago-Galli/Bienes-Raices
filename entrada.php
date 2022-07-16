<?php 

require 'includes/app.php';
incluirTemplates('header');
?>

    <main class="contenedor seccion contenido-centrado">   
        
        <h1>Guia para tu casa en el lago</h1>
        

        <pinture>
            
            <source srcset="build/img/blog2.webp" type="image/webp">
            <source srcset="build/img/blog2.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/blog2.jpg" alt="">
        </picture>

        <p class="info-meta">Escrito el: <span> 20/2/22 </span> por:<span> Admin</span></p>
        <div class="resumen_propiedad">
            <p class="precio">$3.000.000</p>


            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore error mollitia voluptas qui itaque quos totam autem natus in amet excepturi, sapiente eos quaerat! Quis consectetur dolores vel fugiat voluptatibus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa voluptates praesentium iure, beatae iusto odio ipsa alias aperiam corrupti enim adipisci quia, ducimus sapiente veniam error dolorem ratione perspiciatis tempora?</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident modi optio fugit, ipsam, iste magnam et at distinctio blanditiis ea beatae voluptas quas vitae nulla architecto? Quos qui perspiciatis veritatis!</p>
        </div>

    </main>

    <?php 
        incluirTemplates('header');
   ?>

    <script src="build/js/bundle.min.js"></script>
</body>
</html>