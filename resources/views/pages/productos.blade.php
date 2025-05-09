@extends('welcome')
@section('title', 'inicio')
@section('content')
    
<!-- Encabezado principal -->
<header class="encabezado">
  
  <!-- Sección Inicio -->

 
  <!-- Sección de Productos -->
  <section id="productos" class="productos">
    <h2>Nuestros productos</h2>
    <div class="cuadro-productos">
      <!-- Tarjeta de Producto: Aguacates -->
      <div class="tarjeta-producto">
        <img src="IMG/Agucate.jpg" alt="Aguacate">
        <h3>Aguacates</h3>
        <p>Frescos y deliciosos aguacates.</p>
        <button class="boton-comprar">Comprar ahora</button>
      </div>
      <!-- Tarjeta de Producto: Limones -->
      <div class="tarjeta-producto">
        <img src="IMG/Limon.jpg" alt="Limón">
        <h3>Limones</h3>
        <p>Jugosos y maduros limones.</p>
        <button class="boton-comprar">Comprar ahora</button>
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