<?php
require "../../db_config.php";
require "../../functions/update.php";
if (!empty($_GET['id'])) {
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $id = $_POST['id'];
    $description = $_POST['description'];
    $turno = $_POST['turno'];
    $curso_data = $_POST['curso_data'];


    $img = null;

    if (isset($_FILES['img']) && $_FILES['img']['error'] == UPLOAD_ERR_OK) {
      $img = file_get_contents($_FILES['img']['tmp_name']);
    }

    updateCurso($id, $name, $img, $description, $turno, $curso_data);
    header('Location: ../cursos.php');
    exit();
  }
} else {
  header('Location: ../cursos.php');
  exit();
}
