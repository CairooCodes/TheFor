<?php
require "../../db_config.php";

$name = $_POST['name'];
$categorie_id = $_POST['categorie_id'];
$imagens = [];

$img = null;

if (isset($_FILES['img']) && $_FILES['img']['error'] == UPLOAD_ERR_OK) {
  $img = file_get_contents($_FILES['img']['tmp_name']);
}

if (!empty($_FILES['imagens']['tmp_name'][0])) {
  foreach ($_FILES['imagens']['tmp_name'] as $key => $tmp_name) {
    $imagens[] = file_get_contents($_FILES['imagens']['tmp_name'][$key]);
  }
}


$sql = "INSERT INTO album (name, categorie_id, img, images) VALUES (?,?,?,?)";
$stmt = $pdo->prepare($sql);
$img_lob = $img . PDO::PARAM_LOB;
$imgs = serialize($imagens) . PDO::PARAM_LOB;
$stmt->execute([$name, $categorie_id, $img_lob, $imgs]);
header('Location: ../fotos.php');
