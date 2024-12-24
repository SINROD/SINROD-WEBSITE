<?php $titulo = "SINROD CONTACT | "; include_once("../includes/header.php"); ?>
<main class="overflow-y-scroll flex-1 scroll-smooth mt-dynamic pt-10">
  <!--  -->
    <section class="container mx-auto pb-8">
        <h2 class="font-black text-5xl text-center mb-8">CONTACT</h2>
        <p class="text-center leading-7 text-pretty mb-4">Si tienes interes en que trabajemos, que colaboremos o que realicemos algún otro tipo de trabajo :*</p>
        <p class="text-center leading-7 text-pretty mb-4">Contactame por medio de cualquiera de mis redes sociales o de una manera más rápida es por correo.</p>
    </section>
<!-- SECCION DE FORMULARIO -->
    <section class="container mx-auto pb-8">
      <form action="" class="grid gap-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div class="flex flex-col">
            <label for="name" class="font-bold">You alias as creator:</label>
            <input type="name" id="name" class="text-black border border-purple-700 rounded-lg py-3 px-2 focus:outline-none focus:border-purple-700 focus:ring-2 focus:ring-purple-700">
          </div>
          <div class="flex flex-col">
            <label for="email" class="font-bold">E-mail:</label>
            <input type="email" id="email" class="text-black border border-purple-700 rounded-lg py-3 px-2 focus:outline-none focus:border-purple-700 focus:ring-2 focus:ring-purple-700">
          </div>
        </div>
        <div class="flex flex-col">
          <label for="description" class="font-bold">Tell me what it's in u mind:</label>
          <textarea name="description" id="description"  class="text-black border border-purple-700 rounded-lg py-3 px-2 focus:outline-none focus:border-purple-700 focus:ring-2 focus:ring-purple-700 h-40"></textarea>
        </div>
        <div class="flex justify-center">
          <button class="bg-purple-700 hover:bg-purple-600 focus:outline-none rounded-lg px-3 py-2 w-fit" type="submit">Send it uwu</button>
        </div>
      </form>
    </section>

<!-- SECCION DE IMAGENES DE REFERENCIAS DE NUEVO -->
  <section class="container mx-auto pb-8">
          <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
          <div class="bg-gray-400 group hover:underline hover:transform hover:scale-95 transition-all cursor-pointer rounded-lg aspect-video flex items-end justify-center">
          </div>
          <div class="bg-gray-400 group hover:underline hover:transform hover:scale-95 transition-all cursor-pointer rounded-lg aspect-video flex items-end justify-center">
          </div>
          <div class="bg-gray-400 group hover:underline hover:transform hover:scale-95 transition-all cursor-pointer rounded-lg aspect-video flex items-end justify-center">
          </div>
        </div> 
  </section>
</main>
<?php include_once("../includes/footer.php"); ?>