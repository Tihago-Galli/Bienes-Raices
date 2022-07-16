<?php 

require 'includes/app.php';
incluirTemplates('header');
?>

    <main class="contenedor seccion">   
        
        <h1>Anuncios</h1>


        <?php

        $limite = 10;
            include 'includes/templates/anuncios.php';
        ?>

    </main>

    <?php 
        incluirTemplates('header');
   ?>

    <script src="build/js/bundle.min.js"></script>
</body>
</html>