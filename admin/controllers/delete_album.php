<?php
require "../../db_config.php";

// Verificar se o ID do banner foi enviado
if (!empty($_GET['id'])) {
  // Obter o ID do banner
  $id = $_GET['id'];
  deleteProduct($id);
  header('Location: ../albuns.php');
  exit();
} else {
  // Redirecionar para a página de lista de albuns se o ID do banner não for fornecido
  header('Location: ../albuns.php');
  exit();
}

// Função para excluir um banner pelo ID
function deleteProduct($id)
{
  global $pdo;
  $stmt = $pdo->prepare("DELETE FROM album WHERE id = :id");
  $stmt->bindParam(':id', $id);
  $stmt->execute();
}
