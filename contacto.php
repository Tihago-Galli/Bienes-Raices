<?php 

require 'includes/app.php';
incluirTemplates('header');
?>

    <main class="contenedor seccion">   
        
        <h1>Contacto</h1>
        <pinture>
            
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada3.jpg" alt="">
        </picture>


    <h2>Completa el formulario para continuar</h2>

    <form class="formulario">
        <fieldset>
            <legend>Informacion Personal</legend>

            <label for="nombre">Nombre</label> 
            <input type="text" placeholder="Tu Nombre"  id="nombre">

            <label for="email">E-Mail</label> 
            <input type="email" placeholder="Tu Email"  id="email">

            <label for="telefono">Telefono</label> 
            <input type="tel" placeholder="Tu telefono"  id="telefono">

            <label for="mensaje">Mensaje</label>
            <textarea id="mensaje"></textarea>


        </fieldset>

        <fieldset>
            <legend>Informacion Sobre la propiedad</legend>
            <label for="opciones">Vende o compra</label>
            <select id="opciones">
                <option value="" disabled selected>-- Seleccione --</option>
                <option value="Compra">Compra</option>
                <option value="Vende">Vende</option>
            </select>

            <label for="precio">Presupuesto</label> 
            <input type="number" placeholder="Su presupuesto"  id="precio">
        </fieldset>

        <fieldset>
            <legend>Informacion de Contacto</legend>
            <p>Como desea ser contactado?</p>

            <div class="forma-contacto">

                <label for="contacto-telefono">Telefono</label>
                <input  name="contacto" type="radio" value="telefono" id="contacto-telefono">
                <label for="contacto-Email">E-Mail</label>
                <input  name="contacto" type="radio" value="Email" id="contacto-Email">

            </div>

            <p>Si elijio telefono indique la fecha a ser contactado</p>
            <label for="fecha">Fecha</label>
            <input type="date" id="fecha">
            <label for="hora">Hora</label> 
            <input type="time"  id="hora" min="09:00" max="18:00">
            
        </fieldset>
        <input type="submit" value="enviar" class="boton-verde">
    </form>
    </main>

    <?php 
       incluirTemplates('header');
   ?>

    <script src="build/js/bundle.min.js"></script>
</body>
</html>