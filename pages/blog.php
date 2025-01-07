<?php 
$titulo = "SINROD'S BLOG | "; 
$url = 'http://sinrod/pai/api-blog.php';
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
// var_dump($data);
// die();

include_once("../includes/header.php"); ?>
<main class="overflow-y-scroll flex-1 scroll-smooth mt-dynamic pt-10 pb-10">
    <section class="container mx-auto pb-8">
        <h2 class="font-black text-5xl text-center">BLOG</h2>
        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus eligendi unde quod recusandae, non molestiae corrupti dolores possimus quis placeat deserunt officia illo vel maxime tempore earum, quia sapiente distinctio.</p>
    </section>

    <section class="container mx-auto">

      <?php foreach ($data as $key => $post) { ?>
        <a href="<?= uPosts.$post["slug"] ?>">
          <div class="flex gap-4 flex-wrap p-4 group">
            <div id="imagen" class="bg-white aspect-video h-56 w-full md:w-auto flex justify-center items-end rounded-lg hover:transform hover:scale-95 transition-transform duration-300 cursor-pointer group-hover:scale-95 bg-no-repeat bg-no-repeat bg-center bg-cover" style="background-image: url(/cms/assets/<?= $post["img_url"] ?>);">
              <div class="flex flex-row h-fit mb-3 gap-3">
                <?php foreach ($post["tags"] as $key => $tag) {?>
                  <p class="rounded-xl bg-purple-700 px-3 py-2 text-xs shadow-lg"><?= $tag ?></p>
                <?php } ?>
              </div>
            </div>
            <div>
              <h3 class="text-3xl font-black hover:underline cursor-pointer group-hover:underline transition-all duration-300"><?= $post["titulo"] ?></h3>
              <h5><?php echo date('d-m-Y', strtotime($post["fecha_creado"])); ?></h5>
              <p class="font-medium text-xl"><?= $post["descripcion_corta"]?></p>
            </div>
          </div>
        </a>
        
        <?php if ($key == array_key_last($data)) { ?>
          <hr>
        <?php } ?>
      <?php } ?>


    </section>
</main>
<?php include_once("../includes/footer.php"); ?>