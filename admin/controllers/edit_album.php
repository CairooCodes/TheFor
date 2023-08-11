<?php
require "../../db_config.php";
require "../../functions/update.php";
if (!empty($_GET['id'])) {
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $id = $_POST['id'];
    $categorie_id = $_POST['categorie_id'];
    $img = null;

    if (isset($_FILES['img']) && $_FILES['img']['error'] == UPLOAD_ERR_OK) {
      $img = file_get_contents($_FILES['img']['tmp_name']);
    }

    updateAlbum($id, $name, $img, $categorie_id);
    header('Location: ../albuns.php');
    exit();
  }
} else {
  header('Location: ../albuns.php');
  exit();
}
