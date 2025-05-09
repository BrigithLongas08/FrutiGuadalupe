@extends('welcome')
@section('title', 'Quienes somos?')
@section('content')

<style>
body {
  width: 100%;
  margin: 0;
  padding: 0;
}
.wrapper {
  max-width: none;
  margin: 0;
}




/* Sección HERO */
.hero {
  background-color: #f8f9fa;
  padding: 40px 20px;
}

.hero h1 {
  font-size: 2.5em;
  color: #333;
}

.hero h2 {
  font-size: 1.2em;
  color: #0e0d0d;
  max-width: 800px;
  margin: auto;
}


/* Contenedor flexible para Misión y Visión */
.mision-vision {
  display: flex;  /* Organiza en fila */
  justify-content: space-between;  /* Separa los elementos */
  align-items: center;  /* Alinea verticalmente */
  max-width: 900px;
  margin: 50px auto;
  gap: 20px;  /* Espacio entre los bloques */
}


/* Efecto de movimiento al pasar el mouse */
.mision img, .vision img {
  width: 100%;
  height: auto;
  border-radius: 10px;
  transition: transform 0.3s ease-in-out; /* Suaviza la animación */
}

/* Movimiento cuando pasas el cursor */
.mision img:hover, .vision img:hover {
  transform: translateY(-10px); /* Mueve la imagen hacia arriba */
}

/* Texto dentro de Misión y Visión */
.mision p, .vision p {
  font-size: 1.2em;
  color: #141414;
  margin-top: 10px;
}
.mision h1, .vision h1 {
  font-size: 3em;
  color: #3fb80f;
  margin-top: 0;
  margin: 20px;
}

/* Sección de testimonios */
.testimonios {
  padding: 40px 20px;
  text-align: center;
}

.testimonios h2 {
  font-size: 2.5em;
  margin-bottom: 20px;
}

/* Estilo para cada testimonio */
.testimonio {
  background-color: white;
  margin: 20px auto;
  padding: 20px;
  width: 70%;
  max-width: 600px;
  border-radius: 10px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.testimonio p {
  font-size: 1.2em;
  color: #666;
}

.testimonio cite {
  display: block;
  margin-top: 10px;
  font-size: 1.1em;
  font-style: italic;
  color: #333;
}

.iconos-sociales {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 20px; /* Espacio entre los iconos */
  padding: 20px 0; /* Espaciado superior e inferior */
}

.iconos-sociales a {
  display: inline-block;
}

.iconos-sociales img {
  width: 40px; /* Ajusta el tamaño de los iconos */
  height: auto;
  transition: transform 0.3s ease;
}

.iconos-sociales img:hover {
  transform: scale(1.1); /* Efecto de hover */
}

</style>
  <div>

        
            <body>
    <!-- Encabezado principal --> 
    </header>  
      <!-- Sección Inicio -->
      <!-- Sección HERO (Encabezado) -->
    <div class="hero">
      <h1>¿Quiénes Somos?</h1>
      <h2>
          Nuestro grupo de productores de aguacate variedad HASS y PAPELILLOS inició las capacitaciones técnicas en el año 2022 con ASOHOFRUCOL. Nuestro objetivo es mejorar la calidad de vida de los asociados y sus familias. La idea de asociarse surge de la necesidad de adquirir conocimientos sobre el manejo del cultivo y comercializar el producto de manera eficiente.
      </h2>
    </div>
    <!-- Sección Nosotros -->
    <section class="nosotros">
      <!-- Contenedor de Misión y Visión -->
      <div class="mision-vision">
          <!-- Sección Misión -->
          <div class="mision">
              <H1>MISION</H1>
              <img src="IMG/agua.jpeg" alt="Imagen de Misión">
              <p>Nuestra misión es promover la producción y comercialización sostenible de frutas, impulsando el desarrollo del sector agrícola y el bienestar de nuestra comunidad.</p>
          </div>
          <!-- Sección Visión -->
          <div class="vision">
            <H1>VISION</H1>
              <img src="IMG/tietta.jpeg" alt="Imagen de Visión">
              <p>Nuestra visión es consolidarnos como una organización líder en la gestión de proyectos agrícolas, sociales y empresariales, fortaleciendo el desarrollo integral de nuestros asociados.</p>
          </div>
      </div>
    </section>
    <!-- Sección de Testimonios -->
    <section class="testimonios">
      <h2>Lo que dicen nuestros clientes</h2>
      
      <div class="testimonio">
        <p>"Los aguacates más frescos y deliciosos que he probado. ¡Definitivamente los recomiendo!"</p>
        <cite>- Ana Martínez</cite>
      </div>

      <div class="testimonio">
        <p>"Excelente atención al cliente y productos de calidad. FrutiGuadalupe es mi tienda de confianza."</p>
        <cite>- Carlos Fernández</cite>
      </div>

    </section>

      <!-- Pie de página -->
      <footer class="pie-pagina">
    <!-- Sección de Contacto -->
    <section id="contacto" class="contacto">
        <h2>Contáctanos</h2>
        <p>Email: contact@frutiguadalupe.com</p>
        <div class="iconos-sociales">
            <a href="#"><img src="IMG/facebook.png" alt="Facebook"></a>
            <a href="#"><img src="IMG/Instagram.png" alt="Instagram"></a>
            <a href="#"><img src="IMG/tiktok.png" alt="TikTok"></a>
            <a href="#"><img src="IMG/whatsapp.png" alt="whatsapp"></a>
        </div>
      </section>
        <p>© 2025 FrutiGuadalupe</p>
      </footer>


      


   </div>
@endsection