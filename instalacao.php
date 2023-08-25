<?php
require_once "db_config.php";
require "config/helper.php";
require "config/url.class.php";
require "./functions/get.php";

$instalacoes = getInstalacoes();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <?php include "components/heads.php"; ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./assets/css/swiper.css">
</head>

<body>
  <?php include "./components/navbar.php" ?>
  <section class="flex max-w-6xl mx-auto">
    <div class="lg:w-2/2 mt-22 lg:mt-32 p-5">
      <div id="instalacoes" class="lg:grid lg:grid-cols-2 lg:gap-2 justify-center">
        <div><img class='lazy rounded-md w-full' src='./admin/uploads/instalacao/teresina.jpg'></div>
        <div>
          <h1><span class="text-color2 font-bold">Localização: </span> R. 24 de Janeiro, 758 - Centro (Sul), Teresina - PI, 64001-230</h1>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15896.167401720955!2d-42.8085347!3d-5.0969362!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x78e37145984c8ed%3A0x2cc1b5611aa2268c!2sTHE%20FOR%20CENTRO%20DE%20FORMA%C3%87%C3%83O%20DE%20VIGILANTES!5e0!3m2!1spt-BR!2sbr!4v1692982866126!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </section>
  <script>
    const buttons = document.querySelectorAll('button[data-category]');
    const instalacoes = document.getElementById('instalacoes').children;

    buttons.forEach(button => {
      button.addEventListener('click', () => {
        const category = button.getAttribute('data-category');
        filterProducts(category);
      });
    });

    function filterProducts(category) {
      for (let i = 0; i < products.length; i++) {
        const product = products[i];
        const productCategory = product.innerText.match(/\((.*?)\)/)[1].toLowerCase();

        if (category === 'all' || productCategory === category) {
          product.style.display = 'block';
        } else {
          product.style.display = 'none';
        }
      }
    }
  </script>
  <script>
    const dropdown = document.getElementById('dropdownAction');
    const categoryButtons = dropdown.getElementsByTagName('button');

    for (let i = 0; i < categoryButtons.length; i++) {
      categoryButtons[i].addEventListener('click', function() {
        dropdown.classList.add('hidden');
      });
    }
  </script>
  <?php include "./components/footer.php" ?>
  <?php include "./components/modal_cursos.php" ?>
  <script src=" ./assets/js/script.js"></script>
  <script src="./assets/js/lz.js"></script>
  <?php include "components/modal_cursos.php"; ?>
  <?php include "components/modal_form_contato.php"; ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body>

</html>