<?php
require "../../db_config.php";

$name = $_POST['name'];
$description = $_POST['description'];
$link = $_POST['link'];

$dom = new DOMDocument();
$dom->loadHTML($description);

$uploadDir = '../uploads/instalacao/';

$imgPath = null;

if (isset($_FILES['img']) && $_FILES['img']['error'] == UPLOAD_ERR_OK) {
  $imgTmpName = $_FILES['img']['tmp_name'];
  $imgName = $_FILES['img']['name'];

  $uniqueName = uniqid() . '_' . $imgName;

  if (move_uploaded_file($imgTmpName, $uploadDir . $uniqueName)) {
    $imgPath = $uniqueName;
  } else {
    echo 'Erro ao fazer o upload da imagem.';
    exit;
  }
}

$new_description = $dom->saveHTML();

$sql = "INSERT INTO instalacoes (name, description, link, img) VALUES (?,?,?,?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$name, $description, $link, $imgPath]);  
header('Location: ../instalacao.php');
