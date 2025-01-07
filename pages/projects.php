<?php 
$titulo = "SINROD PROJECTS | "; 
$url = 'http://sinrod/pai/api-projects.php';
$options = [
    'http' => [
        'header'  => "Content-type: application/json\r\n",
        'method'  => 'POST',
        'content' => json_encode(JSON_UNESCAPED_UNICODE),
    ],
];
$context  = stream_context_create($options);
$response = file_get_contents($url, false, $context);

$data = json_decode($response, true);
array_pop($data);

include_once("../includes/header.php"); ?>
<main class="overflow-y-scroll flex-1 scroll-smooth mt-dynamic pt-10">
  <!--  -->
    <section class="container mx-auto pb-8">
        <h2 class="font-black text-5xl text-center mb-8">PROJECTS</h2>
        <p class="text-center leading-7 text-pretty mb-4">Tratar y buscar el contar algo es una lucha constante en cada trabajo que se realiza, para que se logre poder apreciar cada detalle visto en un mismo diseño y poder conectar con las personas.</p>
        <p class="text-center leading-7 text-pretty mb-4">Lo siguiente que verás son proyectos conceptuales o proyectos sueltos de varias disciplinas, como .</p>
    </section>
    <section class="container mx-auto pb-8">
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        <?php foreach ($data as $proyecto) {?>
          <a href="<?= uProjects.$proyecto["slug"] ?>">
            <div class="bg-gray-400 group hover:underline hover:transform hover:scale-95 transition-transform duration-300 cursor-pointer rounded-lg aspect-square flex items-end justify-center bg-no-repeat bg-center	bg-cover" style="background-image: url(<?= "/cms/assets/".$proyecto["imgs"][0] ?>);">
              <h3 class="mb-3 font-bold group-hover:underline"><?= $proyecto["titulo"] ?></h3>
            </div>
          </a>
        <?php } ?>
      </div>
    </section>
</main>
<?php include_once("../includes/footer.php"); ?>