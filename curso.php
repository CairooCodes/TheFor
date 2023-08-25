<?php
require "db_config.php";
require "config/helper.php";
require "config/url.class.php";
require "./functions/get.php";

$cursos;
$URI = new URI();

function remove_simbolos_acentos($string)
{
  $string = trim(strtolower($string));
  $a = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýýþÿŔŕ?';
  $b = 'aaaaaaaceeeeiiiidnoooooouuuuybsaaaaaaaceeeeiiiidnoooooouuuuyybyRr-';
  $string = strtr($string, utf8_decode($a), $b);
  $string = str_replace(".", "-", $string);
  $string = preg_replace("/[^0-9a-zA-Z\.]+/", '-', $string);
  return utf8_decode(rtrim($string, "-"));
}


$url = explode("/", $_SERVER['REQUEST_URI']);
$idpost = $url[4];

$idpost2 = "";

$stmt = $pdo->prepare("SELECT * FROM cursos");
$stmt->execute();
if ($stmt->rowCount() > 0) {
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    $string1 = remove_simbolos_acentos(utf8_decode($idpost));
    $string2 = remove_simbolos_acentos(utf8_decode($name));
    if ($string1 == $string2) {
      $idpost2 = $name;
      $curso = getCurso($id);
    }
  }
}


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
  <div class="mx-auto max-w-7xl px-2 pt-4">
    <h1 style="color: #A20202;" class="text-center mt-36 text-3xl flex justify-center font-extrabold leading-9 uppercase tracking-tight dark:text-gray-100 sm:text-4xl sm:leading-10 md:text-left md:text-3xl md:leading-14"><?php echo $curso['name']; ?></h1>
    <div class="grid grid-cols-2 gap-4 mt-2">
      <div>
        <p style="color: #A20202;" class="title-font text-md mb-1 font-semibold">DESCRIÇÃO</p>
        <h2 class="title-font text-md mb-1">
          <?php echo $curso['description']; ?>
        </h2>
        <div class="flex justify-center mt-10">
          <button><a href="https://api.whatsapp.com/send?phone=558699742045&text=Ol%C3%A1,%20gostaria%20de%20um%20atendimento.%20Voc%C3%AA%20pode%20me%20ajudar%3F%20(site)" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;" class="px-6 py-4 text-sm font-semibold bg-color2 rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-300 focus:text-gray-900 focus:bg-gray-200 focus:outline-none focus:shadow-outline text-white shadow-lg">Confira aqui nosso calendário</a></button>
        </div>
      </div>
      <div class="mb-8 mt-4 rounded-xl p-2 shadow-md shadow-blue-200">
        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff;" class="flex justify-center swiper mySwiper2">
          <?php echo "<img class='lazy rounded-md h-full object-cover' src=" . $URI->base('/admin/uploads/cursos') . '/' . $curso['img'] . '>' ?>
        </div>
      </div>

    </div>
  </div>
  <?php include "./components/footer.php" ?>
  <?php include "./components/modal_cursos.php" ?>
  <script src="./assets/js/script.js"></script>
  <script src="./assets/js/lz.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>

</body>

</html>