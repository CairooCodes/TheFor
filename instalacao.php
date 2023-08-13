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
    <div class="mx-auto max-w-7xl px-2 pt-4">
        <div class="flex justify-between lg:justify-center my-2">
            <h1 class="text-2xl font-bold mb-4 text-center">Clube de Descontos</h1>
        </div>
    </div>
    </div>
    </div>
    <section class="flex max-w-6xl mx-auto">
        <div class="lg:w-2/2 mt-12">
            <h1 style="color: #A20202;" class="text-center mt-3 text-3xl font-extrabold leading-9 tracking-tight dark:text-gray-100 sm:text-4xl sm:leading-10 md:text-left md:text-3xl md:leading-14">NOSSA INSTALAÇÕES</h1>
            <?php
            if ($instalacoes > 0) {
                echo '<div id="instalacoes" class="lg:grid lg:grid-cols-2 lg:gap-2">';
                foreach ($instalacoes as $instalacao) {
                    echo '<div class="lg:px-2 card-convenio py-5">';
                    echo "<img class='lazy rounded-md w-full' src='./admin/uploads/instalacao/" . $instalacao['img'] . "'>
          <div class='card-convenio'>";
                    echo '<h1 class="text-center font-bold">' . $instalacao['name'] . ' <span class="text-transparent"></span></h1>';
                    echo '<h1>' . $instalacao['description'] . '</h1>';
                    echo '<div class="justify-center flex"><a href=' . $instalacao['link'] . '><button class="mt-3 btn-convenio bg-red-800 hover:bg-red-600 text-white px-4 py-2 rounded-3xl"><i class="bi bi-geo-alt-fill"></i> VER NO MAPA</button></a></div>';
                    echo '</div></div>';
                }
                echo '</div>';
            }
            ?>
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
    <script src="./assets/js/script.js"></script>
    <script src="./assets/js/lz.js"></script>
    <?php include "components/modal_cursos.php"; ?>
    <?php include "components/modal_form_contato.php"; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body>

</html>