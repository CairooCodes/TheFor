<?php
require "../../db_config.php";

$name = $_POST['name'];
$turno = $_POST['turno'];
$curso_data = $_POST['curso_data'];
$description = $_POST['description'];

$dom = new DOMDocument();
$dom->loadHTML($description);

$uploadDir = '../uploads/cursos/';

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

$sql = "INSERT INTO cursos (name, img, turno, curso_data, description) VALUES (?,?,?,?,?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$name, $imgPath, $turno, $curso_data, $description]);  
header('Location: ../cursos.php');
