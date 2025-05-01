@extends('welcome')
@section('title', 'Inicio')
@section('content')
    <h1> kiubooooooooooooo </h1>
    <body>
<!-- Encabezado principal -->
<header class="encabezado">
    <!-- Logo o nombre -->
    <div class="logo">
      <a href="/"><img src="IMG/logo.png" alt="FrutiGuadalupe"></a>
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

    <!-- Menú de navegación -->
    <nav class="barra-navegacion">
      <ul class="enlaces-navegacion">
        <li><a href="principal.html">Inicio</a></li>
        <li><a href="Producto.html">Productos</a></li>
        <li><a href="quienessomos.html">Quiénes somos</a></li>
        <li><a href="iniciarsesion.html">Iniciar sesión</a></li>
        <li><a href="#registro">Registrarse</a></li>
      </ul>
    </nav>
  </header>
  
  <!-- Sección Inicio -->
  <section id="inicio" class="inicio">
    <div class="contenedor-inicio">
        <img src="IMG/frutas.jpg" alt="Frutas">
        <h1 class="titulo-bienvenida">BIENVENIDO</h1>
    </div>
</section>


  <!-- Sección de Productos -->
  <section id="productos" class="productos">
    <h2>Nuestros Productos  vendidos</h2>
    <div class="cuadro-productos">
      <!-- Tarjeta de Producto: Aguacates -->
      <div class="cuadro-productos">
        <div class="tarjeta-producto">
            <img src="IMG/Agucate.jpg" alt="Aguacate">
            <h3>Aguacates</h3>
            <p>Frescos y deliciosos aguacates.</p>
            <button class="boton-comprar">Comprar ahora</button>
        </div>
        <div class="tarjeta-producto">
            <img src="IMG/Limon.jpg" alt="Limón">
            <h3>Limones</h3>
            <p>Jugosos y maduros limones.</p>
            <button class="boton-comprar">Comprar ahora</button>
        </div>
    </div>
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
@endsection