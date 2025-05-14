@extends('welcome')
@section('title', 'Quienes somos?')
@section('content')

<div class="w-full bg-gray-50">

    <!-- Sección HERO -->
    <div class="hero bg-gray-100 py-10 px-5 text-center">
        <h1 class="text-4xl font-copperplate text-gray-800 mb-4">¿Quiénes Somos?</h1>
        <h2 class="text-lg text-gray-700 max-w-3xl mx-auto">
            Nuestro grupo de productores de aguacate variedad HASS y PAPELILLOS inició las capacitaciones técnicas en el año 2022 con ASOHOFRUCOL. Nuestro objetivo es mejorar la calidad de vida de los asociados y sus familias. La idea de asociarse surge de la necesidad de adquirir conocimientos sobre el manejo del cultivo y comercializar el producto de manera eficiente.
        </h2>
    </div>

    <!-- Sección Nosotros -->
    <section class="nosotros my-12">
      <!-- Contenedor de Misión y Visión -->
      <div class="flex flex-col md:flex-row justify-center items-center max-w-6xl mx-auto gap-12 px-4 py-12">

        <!-- Misión -->
        <div class="text-center">
          <h1 class="text-4xl text-green-600 font-bold mb-4">MISIÓN</h1>
          <img src="IMG/vision.jpg" alt="Imagen de Misión"
          class="w-[400px] h-[300px] object-cover rounded-xl mx-auto transition-transform duration-300 hover:-translate-y-2">
          <p class="text-lg text-gray-800 mt-4 max-w-md mx-auto">
          Nuestra misión es promover la producción y comercialización sostenible de frutas, impulsando el desarrollo del sector agrícola y el bienestar de nuestra comunidad.
         </p>
        </div>

        <!-- Visión -->
        <div class="text-center">
          <h1 class="text-4xl text-green-600 font-bold mb-4">VISIÓN</h1>
          <img src="IMG/tietta.jpeg" alt="Imagen de Visión"
          class="w-[400px] h-[300px] object-cover rounded-xl mx-auto transition-transform duration-300 hover:-translate-y-2">
          <p class="text-lg text-gray-800 mt-4 max-w-md mx-auto">
          Nuestra visión es consolidarnos como una organización líder en la gestión de proyectos agrícolas, sociales y empresariales, fortaleciendo el desarrollo integral de nuestros asociados.
          </p>
        </div>

      </div>

    </section>

    <!-- Testimonios -->
    <section class="testimonios bg-white py-12 text-center">
        <h2 class="text-4xl font-semibold mb-10 text-gray-800">Lo que dicen nuestros clientes</h2>

        <div class="testimonio bg-white shadow-lg p-6 max-w-xl mx-auto mb-6 rounded-lg">
            <p class="text-lg text-gray-600">"Los aguacates más frescos y deliciosos que he probado. ¡Definitivamente los recomiendo!"</p>
            <cite class="block mt-4 italic text-gray-800">- Ana Martínez</cite>
        </div>

        <div class="testimonio bg-white shadow-lg p-6 max-w-xl mx-auto rounded-lg">
            <p class="text-lg text-gray-600">"Excelente atención al cliente y productos de calidad. FrutiGuadalupe es mi tienda de confianza."</p>
            <cite class="block mt-4 italic text-gray-800">- Carlos Fernández</cite>
        </div>
    </section>

    <!-- Pie de Página -->
    <footer class="bg-green-800 text-white py-10">
        <section id="contacto" class="contacto text-center mb-6">
            <h2 class="text-2xl font-bold">Contáctanos</h2>
            <p class="mb-4">Email: contact@frutiguadalupe.com</p>
            <div class="iconos-sociales flex justify-center items-center gap-6">
                <a href="#"><img src="IMG/facebook.png" alt="Facebook" class="w-10 transition-transform hover:scale-110"></a>
                <a href="#"><img src="IMG/Instagram.png" alt="Instagram" class="w-10 transition-transform hover:scale-110"></a>
                <a href="#"><img src="IMG/tiktok.png" alt="TikTok" class="w-10 transition-transform hover:scale-110"></a>
                <a href="#"><img src="IMG/whatsapp.png" alt="WhatsApp" class="w-10 transition-transform hover:scale-110"></a>
            </div>
        </section>
        <p class="text-center text-sm">© 2025 FrutiGuadalupe</p>
    </footer>

</div>

@endsection
