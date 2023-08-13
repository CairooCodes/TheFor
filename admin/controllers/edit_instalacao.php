<?php
require "../../db_config.php";
require "../../functions/update.php";
if (!empty($_GET['id'])) {
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $id = $_POST['id'];
    $description = $_POST['description'];
    $link = $_POST['link'];

    $img = null;

    if (isset($_FILES['img']) && $_FILES['img']['error'] == UPLOAD_ERR_OK) {
      $img = file_get_contents($_FILES['img']['tmp_name']);
    }

    updateInstalacao($id, $name, $img, $description, $link);
    header('Location: ../instalacao.php');
    exit();
  }
} else {
  header('Location: ../instalacao.php');
  exit();
}
