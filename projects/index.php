<?php
// URL de la API
// $url = 'https://sanreyno.com/api-consume.php';
$url = "http://sinrod/pai/api-projects.php";
$slug = $_GET["slug"];
$data = ['slug' => $slug];
$options = [
    'http' => [
        'header'  => "Content-type: application/json\r\n",
        'method'  => 'POST',
        'content' => json_encode($data),
    ],
];
$context  = stream_context_create($options);
$response = file_get_contents($url, false, $context);

$data = json_decode($response, true);
include_once("../includes/header.php"); 
?>
<main class="overflow-y-scroll flex-1 scroll-smooth mt-dynamic pt-10">
  <!--  -->
    <section class="container mx-auto pb-8">
        <h2 class="font-black text-5xl text-center mb-8"><?= $data["titulo"] ?></h2>
        <p class="text-center leading-7 text-pretty mb-4">
            <?php foreach ($data['tags'] as $t) { ?>            
                <span class="rounded-xl bg-purple-700 px-3 py-2"><?= $t ?></span>
            <?php } ?>
        </p>
        <p class="text-center leading-7 text-pretty mb-4"><?= $data["colaboraciones"] ?></p>
        <p class="text-center leading-7 text-pretty mb-4"><?= $data["descripcion"] ?></p>
    </section>
    <section class="container mx-auto pb-8 flex gap-4 flex-col">
        <?php $imgnum = 0; foreach ($data["imgs"] as $url) { ?>
            <img src="/cms/assets/<?= $url ?>" alt="<?= $data["titulo"] . "-" . $imgnum; ?>" class="w-full cursor-pointer" onclick="showModal('/cms/assets/<?= $url ?>')">
        <?php $imgnum++; } ?>
    </section>
</main>
<?php include_once("../includes/footer.php"); ?>