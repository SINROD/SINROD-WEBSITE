<?php include_once("includes/header.php"); ?>
<!-- <main class="overflow-y-scroll scroll-smooth h-screen" style="scrollbar-width: none;"> -->
<main class="overflow-y-scroll flex-1 scroll-smooth mt-16">
    <!-- Hero Section: Espacio en blanco -->
  <section class="w-full h-screen"></section>

  <section class="w-full bg-purple-700 text-white font-extrabold flex items-center justify-cente pt-16 pb-16 mb-16">
    <h3 class="text-4xl md:text-6xl lg:text-8xl text-center">
      OHMAI, I LIKE TO BRING IDEAS INTO REAL LIFE :)
    </h3>
  </section>

  <!-- Portfolio Grid -->
  <section class="container mx-auto pb-8 px-32">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-8">
      <div class="bg-gray-400 rounded-lg aspect-square flex justify-center items-center">1</div>
      <div class="bg-gray-400 rounded-lg aspect-square flex justify-center items-center">2</div>
      <div class="bg-gray-400 rounded-lg aspect-square flex justify-center items-center">3</div>
      <div class="bg-gray-400 rounded-lg aspect-square flex justify-center items-center">4</div>
      <div class="bg-gray-400 rounded-lg aspect-square flex justify-center items-center">5</div>
      <div class="bg-gray-400 rounded-lg aspect-square flex justify-center items-center">6</div>
    </div>
    <a href="http://sinrod/pages/projects" class="text-white underline font-bold">I have more design, click here for more -></a>
  </section>

  <!-- Skills Section -->
  <section class="w-full bg-purple-700 text-white font-extrabold pt-16 pb-16 my-16">
    <h3 class="text-4xl md:text-6xl lg:text-8xl text-center">PS-AI-LR-FIGMA-PHP-JS</h3>
  </section>

  <!-- Assets Section -->
  <section class="container mx-auto px-32 mb-16">
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
    <section class="container mx-auto px-32 mb-16">
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
            <p class="font-light inline-block md:hidden lg:inline-block">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam fugit molestias nemo reprehenderit dolores
              sapiente, corrupti fuga vel dignissimos distinctio, ipsam, a ad maxime sequi doloribus repellat ducimus. Eum,
              nobis!
            </p>
          </div>
        </a>
      </div>
      <a href="http://sinrod/pages/blog" class="text-white underline font-bold">Do u wanna see more? -></a>
    </section>
</main>
<?php include_once("includes/footer.php"); ?>