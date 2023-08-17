<?php
require "../../db_config.php";
require "../../functions/update.php";
if (!empty($_GET['id'])) {
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $id = $_POST['id'];
    $description = $_POST['description'];

    updateDocumento($id, $name, $description);
    header('Location: ../documentos.php');
    exit();
  }
} else {
  header('Location: ../documentos.php');
  exit();
}
