<?php
function sendPostRequest($url, $data) {
    $options = [
        'http' => [
            'header'  => "Content-type: application/json\r\n",
            'method'  => 'POST',
            'content' => json_encode($data),
        ],
    ];
    $context = stream_context_create($options);
    $response = file_get_contents($url, false, $context);

    if ($response === false) {
        return null; // Manejar error en la solicitud
    }

    $decodedResponse = json_decode($response, true);

    if ($decodedResponse === null) {
        return null; // Manejar error en la decodificación JSON
    }

    return $decodedResponse;
}

$url = 'http://sinrod/pai/api-projects.php';

// Solicitud para "home"
$datahome = sendPostRequest($url, ['home' => 'home']);

// Solicitud para "assets"
$dataAssets = sendPostRequest($url, ['tag' => 'assets']);

$urlBlog = 'http://sinrod/pai/api-blog.php';
// Solicitud para "assets"
$dataBlogMain = sendPostRequest($urlBlog, ['main' => 'ok']);


// Eliminar el último elemento de los arreglos, si es necesario
array_pop($datahome);
array_pop($dataAssets);
array_pop($dataBlogMain);

$cantPost = count($dataBlogMain);

?>

<?php 
$titulo = "SINROD PROJECTS | "; 
$url = 'http://sinrod/pai/api-projects.php';
$data = ['home' => 'home'];
$options = [
    'http' => [
        'header'  => "Content-type: application/json\r\n",
        'method'  => 'POST',
        'content' => json_encode($data),
    ],
];
$context  = stream_context_create($options);
$response = file_get_contents($url, false, $context);

$datahome = json_decode($response, true);

$url = 'http://sinrod/pai/api-projects.php';
$data = ['tag' => 'assets'];
$options = [
    'http' => [
        'header'  => "Content-type: application/json\r\n",
        'method'  => 'POST',
        'content' => json_encode($data),
    ],
];
$context  = stream_context_create($options);
$responseAssets = file_get_contents($url, false, $context);

$dataAssets = json_decode($responseAssets, true);

array_pop($datahome);
array_pop($dataAssets);

include_once("includes/header.php"); ?>

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
  <section class="container mx-auto pb-8 px-6 sm:px-8 md:px-16 lg:px-32">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-8">
    <?php foreach ($datahome as $p) { ?>
      <a href="<?= uProjects . $p["slug"]?>">
        <div class="bg-gray-400 hover:transform hover:scale-95 transition-all cursor-pointer rounded-lg aspect-square flex justify-center items-center bg-no-repeat bg-center bg-cover" style="background-image: url('/cms/assets/<?= $p["imgs"][0] ?>');"></div>
      </a>
    <?php } ?>
    </div>
    <a href="<?= pProjects ?>" class="text-white underline font-bold">I have more design, click here for more -></a>
  </section>

  <!-- Skills Section -->
  <section class="w-full bg-purple-700 text-white font-extrabold pt-16 pb-16 my-16">
    <h3 class="text-4xl md:text-6xl lg:text-8xl text-center">PS-AI-LR-FIGMA-PHP-JS</h3>
  </section>

  <!-- Assets Section -->
  <section class="container mx-auto px-6 sm:px-8 md:px-16 lg:px-32 mb-16">
    <h3 class="text-4xl sm:text-5xl md:text-6xl lg:text-8xl text-center font-extrabold mb-8">
      MIS ASSETS HOMS
    </h3>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
    <?php foreach ($dataAssets as $assets) { ?>
      <a href="<?= uProjects . $assets["slug"] ?? '404' ?>">
        <div class="bg-gray-400 group hover:underline hover:transform hover:scale-95 transition-transform duration-300 cursor-pointer rounded-lg aspect-square flex items-end justify-center bg-no-repeat bg-center bg-cover" style="background-image: url('/cms/assets/<?= $assets["imgs"][0] ?>');">
          <!-- <h3 class="mb-3 font-bold group-hover:underline"><?= $assets["titulo"] ?></h3> -->
        </div>
      </a>
    <?php }  ?>
    </div>
  </section>


  <!-- Blog Section -->

<?php if ($cantPost > 0) { ?>
  <section class="container mx-auto px-6 sm:px-8 md:px-16 lg:px-32 mb-16">
    <h3 class="text-4xl md:text-6xl lg:text-8xl text-center font-extrabold mb-8">BLOOOOOOOOG</h3>
    <div class="grid grid-cols-1 md:grid-cols-3 grid-rows-2 md:grid-rows-1 gap-4 mb-8 h-52">
      <!-- Primer elemento -->
      <?php if (isset($dataBlogMain[0])) { ?>
      <a href="<?= uPosts.$dataBlogMain[0]["slug"] ?? '404' ?>" 
         class="bg-gray-400 hover:underline hover:transform hover:scale-95 transition-all cursor-pointer rounded-lg aspect-h-auto aspect-w-full <?= ($cantPost > 1) ? 'col-span-1 md:col-span-2' : 'col-span-3' ?> relative order-2 md:order-1 group transition-all duration-300 ease-in-out bg-no-repeat bg-center bg-cover" 
         style="background-image: url('/cms/assets/<?= $dataBlogMain[0]['img_url'] ?? 'default-image.jpg' ?>');"
         aria-label="<?= $dataBlogMain[0]['titulo'] ?>">
        <div class="absolute bottom-0 p-4 w-full bg-black/60 rounded-b-lg">
          <h3 class="mb-3 font-bold group-hover:underline transition-all duration-300 ease-in-out"><?= $dataBlogMain[0]['titulo'] ?></h3>
          <p class="font-light truncate"><?= $dataBlogMain[0]['descripcion'] ?></p>
        </div>
      </a>
      <?php } ?>

      <!-- Segundo elemento -->
      <?php if (isset($dataBlogMain[1])) { ?>
      <a href="<?= uPosts.$dataBlogMain[1]["slug"] ?? '#' ?>" 
         class="bg-gray-400 hover:underline hover:transform hover:scale-95 transition-all cursor-pointer rounded-lg aspect-square col-start-1 md:col-start-3 relative order-1 md:order-2 group transition-all duration-300 ease-in-out bg-no-repeat bg-center bg-cover" 
         style="background-image: url('/cms/assets/<?= $dataBlogMain[1]['img_url'] ?? 'default-image.jpg' ?>');"
         aria-label="<?= $dataBlogMain[1]['titulo'] ?>">
        <div class="absolute bottom-0 p-4">
          <h3 class="mb-3 font-bold group-hover:underline transition-all duration-300 ease-in-out"><?= $dataBlogMain[1]['titulo'] ?></h3>
          <p class="font-light inline-block md:hidden lg:inline-block"><?= $dataBlogMain[1]['descripcion'] ?></p>
        </div>
      </a>
      <?php } ?>
    </div>
    <a href="<?= pBlog ?>" class="text-white underline font-bold">Do u wanna see more? -></a>
  </section>
<?php } ?>


</main>
<?php include_once("includes/footer.php"); ?>