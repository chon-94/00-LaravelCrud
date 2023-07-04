<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
        <!-- Enlace al archivo CSS de Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        @vite('resources/css/app.css')
      </head>
      <body class="bg-emerald-200" style="background-image: url('https://www.cordilleraviajes.com/wp-content/uploads/2019/03/Callejon-de-Huaylas-Huaraz-Tour-Lima-Sacred-Valley-Machu-Picchu-12-Days.jpg');">


<!--NAV BAR-->
<nav class="relative mx-auto flex-wrap sm:justify-start sm:flex-nowrap z-50 w-11/12 bg-yellow-100 rounded-full text-sm py-2 border-3 border-black hover:bg-orange-100">
  <div class="container mx-auto flex flex-wrap items-center">

    <!-- NOMBRE Y LOGO -->
    <div class="flex w-full md:w-1/2 justify-center md:justify-start font-extrabold">
      <a href="#" class="text-black">
        FEMA Ingenieros
      </a>
    </div>
    <!-- NOMBRE Y LOGO -->
        
    <!--OPCIONES PRINCIPALES-->
    <div class="flex w-full pt-2 content-center justify-between md:w-1/2 md:justify-end">
      <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">

        <!--Servicios-->
        <li class="mr-5"> 
          <a href="#" class="px-4 text-black">Servicios</a>
        </li>
        <!--Servicios-->

        <!--Contacto-->
        <li class="mr-5"> 
          <a href="#" class="px-4 text-black">Contacto</a>
        </li>
        <!--Contacto-->

        <!--Acerca de-->
        <li class="mr-5">
          <a href="#" class="px-4 text-black">Acerca de</a>
        </li>
        <!--Acerca de-->

      </ul>
    </div>
    <!--OPCIONES PRINCIPALES-->

  </div>
</nav>
<!--NAV BAR-->

<div class=" mx-16 my-14 ">    
<div class="flex flex-col justify-center items-center h-screen  first-letter:es-full  bg-opacity-75  bg-teal-950">

@yield('content')  

</div>
</div>

    <!--PIE-->
    <footer 
      class="text-center bg-gray-900 text-white ">
     
      <!--BOTENES-->
      <div 
        class="flex justify-center mb-2">
       
        <a 
          type="button" 
          href="https://duckduckgo.com" 
          class="duration-500 transform hover:-translate-y-1 hover:scale-150 hover:bg-blue-300 hover:border-red-900 rounded-full border-2  leading-normal uppercase w-9 h-9 m-1">
        <svg 
          focusable="false" 
          data-prefix="fab" 
          aria-hidden="true" 
          viewBox="0 0 488 512"
          data-icon="duckduckgo" 
          class="w-3 h-full mx-auto">
          
          <path 
            fill="currentColor" 
            d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z">
          </path>

        </svg>
        </a>

        <a 
          type="button" 
          href="https://twitter.com/Chon9496" 
          class=" duration-500 transform hover:-translate-y-1 hover:scale-150 hover:bg-blue-300 hover:border-red-900 rounded-full border-2  leading-normal uppercase w-9 h-9 m-1"> 
        <svg 
          focusable="false" 
          data-prefix="fab"
          aria-hidden="true" 
          data-icon="twitter" 
          viewBox="0 0 512 512"
          class="w-3 h-full mx-auto" >
          
          <path 
            fill="currentColor" 
            d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
          </path>

        </svg>
        </a>

        <a 
          type="button" 
          href="https://www.instagram.com/ch1011110.dev" 
          class="duration-500 transform hover:-translate-y-1 hover:scale-150 hover:bg-blue-300 hover:border-red-900 rounded-full border-2  leading-normal uppercase w-9 h-9 m-1">
        <svg 
          focusable="false" 
          data-prefix="fab" 
          aria-hidden="true"
          data-icon="instagram" 
          viewBox="0 0 448 512"
          class="w-3 h-full mx-auto">
          
          <path 
            fill="currentColor" 
            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
          </path>

        </svg>
        </a>

        <a 
          type="button" 
          href="https://www.linkedin.com/in/david-arango-lúcar-51a547114/" 
          class="duration-500 transform hover:-translate-y-1 hover:scale-150 hover:bg-blue-300 hover:border-red-900 rounded-full border-2  leading-normal uppercase w-9 h-9 m-1">
        
        <svg 
          focusable="false" 
          data-prefix="fab"
          aria-hidden="true"
          viewBox="0 0 448 512"
          data-icon="linkedin-in" 
          class="w-3 h-full mx-auto">
          
          <path 
            fill="currentColor" 
            d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
          </path>

        </svg>
        </a>

        <a
          type="button" 
          href="https://github.com/chon94" 
          class=" duration-500 transform hover:-translate-y-1 hover:scale-150 hover:bg-blue-300 hover:border-red-900 rounded-full border-2  leading-normal uppercase w-9 h-9 m-1">
        <svg 
          focusable="false" 
          data-prefix="fab" 
          aria-hidden="true" 
          data-icon="github" 
          viewBox="0 0 496 512"
          class="w-3 h-full mx-auto">
          
          <path 
            fill="currentColor" 
            d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z">
          </path>

        </svg>
        </a>

      </div>
      <!--BOTENES-->

      <!--TEXTO-->
      <div 
        class="text-center" 
        style="background-color: rgba(0, 0, 0, 0.2);"> 
        © 2071 Copyright: esta pagina fue diseñada con
        <a 
          class="text-whitehite duration-500 " 
          href="https://tailwind-elements.com/">
          Tailwind Elements
        </a> 
        y si usted clona, copiada, pirateada o ataca la pagina.<br>Usted sera victima de los peores horrores tecnologicos del siglo 21 de esta era
      </div>
      <!--TEXTO-->

    </footer>
    <!--PIE-->
    


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    // Función para mover al siguiente slide
    function nextSlide() {
      var activeSlide = $('#carouselDarkVariant [data-te-carousel-item].active');
      var nextSlide = activeSlide.next('[data-te-carousel-item]');
      if (!nextSlide.length) {
        nextSlide = $('#carouselDarkVariant [data-te-carousel-item]').first();
      }
      activeSlide.removeClass('active');
      nextSlide.addClass('active');
    }
  
    // Desplazar automáticamente cada 2 segundos
    setInterval(nextSlide, 2000);
  });
</script>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>