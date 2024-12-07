<?php

  class Tipo{
    public $nombre;
    public function __construct($nombre)
    {
      $this->nombre = $nombre;
    }
  }

  class Proyecto{
    public $nombre;
    public $fecha;
    public $descripcion;
    public $colaboradores;
    public $lugarRealizado;
    public $disenos = [];  // Arreglo para almacenar los diseños del proyecto

    public function __construct($nombre,$fecha,$descripcion,$colaboradores,$lugarRealizado)
    {
      $this->nombre = $nombre;
      $this->fecha = $fecha;
      $this->descripcion = $descripcion;
      $this->colaboradores = $colaboradores;
      $this->lugarRealizado = $lugarRealizado;
    }

    // Método para agregar un diseño al proyecto
    public function agregarDiseno($diseno) {
        $this->disenos[] = $diseno;
    }

  }

class Diseno {
    public $titulo;
    public $src;
    public $descripcion;
    public $autor;
    // public $proyecto;  // Un Diseno pertenece a un Proyecto
    public $tipo;      // El tipo de diseño (ej. Portada, Foto)

    // Constructor para inicializar los datos del diseño
    public function __construct($titulo, $src, $descripcion, $autor, $tipo) {
        $this->titulo = $titulo;
        $this->src = $src;
        $this->descripcion = $descripcion;
        $this->autor = $autor;
        // $this->proyecto = $proyecto;  // Proyecto asociado al diseño
        $this->tipo = $tipo;          // Tipo asociado al diseño
    }
}

// Crear objetos de tipo
$portada = new Tipo('Portada');
$foto = new Tipo('Foto');
$poster = new Tipo('Poster');

// Crear objetos de proyecto
$proyectoA = new Proyecto('Proyecto A', '2024-11-28', 'Descripción del Proyecto A', ['SINROD'], 'Lugar A');
$proyectoB = new Proyecto('Proyecto B', '2024-11-28', 'Descripción del Proyecto B', ['SINROD'], 'Lugar B');


// Crear los diseños y asignarlos a cada proyecto
$diseno1 = new Diseno('titulo 1', '/assets/img/47_SA.jpg', 'descripcion de ejemplo', 'SINROD', $portada);
$diseno2 = new Diseno('titulo 2', '/assets/img/rsz_1rsz_vigo.jpg', 'descripcion de ejemplo', 'SINROD', $foto);
$diseno3 = new Diseno('titulo 3', '/assets/img/rsz_vigo.jpg', 'descripcion de ejemplo', 'SINROD', $poster);
$diseno4 = new Diseno('titulo 4', '/assets/img/vigo.jpeg', 'descripcion de ejemplo', 'SINROD', $foto);

// $misDisenos = [
//     'Proyecto A' => [
//         new Diseno('titulo 1', '/assets/img/47_SA.jpg', 'descripcion de ejemplo', 'SINROD', $proyectoA, $portada),
//         new Diseno('titulo 2', '/assets/img/rsz_1rsz_vigo.jpg', 'descripcion de ejemplo', 'SINROD', $proyectoA, $foto),
//     ],
//     'Proyecto B' => [
//         new Diseno('titulo 3', '/assets/img/rsz_vigo.jpg', 'descripcion de ejemplo', 'SINROD', $proyectoB, $poster),
//         new Diseno('titulo 4', '/assets/img/vigo.jpeg', 'descripcion de ejemplo', 'SINROD', $proyectoB, $foto),
//     ]
// ];

// Asignar los diseños a los proyectos
$proyectoA->agregarDiseno($diseno1);
$proyectoA->agregarDiseno($diseno2);
$proyectoB->agregarDiseno($diseno3);
$proyectoB->agregarDiseno($diseno4);

// Mostrar los diseños de cada proyecto
// Proyecto A
// echo "<h2>Diseños en {$proyectoA->nombre}</h2>";
// foreach ($proyectoA->disenos as $diseno) {
//     echo "<h3>{$diseno->titulo}</h3>";
//     echo "<img src='{$diseno->src}' alt='{$diseno->titulo}' />";
//     echo "<p>{$diseno->descripcion}</p>";
//     echo "<p>Autor: {$diseno->autor}</p>";
//     echo "<p>Tipo de diseño: {$diseno->tipo->nombre}</p>";
//     echo "<p>Proyecto: {$proyectoA->nombre}</p>";
//     echo "<p>Descripción del Proyecto: {$proyectoA->descripcion}</p>";
// }

// // Proyecto B
// echo "<h2>Diseños en {$proyectoB->nombre}</h2>";
// foreach ($proyectoB->disenos as $diseno) {
//     echo "<h3>{$diseno->titulo}</h3>";
//     echo "<img src='{$diseno->src}' alt='{$diseno->titulo}' />";
//     echo "<p>{$diseno->descripcion}</p>";
//     echo "<p>Autor: {$diseno->autor}</p>";
//     echo "<p>Tipo de diseño: {$diseno->tipo->nombre}</p>";
//     echo "<p>Proyecto: {$proyectoB->nombre}</p>";
//     echo "<p>Descripción del Proyecto: {$proyectoB->descripcion}</p>";
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SINROD Desgin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="assets/lightbox/css/lightbox.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            fondo: '#3e2e42',
            oscuro: '#423f43',
          },
          fontFamily: {
            montserrat: ['Montserrat', 'sans-serif'],
          },
          backgroundImage:{
            vfondo: "url('/assets/img/rsz_vigo.jpg')"
          }
        }
      },
       variants: {
        extend: {
          fontFamily: ['responsive', 'hover', 'focus'],
        },
      },
      plugins: [
        function({ addBase }) {
          addBase({
            'body': { fontFamily: 'Montserrat, sans-serif' },
          })
        }
      ]
    }
  </script>
</head>
<body class="bg-oscuro bg-cover bg-center text-white h-screen" style="background-image: url('/assets/img/rsz_vigo.jpg');"> 
  <div class="fixed left-0 right-0 z-50 bottom-5 mx-auto p-3 w-fit bg-black/50 rounded-lg flex items-center justify-between gap-5 shadow-lg">
    <a href="">
      <svg xmlns="http://www.w3.org/2000/svg" class="fill-white w-4 h-4 sm:w-5 sm:h-5 hover:w-6 hover:h-6 transition-all" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"/></svg>
    </a>
    <a href="">
      <svg xmlns="http://www.w3.org/2000/svg" class="fill-white w-4 h-4 sm:w-5 sm:h-5 hover:w-6 hover:h-6 transition-all" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
    </a>
    <a href="">
      <svg xmlns="http://www.w3.org/2000/svg" class="fill-white w-4 h-4 sm:w-5 sm:h-5 hover:w-6 hover:h-6 transition-all" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg>
    </a>
    <a href="">
      <svg xmlns="http://www.w3.org/2000/svg" class="fill-white w-4 h-4 sm:w-5 sm:h-5 hover:w-6 hover:h-6 transition-all" viewBox="0 0 496 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/></svg>
    </a>
    <a href="">
      <svg xmlns="http://www.w3.org/2000/svg" class="fill-white w-4 h-4 sm:w-5 sm:h-5 hover:w-6 hover:h-6 transition-all"  viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z"/></svg>
    </a>
    <a href="">
      <svg xmlns="http://www.w3.org/2000/svg" class="fill-white w-4 h-4 sm:w-5 sm:h-5 hover:w-6 hover:h-6 transition-all"  viewBox="0 0 496 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M248 8C111.1 8 0 119.1 0 256s111.1 248 248 248 248-111.1 248-248S384.9 8 248 8zm100.7 364.9c-4.2 0-6.8-1.3-10.7-3.6-62.4-37.6-135-39.2-206.7-24.5-3.9 1-9 2.6-11.9 2.6-9.7 0-15.8-7.7-15.8-15.8 0-10.3 6.1-15.2 13.6-16.8 81.9-18.1 165.6-16.5 237 26.2 6.1 3.9 9.7 7.4 9.7 16.5s-7.1 15.4-15.2 15.4zm26.9-65.6c-5.2 0-8.7-2.3-12.3-4.2-62.5-37-155.7-51.9-238.6-29.4-4.8 1.3-7.4 2.6-11.9 2.6-10.7 0-19.4-8.7-19.4-19.4s5.2-17.8 15.5-20.7c27.8-7.8 56.2-13.6 97.8-13.6 64.9 0 127.6 16.1 177 45.5 8.1 4.8 11.3 11 11.3 19.7-.1 10.8-8.5 19.5-19.4 19.5zm31-76.2c-5.2 0-8.4-1.3-12.9-3.9-71.2-42.5-198.5-52.7-280.9-29.7-3.6 1-8.1 2.6-12.9 2.6-13.2 0-23.3-10.3-23.3-23.6 0-13.6 8.4-21.3 17.4-23.9 35.2-10.3 74.6-15.2 117.5-15.2 73 0 149.5 15.2 205.4 47.8 7.8 4.5 12.9 10.7 12.9 22.6 0 13.6-11 23.3-23.2 23.3z"/></svg>
    </a>
  </div>
<!-- <body class="bg-oscuro bg-vfondo bg-cover bg-center text-white">  -->
    <header class="mt-10">
      <h1 class="font-black text-5xl text-center">SINROD.</h1>
      <nav>
        <ul class="list-none w-full text-xl font-extrabold flex flex-wrap justify-between px-4 sm:text-2xl sm:px-8 md:text-3xl md:px-16 lg:flex-nowrap lg:justify-around lg:px-32">
          <li><a href="" class="hover:underline">HOME</a></li> |
          <li><a href="" class="hover:underline">WHO I AM?</a></li> |
          <li><a href="" class="hover:underline">PROJECTS</a></li> |
          <li><a href="" class="hover:underline">BLOG</a></li> |
          <li><a href="" class="hover:underline">CONTACT</a></li>
        </ul>
      </nav>
    </header>
<main class="overflow-y-scroll scroll-smooth h-screen" style="scrollbar-width: none;">
    <!-- Hero Section: Espacio en blanco -->
  <section class="w-full h-screen"></section>

  <section class="w-full bg-purple-700 text-white font-extrabold flex items-center justify-cente pt-16 pb-16 mb-16">
    <h3 class="text-4xl md:text-6xl lg:text-8xl text-center">
      OHMAI, I LIKE TO BRING IDEAS INTO REAL LIFE :)
    </h3>
  </section>

  <!-- Portfolio Grid -->
  <section class="container mx-auto pb-8">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-8">
      <div class="bg-gray-400 rounded-lg aspect-square flex justify-center items-center">1</div>
      <div class="bg-gray-400 rounded-lg aspect-square flex justify-center items-center">2</div>
      <div class="bg-gray-400 rounded-lg aspect-square flex justify-center items-center">3</div>
      <div class="bg-gray-400 rounded-lg aspect-square flex justify-center items-center">4</div>
      <div class="bg-gray-400 rounded-lg aspect-square flex justify-center items-center">5</div>
      <div class="bg-gray-400 rounded-lg aspect-square flex justify-center items-center">6</div>
    </div>
    <a href="#" class="text-white underline font-bold">I have more design, click here for more -></a>
  </section>

  <!-- Skills Section -->
  <section class="w-full bg-purple-700 text-white font-extrabold pt-16 pb-16 my-16">
    <h3 class="text-4xl md:text-6xl lg:text-8xl text-center">PS-AI-LR-FIGMA-PHP-JS</h3>
  </section>

  <!-- Assets Section -->
  <section class="container mx-auto mb-16">
    <h3 class="text-4xl md:text-6xl lg:text-8xl text-center font-extrabold mb-8">MIS ASSETS HOMS</h3>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
      <div class="bg-gray-400 group hover:underline hover:bg-gradient-to-t from-black to-transparent rounded-lg aspect-square flex items-end justify-center">
        <h3 class="mb-3 font-bold group-hover:underline">Titulo</h3>
      </div>
      <div class="bg-gray-400 group hover:underline hover:bg-gradient-to-t from-black to-transparent rounded-lg aspect-square flex items-end justify-center">
        <h3 class="mb-3 font-bold group-hover:underline">Titulo</h3>
      </div>
      <div class="bg-gray-400 group hover:underline hover:bg-gradient-to-t from-black to-transparent rounded-lg aspect-square flex items-end justify-center">
        <h3 class="mb-3 font-bold group-hover:underline">Titulo</h3>
      </div>
    </div>
  </section>

  <!-- Blog Section -->
    <section class="container mx-auto mb-16">
      <h3 class="text-4xl md:text-6xl lg:text-8xl text-center font-extrabold mb-8">BLOOOOOOOOG</h3>
      <div class="grid grid-cols-1 md:grid-cols-3 grid-rows-2 md:grid-rows-1 gap-4 mb-8">
        <!-- Primer elemento (ocupando 2 columnas en pantallas medianas y grandes) -->
        <a href="" class="bg-gray-400 hover:underline hover:bg-gradient-to-t from-black to-transparent rounded-lg aspect-h-auto aspect-w-full col-span-1 md:col-span-2 relative order-2 md:order-1 group transition-all duration-300 ease-in-out">
          <div class="absolute bottom-0 p-4">
            <h3 class="mb-3 font-bold group-hover:underline transition-all duration-300 ease-in-out">Titulo</h3>
            <p class="font-light">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam fugit molestias nemo reprehenderit dolores
              sapiente, corrupti fuga vel dignissimos distinctio, ipsam, a ad maxime sequi doloribus repellat ducimus. Eum,
              nobis!
            </p>
          </div>
        </a>


        <!-- Segundo elemento (aparecerá abajo en dispositivos móviles) -->
        <a href="" class="bg-gray-400 hover:underline hover:bg-gradient-to-t from-black to-transparent rounded-lg aspect-square col-start-1 md:col-start-3 relative order-1 md:order-2 group transition-all duration-300 ease-in-out">
          <div class="absolute bottom-0 p-4">
            <h3 class="mb-3 font-bold group-hover:underline transition-all duration-300 ease-in-out">Titulo</h3>
          </div>
        </a>
      </div>
      <a href="#" class="text-white underline font-bold">Do u wanna see more? -></a>
    </section>
  </main>
    <footer class="bg-purple-700 py-12 text-white font-extrabold text-center">
      <h4>&reg; 2024, SINROD GRAPHIC DESIGNER</h4>
      <h5>Powered by <a class="underline">SANREYNO</a></h5>
    </footer>
      
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="assets/lightbox/js/lightbox.js"></script>
    <script src="https://kit.fontawesome.com/f0dad9217a.js" crossorigin="anonymous"></script>
</body>
</html>