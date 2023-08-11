<?php
function updateCategorie($id, $name)
{
  global $pdo;
  if ($id) {
    $stmt = $pdo->prepare("UPDATE categories SET name = :name WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':id', $id);
  } else {
    $stmt = $pdo->prepare("UPDATE categories SET name = :name WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':id', $id);
  }
  $stmt->execute();
}

function updateLeads($id, $categoria, $status, $cpf, $nome, $sexo)
{
  global $pdo;
  $stmt = $pdo->prepare("UPDATE inscricoes SET categoria = :categoria, status = :status, nome = :nome, cpf = :cpf, sexo = :sexo WHERE id = :id");
  $stmt->bindParam(':categoria', $categoria);
  $stmt->bindParam(':status', $status);
  $stmt->bindParam(':cpf', $cpf);
  $stmt->bindParam(':nome', $nome);
  $stmt->bindParam(':sexo', $sexo);
  $stmt->bindParam(':id', $id);
  $stmt->execute();
}

function updateBanner($id, $name, $img)
{
  global $pdo;
  if ($img) {
    $img_lob = $img . PDO::PARAM_LOB;
    $stmt = $pdo->prepare("UPDATE banners SET name = :name, img=:img WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindValue(':img', $img_lob, PDO::PARAM_LOB);
    $stmt->bindParam(':id', $id);
  } else {
    $stmt = $pdo->prepare("UPDATE banners SET name = :name WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':id', $id);
  }
  $stmt->execute();
}

function updateProducts($id, $esporte, $description, $img)
{
  global $pdo;
  if ($img) {
    $img_lob = $img . PDO::PARAM_LOB;
    $stmt = $pdo->prepare("UPDATE esportes SET esporte = :esporte, description = :description, img=:img WHERE id = :id");
    $stmt->bindParam(':esporte', $esporte);
    $stmt->bindParam(':description', $description);
    $stmt->bindValue(':img', $img_lob, PDO::PARAM_LOB);
    $stmt->bindParam(':id', $id);
  } else {
    $stmt = $pdo->prepare("UPDATE esportes SET esporte = :esporte, description = :description WHERE id = :id");
    $stmt->bindParam(':esporte', $esporte);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':id', $id);
  }
  $stmt->execute();
}

function updateAbout($id, $texto)
{
  global $pdo;
  $stmt = $pdo->prepare("UPDATE about SET texto=:texto WHERE id = :id");
  $stmt->bindParam(':texto', $texto);
  $stmt->bindParam(':id', $id);
  $stmt->execute();
}

function updateFotos($id, $name, $img,)
{
  global $pdo;
  if ($img) {
    $img_lob = $img . PDO::PARAM_LOB;
    $stmt = $pdo->prepare("UPDATE album SET name = :name, img=:img WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindValue(':img', $img_lob, PDO::PARAM_LOB);
    $stmt->bindParam(':id', $id);
  } else {
    $stmt = $pdo->prepare("UPDATE album SET name = :name WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':id', $id);
  }
  $stmt->execute();
}