<?php
require "db_config.php";
require "config/helper.php";
require "config/url.class.php";
require "./functions/get.php";
$banners = getBanners();
$cursos = getCursos();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <?php include "components/heads.php"; ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./assets/css/swiper.css">
</head>

<body>
  <?php include "components/navbar.php"; ?>
  <?php include "components/banners.php"; ?>
  <?php include "components/cursos.php"; ?>
  <!-- component -->
  <div class="container mx-auto p-5">
    <div class="bg-color2 text-white text-center py-10 px-20 rounded-lg shadow-md relative">
      <img src="./assets/img/logo.png" class="w-20 mx-auto mb-4 rounded-lg">
      <h3 class="text-2xl font-semibold mb-4">Faça já sua pré-inscrição</h3>
      <div class="flex items-center justify-center">
        <a href="pre-inscricao.php">
          <span class="border border-white bg-white text-color2 px-1 py-2 rounded cursor-pointer">PRÉ-INSCRIÇÃO AQUI</span>
        </a>
      </div>
      <div class="w-12 h-12 bg-white rounded-full absolute top-1/2 transform -translate-y-1/2 left-0 -ml-6"></div>
      <div class="w-12 h-12 bg-white rounded-full absolute top-1/2 transform -translate-y-1/2 right-0 -mr-6"></div>

    </div>
  </div>
  <?php include "components/footer.php"; ?>
  <?php include "components/modal_cursos.php"; ?>

  <script src="./assets/js/script.js"></script>
  <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
  <script>
    var swiper = new Swiper(".swiper_banners", {
      loop: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination-banners-main",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
  <script>
    var swiper = new Swiper(".swiper_posts", {
      loop: true,
      freeMode: true,
      breakpoints: {
        300: {
          slidesPerView: 1.2,
          spaceBetween: 20,
        },
        640: {
          slidesPerView: 2,
          spaceBetween: 10,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 20,
        },
      },
    });
  </script>
  <script>
    var swiperup = new Swiper(".mySwiper-tumb", {
      spaceBetween: 10,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".mySwiper-tumbUpper", {
      spaceBetween: 10,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      thumbs: {
        swiper: swiperup,
      },
    });
  </script>
</body>

</html>