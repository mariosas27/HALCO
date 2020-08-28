<?php 
    $titulo = 'Contacto'; 
    include 'templates/header.php'; 

?>


    <!-- HERO, reutilizamos el hero de proyectos -->

    <div class="hero-interna-proyectos">
        <div class="hero-interna-text">
            <h1 class="text-uppercase">Contacto</h1>
          
        </div>
    </div>


    <main class="container container-formulario mt-5">
         <h2 class="fw-300 text- wow fadeIn mb-4 text-center text-uppercase">Ponte en contacto con nostros</h2>
        <div class="row iconos-contacto mb-3">
            <div class="col-md-3 icono-contenido text-center">
                <i class="fas fa-phone"></i>
                <p class="mt-3">+52 246 324 0276</p>
            </div>
            <div class="col-md-3 icono-contenido text-center correo">
                <i class="far fa-envelope"></i>
                <p class="mt-3">administracion@</p>
                <p>halcoelectricidad.com</p>
            </div>
            <div class="col-md-3 icono-contenido text-center">
                <i class="fab fa-facebook"></i>
                <a href="https://www.facebook.com/HALCO.ELECTRICIDAD" target="_blank" class="d-block mt-3">Halco</a>
            </div>
            <div class="col-md-3 icono-contenido text-center">
                <i class="fas fa-map-marked-alt"></i>
                <p class="mt-3">Av. La Paz Nº 17 B, Barrio de Xaltantla, Chiautempan, Tlaxcala C. P. 90809</p>
            </div>
        </div>
        <form class="contacto " action="">
            <fieldset class="wow fadeInUp" data-wow-duration="1.5s">
                
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" placeholder="Tu Nombre" required>

                <label for="email">E-mail: </label>
        
                <input type="email" id="email" placeholder="Tu Correo electrónico" required>

                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" placeholder="Tu Teléfono" required>

                <label for="mensaje">Mensaje: </label>
                <textarea  id="mensaje"></textarea>

            </fieldset>
                    

                <!-- <fieldset>
                    <legend>Información sobre Propiedad</legend>
                    <label for="opciones">Vende o Compra</label>
                    <select id="opciones">
                        <option value="" disabled selected>-- Seleccione --</option>
                        <option value="Compra">Compra</option>
                        <option value="Vende">Vende</option>
                    </select>

                    <label for="cantidad">Cantidad:</label>
                    <input type="number" min="0" max="100" step="5">
                </fieldset> -->

            
            <div class="enviar">
                <input type="submit" value="Enviar" class="btn btn-primary wow fadeIn py-2 px-5 text-uppercase" data-wow-duration="1.9s">
            </div>
        </form>
       
    </main>

 



    
    <?php 
        include  'templates/footer.php'; 
    ?>