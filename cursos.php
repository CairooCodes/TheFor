<?php
require_once "db_config.php";
require "config/helper.php";
require "config/url.class.php";
require "./functions/get.php";

$cursos = getCursos();
$URI = new URI();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include "components/heads.php"; ?>
</head>


<body>
    <?php include "./components/navbar.php" ?>
    <div class="mx-auto max-w-7xl px-2 pt-32">
        <h1 class="text-red-800 text-center text-3xl font-extrabold leading-9 tracking-tight sm:text-4xl sm:leading-10 md:text-left md:text-3xl md:leading-14">
            CURSOS THEFOR
        </h1>
        <div class="grid lg:grid-cols-4 gap-8">

            <?php foreach ($cursos as $curso) { ?>
                <div class="mb-8 mt-4 items-center rounded-xl p-2 shadow-md shadow-blue-200">
                    <div class="mr-3">
                        <img class='lazy rounded-md h-52 w-full object-cover' src='./admin/uploads/cursos/<?php echo $curso['img']; ?>'>
                    </div>
                    <div>
                        <h1 class="title-font mb-1 text-center text-lg font-bold uppercase h-12 pt-2">
                            <?php echo $curso['name']; ?>
                        </h1>
                        <div class="flex justify-center">
                            <a href="<?php echo $URI->base('/curso/' . slugify($curso['name'])); ?>">
                                <button class="shadow-cla-blue mt-4 mb-4 rounded-lg bg-red-800 px-4 py-1 text-white drop-shadow-md hover:scale-105">
                                    Saiba Mais
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            <?php }
            ?>
        </div>
    </div>

    <?php include "./components/footer.php" ?>
    <?php include "./components/modal_cursos.php" ?>
    <script src="./assets/js/script.js"></script>
    <script src="./assets/js/lz.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body>

</html>