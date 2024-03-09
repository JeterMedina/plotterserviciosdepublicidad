<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css"/>
    <title>Plotter Servicios de Publicidad</title>
</head>
<body>

  <!-- HEADER -->
<header tabindex="0">
  <a href="./plotter.php"><img src="./assets/logos.png" alt="Logo" class="logo"></a>
  PLOTTER SERVICIOS DE PUBLICIDAD
</header>

<!-- NAV -->
<div id="nav-container">
    <div class="bg"></div>
    <div class="button" tabindex="0">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </div>
    <div id="nav-content" tabindex="0">
      <ul>
        <li><a href="./plotter.php">Inicio</a></li>
        <li><a href="./plotter.php#about">Acerca de nosotros</a></li>
        <li><a href="./plotter.php#services">Servicios</a></li>
        <li><a href="./plotter.php#contact_form">Contáctanos</a></li>
        <li class="small"><a href="mailto:plotterserviciosdepublicidad@gmail.com"><i class="fas fa-envelope"></i> plotterserviciosdepublicidad@gmail.com</a></li>
        <li class="small"><a href="tel:4444866851"><i class="fas fa-phone"></i> 4444866851</a></li>
  
      </ul>
    </div>
</div>

<!-- SLIDER -->
<div class="slider-container">
    <div class="slider-wrapper">
        <div class="slide"><img src="./assets/agencia.jpeg" alt="Slide 1"><div class="caption"><a href="./plotter.php#agenciaPublicidad">Agencia de publicidad</a></div></div>
        <div class="slide"><img src="./assets/aver.jpeg" alt="Slide 2"><div class="caption"><a href="./plotter.php#campañaPromocion">Campañas de promoción y publicidad</a></div></div>
        <div class="slide"><img src="./assets/produccion.jpg" alt="Slide 3"><div class="caption"><a href="./plotter.php#desarrolloSupervisionGestion">Producción gráfica</a></div></div>
        <div class="slide"><img src="./assets/repartidorfolleteria.jpg" alt="Slide 5"><div class="caption"><a href="./plotter.php#autorizacionesGubarnamentales">Distribución de material impreso</a></div></div>
        <div class="slide"><img src="./assets/gestion.jpg" alt="Slide 4"><div class="caption"><a href="./plotter.php#asesoria">Gestión publicitaria</a></div></div>
        <!-- Agrega más slides según sea necesario -->
    </div>
    <div class="arrow arrow-left" onclick="prevSlide()">&#10094;</div>
    <div class="arrow arrow-right" onclick="nextSlide()">&#10095;</div>
    <div class="dots" id="dots-container"></div>
</div>

<!-- ABOUT -->
<div id="about" class="about-container">
  <section class="about-section">
    <div class="content">
      <h2>Acerca de <span>nosotros</span></h2>
      <p>Bienvenido a <span>Plotter Servicios de Publicidad</span>, nos dedicamos a impulsar el éxito de nuestros clientes a través de estrategias publicitarias innovadoras y creativas. Con una combinación única de experiencia, pasión y visión estratégica. En el corazón de nuestra agencia se encuentra un equipo de profesionales apasionados por la creatividad y comprometidos con la excelencia. Desde estrategas hasta diseñadores gráficos, desde redactores publicitarios hasta expertos en marketing digital, cada miembro de nuestro equipo aporta su talento y experiencia para crear campañas publicitarias efectivas y memorables. Nos enorgullece ofrecer un enfoque integral a la publicidad, desde la conceptualización hasta la ejecución y más allá. Trabajamos en estrecha colaboración con nuestros clientes para comprender sus necesidades y objetivos comerciales, y luego desarrollamos soluciones creativas que generen resultados tangibles.</p>
    </div>
  </section>


  <div class="mission-vision">
    <section id="vision" class="vision-section">
      <div class="content">
        <h2><span>V</span>isión</h2>
        <p>En Plotter Servicios de Publicidad, nuesta visión es inspirar a nuestro equipo a alcanzar lo extraordinario, fomentando un ambiente de creatividad, colaboración y aprendizaje continuo. Creemos en el poder de las ideas para cambiar el mundo y estamos comprometidos a cultivar un entorno donde la innovación florezca y la excelencia sea la norma.</p>    
      </div>
    </section>

    <section id="mision" class="mission-section">
      <div class="content">
        <h2><span>M</span>isión</h2>
        <p>En Plotter Servicios de Publicidad, nuestra misión es simple pero poderosa: ayudar a nuestros clientes a alcanzar y superar sus objetivos comerciales a través de estrategias publicitarias creativas, efectivas e innovadoras. Nos comprometemos a proporcionar soluciones personalizadas que impulsen el crecimiento y la visibilidad de las marcas que servimos, mientras construimos relaciones sólidas y duraderas basadas en la confianza, la transparencia y los resultados tangibles.</p>  
      </div>
    </section>
  </div>
</div>

<!-- SERVICIOS -->
<section id="services" class="about-container">
<br>
<br>
<h2> Nuestros  <span>servicios</span></h2> <br>
<div id="agenciaPublicidad" class="blog-card">
  <div class="meta">
    <div class="photo" style="background-image: url(./assets/agencia.jpeg)"></div>
    <ul class="details">
      <li class="author">Creación de estrategias publicitarias para promocionar.</li>
      <li class="date">Planificación de estrategias publicitarias para promocionar.</li>
      <li class="date">Ejecución de estrategias publicitarias para promocionar.</li>
    </ul>
  </div>
  <div class="description">
    <h1>Agencia de publicidad</h1>
    <h2>Servicios</h2>
    <p>Una empresa especializada en la creación, planificación y ejecución de estrategias publicitarias para promocionar productos, servicios o marcas de sus clientes.</p> 
  </div>
</div>

<div id="campañaPromocion" class="blog-card alt">
  <div class="meta">
    <div class="photo" style="background-image: url(./assets/aver.jpeg)"></div>
    <ul class="details">
      <li class="author">Conceptualización de campañas publicitarias.</li>
      <li class="date">Diseño de campañas publicitarias.</li>
      <li class="date">Ejecución de campañas publicitarias.</li>
    </ul>
  </div>
  <div class="description">
    <h1>Campañas de promoción y publicidad</h1>
    <h2>Servicios</h2>
    <p> Desarrollo de estrategias de marketing que incluyen la conceptualización, diseño y ejecución de campañas publicitarias en diversos medios como televisión, radio, internet, prensa, vallas publicitarias, entre otros.</p>
  </div>
</div>

<div id="desarrolloSupervisionGestion" class="blog-card">
  <div class="meta">
    <div class="photo" style="background-image: url(./assets/produccion.jpg)"></div>
    <ul class="details">
      <li class="author">Diseño gráfico.</li>
      <li class="date">Impresión.</li>
      <li class="date">Grabado.</li>
    </ul>
  </div>
  <div class="description">
    <h1>Producción gráfica</h1>
    <h2>Servicios</h2>
    <p>La agencia puede ofrecer servicios de diseño gráfico, impresión, grabado y otros procesos industriales para la creación y producción de materiales publicitarios como folletos, carteles, etiquetas, libros, revistas, entre otros.</p>
  </div>
</div>

<div id="asesoria" class="blog-card alt">
  <div class="meta">
    <div class="photo" style="background-image: url(./assets/repartidorfolleteria.jpg)"></div>
    <ul class="details">
      <li class="author">Distribución.</li>
    </ul>
  </div>
  <div class="description">
    <h1>Distribución de material impreso</h1>
    <h2>Servicios</h2>
    <p> Además de la producción, algunas agencias también pueden encargarse de la distribución de los materiales publicitarios producidos, así como de la gestión de la logística necesaria para ello.</p>
  </div>
</div>

<div id="autorizacionesGubarnamentales" class="blog-card">
  <div class="meta">
    <div class="photo" style="background-image: url(./assets/gestion.jpg)"></div>
    <ul class="details">
    <li class="author">Investigación de mercado.</li>
      <li class="date">Análisis de competencia.</li>
      <li class="date">Desarrollo de estrategias de comunicación.</li>
      <li class="date">Gestión de redes sociales.</li>
      <li class="date">Marketing digital.</li>
    </ul>
  </div>
  <div class="description">
    <h1>Gestión publicitaria</h1>
    <h2>Servicios</h2>
    <p>Esto incluye una amplia gama de servicios relacionados con la publicidad, como la investigación de mercado, análisis de competencia, desarrollo de estrategias de comunicación, gestión de redes sociales, marketing digital, entre otros. La agencia puede adaptarse a las necesidades específicas de cada cliente y ofrecer soluciones personalizadas en función de sus objetivos y presupuesto.</p>
  </div>
</div>

</section>

<!-- CONTACTANOS -->
<a href="./plotter.php#contact_form" class="btn-flotante"><i class="fas fa-envelope"></i> CONTÁCTANOS</a>

<div id="contact_form" class="contact_form">
  <div class="formulario">      
    <h1>Contáctanos</h1>
    <small>Escríbenos y en breve nos pondremos en contacto contigo</small>
    
    <form action="submeter-formulario.php" method="post" accept-charset="UTF-8">
      <div class="input_container">
        <label for="nombre" class="colocar_nombre">Nombre <span class="obligatorio">*</span></label>
        <input type="text" name="introducir_nombre" id="nombre" required placeholder="Escribe tu nombre">
      </div>

      <div class="input_container">
        <label for="email" class="colocar_email">Email <span class="obligatorio">*</span></label>
        <input type="email" name="introducir_email" id="email" required placeholder="Escribe tu Email">
      </div>

      <div class="input_container">
        <label for="telefono" class="colocar_telefono">Teléfono</label>
        <input type="tel" name="introducir_telefono" id="telefono" placeholder="Escribe tu teléfono">
      </div>    

      <div class="input_container">
        <label for="asunto" class="colocar_asunto">Asunto <span class="obligatorio">*</span></label>
        <input type="text" name="introducir_asunto" id="asunto" required placeholder="Escribe un asunto">
      </div>    

      <div class="input_container">
        <label for="mensaje" class="colocar_mensaje">Mensaje <span class="obligatorio">*</span></label>
        <textarea name="introducir_mensaje" class="texto_mensaje" id="mensaje" required placeholder="Deja aquí tu comentario..."></textarea> 
      </div>

      <button type="submit" name="enviar_formulario" id="enviar_formulario"><p>Enviar</p></button>

      <p class="aviso">
        <span class="obligatorio"> * </span>Los campos son obligatorios.
      </p>          
    </form>
  </div>  
</div>




<!-- Site footer -->
<footer id="footer" class="site-footer">
    <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>Acerca de nosotros</h6>
            <p class="text-justify">En <i>Plotter Servicios de Publicidad</i>, nos dedicamos a impulsar el éxito de nuestros clientes a través de estrategias publicitarias innovadoras y creativas. Con una combinación única de experiencia, pasión y visión estratégica. <br> <a href="plotterserviciosdepublicidad.com">PlotterServiciosDePublicidad.com</a> </p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Servicios</h6>
            <ul class="footer-links">
            <li><a href="./plotter.php#agenciaPublicidad">Agencia de publicidad</a></li>
              <li><a href="./plotter.php#campañaPromocion">Campañas de promoción y publicidad</a></li>
              <li><a href="./plotter.php#desarrolloSupervisionGestion">Producción gráfica</a></li>
              <li><a href="./plotter.php#asesoria">Distribución de material impreso</a></li>
              <li><a href="./plotter.php#autorizacionesGubarnamentales">Gestión publicitaria</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Acceso rápido</h6>
            <ul class="footer-links">
              <li><a href="./plotter.php">Inicio</a></li>
              <li><a href="./plotter.php#about">Acerca de nosotros</a></li>
              <li><a href="./plotter.php#services">Servicios</a></li>
              <li><a href="./plotter.php#contact_form">Contáctanos</a></li>
              <!--<li><a href="./plotter.php">CLABE interbancaria</a></li>-->
              <li><a href="./plotter.php#footer">Politicas de privacidad</a></li>
            </ul>
          </div>
        </div>
        <hr>
    </div>
    <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2024 Plotter Servicios de Publicidad. Todos los derechos reservados. 
            <a href="#">Este sitio web es propiedad de Plotter Servicios de Publicidad. El contenido de este sitio está protegido por derechos de autor y no puede ser reproducido, distribuido, transmitido ni utilizado, excepto con el permiso previo por escrito de Plotter Servicios de Publicidad.</a>.
            </p>
          </div>
        </div>
    </div>
</footer>

<!-- scripts -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
<script src="./js/script.js"></script>


</body>
</html>
