<?php
require "db_config.php";
require "config/helper.php";
require "config/url.class.php";
require "./functions/get.php";

$album;
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

$stmt = $pdo->prepare("SELECT * FROM album");
$stmt->execute();
if ($stmt->rowCount() > 0) {
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
    $string1 = remove_simbolos_acentos(utf8_decode($idpost));
    $string2 = remove_simbolos_acentos(utf8_decode($name));
    if ($string1 == $string2) {
      $idpost2 = $name;
      $albuns = getAlbumId($id);
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
    <?php foreach ($albuns as $album) { ?>
      <div>
        <h1 style="color: #A20202;" class="text-center mt-3 text-3xl font-extrabold leading-9 tracking-tight dark:text-gray-100 sm:text-4xl sm:leading-10 md:text-left md:text-3xl md:leading-14"><?php echo $album['name']; ?></h1>
        <div class="mb-8 mt-4 rounded-xl p-2 shadow-md shadow-blue-200">
          <div class="grid lg:grid-cols-4 gap-8">
            <?php
            $images = explode(',', $album['images']);
            foreach ($images as $image) { ?>
              <?php echo "<img src=" . $URI->base('/admin/uploads/album') . '/' . $image . '>' ?>
            <?php
            }
            ?>
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
  <script src="<?php echo $URI->base('./assets/js/lz.js'); ?>"></script>
  <?php include "components/modal_cursos.php"; ?>
  <?php include "components/modal_form_contato.php"; ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body>

</html>