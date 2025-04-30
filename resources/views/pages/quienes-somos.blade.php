@extends('welcome')
@section('title', 'Quienes somos?')
@section('content')

    <style>
        .hola{
            color: red;
            font-size: 120px;
        }
    </style>

    <div>
        
        <body>
<!-- Encabezado principal -->
<header class="encabezado">
    <!-- Logo o nombre -->
    <div class="logo">
      <img src="{{ asset('img/logo.png') }}" alt="FrutiGuadalupe">
      <span>FRUTI-GUADALUPE</span>
    </div>
 <!-- Formulario de búsqueda -->
<form action="#" method="get">
    <div class="barra-busqueda">
      <!-- Campo de entrada para la búsqueda -->
      <input type="text" id="buscar" name="buscar" placeholder="Buscar...">
      <!-- Botón para enviar la búsqueda -->
      <button type="submit">Buscar</button>
    </div>
  </form>
  
    
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