<?php
require "../../db_config.php";
require "../../functions/update.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id = $_POST['id'];
  $curso = $_POST['curso'];
  $status = $_POST['status'];
  $cpf = $_POST['cpf'];
  $nome = $_POST['nome'];

  updateInscricao($id, $curso, $status, $nome, $cpf);
  header('Location: ../dashboard.php');
  exit();
}
