<?php
require_once "db_config.php";
require "config/helper.php";
require "config/url.class.php";
require "./functions/get.php";

$albuns1 = getAlbum1();
$albuns2 = getAlbum2();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <?php include "components/heads.php"; ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./assets/css/swiper.css">
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
</head>

<body>
  <?php include "./components/navbar.php" ?>
  <div class="mx-auto max-w-7xl px-2 pt-32">
    <div class="grid lg:grid-cols-3 pt-4">
      <?php foreach ($albuns2 as $album2) { ?>
        <div class="mb-4 overflow-hidden rounded-xl px-4">
          <div class="h-4/5 w-full scale-100">
            <h1 class="text-red-800 text-center text-3xl font-extrabold leading-9 tracking-tight sm:text-4xl sm:leading-10 md:text-left md:text-3xl md:leading-14 pb-4"><?php echo $album2['name']; ?></h1>
            <img class='lazy rounded-md w-full' src='./admin/uploads/album/<?php echo $album2['img'] ?>'>
            <div class="flex justify-center">
              <a href="<?php echo $URI->base('album/' . slugify($album2['name'])); ?>">
                <button class="mt-4 rounded-lg bg-red-800 px-4 py-1 text-white drop-shadow-md hover:scale-105">
                  Veja mais
                </button>
              </a>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      <?php }
      ?>
    </div>
  </div>
  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
      },
    });
  </script>
  <?php include "./components/footer.php" ?>
  <?php include "./components/modal_cursos.php" ?>
  <script src="./assets/js/script.js"></script>
  <script src="./assets/js/lz.js"></script>
  <?php include "components/modal_cursos.php"; ?>
  <?php include "components/modal_form_contato.php"; ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body>

</html>