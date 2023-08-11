<?php
session_start();
require "../db_config.php";
require "../functions/get.php";

if (!isset($_SESSION['id'])) {
  header('Location: login.php');
  exit;
}

$user_id = $_SESSION['id'] ?? null;

$sql = "SELECT name, email, img FROM users WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$user_id]);
$user = $stmt->fetch();

$albuns = getAlbum();
$categories = getCategories();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Fotos THEFOR</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <meta name="author" content="Cairo Felipe Developer">

  <meta property="og:title" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:description" content="" />

  <link rel="stylesheet" href="./assets/css/style.css">
  <link href="../assets/img/logo.png" rel="icon">
  <link href="../assets/img/logo.png" rel="apple-touch-icon">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
  <script src="../assets/js/tw.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.10.2/tinymce.min.js" integrity="sha512-MbhLUiUv8Qel+cWFyUG0fMC8/g9r+GULWRZ0axljv3hJhU6/0B3NoL6xvnJPTYZzNqCQU3+TzRVxhkE531CLKg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
  <?php include "components/sidebar.php" ?>
  <div class="ml-auto mb-6 lg:w-[75%] xl:w-[80%] 2xl:w-[85%]">
    <?php include "components/header.php" ?>
    <div class="max-w-7xl px-4 pb-8 mx-auto py-8">
      </table>
      <div class="shadow-md sm:rounded-lg">
        <form action="./controllers/add_album.php" method="post" enctype="multipart/form-data" class="relative bg-white rounded-lg shadow">

          <div class="flex items-start justify-between border-b rounded-t y-2 px-2">
            <h3 class="text-xl font-semibold text-gray-900">
              Adicionar Fotos
            </h3>
          </div>
 
          <div class="p-6 space-y-6">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label class="block text-sm font-medium text-gray-900">Nome do Albúm</label>
                <input type="text" name="name" id="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full" placeholder="Coloque um nome para o Albúm" required="">
              </div>
              <div class="col-span-6 sm:col-span-3">
                <label class="block text-sm font-medium text-gray-900">Imagem Capa</label>
                <input type="file" id="img" name="img">
                <input type="hidden" name="categorie_id" value="6">
              </div>
            </div>
            <div class="col-span-6 sm:col-span-3">
            <label for="categoria" class="block text-sm font-medium text-gray-900">Categorias de Fotos</label>
            <select class="uppercase shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2" name="categorie_id">
              <?php foreach ($categories as $categorie) { ?>
                <option value="<?php echo $categorie['id']; ?>"><?php echo $categorie['name']; ?></option>
              <?php } ?>
            </select>
            <a href="categorias.php" class="text-sm font-medium text-gray-700"><i class="bi bi-plus-circle"></i> Adicionar Categoria</a>
          </div>
            <!-- <textarea name="description" id="description"></textarea> -->
            <label class="block text-sm font-medium text-gray-900">Imagens</label>
            <input type="file" name="imagens[]" multiple>

            <div class="flex items-center">
              <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Cadastrar Fotos</button>
            </div>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
  <script>
    tinymce.init({
      selector: '#description',
      plugins: 'print preview powerpaste casechange importcss tinydrive searchreplace autolink autosave save directionality advcode visualblocks visualchars fullscreen image link media mediaembed template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists checklist wordcount tinymcespellchecker a11ychecker imagetools textpattern noneditable help formatpainter permanentpen pageembed charmap tinycomments mentions quickbars linkchecker emoticons advtable export',
      toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist checklist | forecolor backcolor casechange permanentpen formatpainter removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media pageembed template link anchor codesample | a11ycheck ltr rtl | showcomments addcomment'
    });
  </script>
</body>

</html>