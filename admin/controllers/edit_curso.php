<?php
require "../../db_config.php";
require "../../functions/update.php";
if (!empty($_GET['id'])) {
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $turno = $_POST['turno'];
    $curso_data = $_POST['curso_data'];
    $description = $_POST['description'];


    $img = null;

    if (isset($_FILES['img']) && $_FILES['img']['error'] == UPLOAD_ERR_OK) {
      $img = file_get_contents($_FILES['img']['tmp_name']);
    }

    updateCurso($id, $name, $img, $turno, $curso_data, $description);
    header('Location: ../cursos.php');
    exit();
  }
} else {
  header('Location: ../cursos.php');
  exit();
}
