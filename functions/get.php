<?php

function getLeads()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM leads order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getBanners()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM banners order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getCursos()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM cursos order by id asc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getCurso($id)
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM cursos WHERE id = :id");
  $stmt->bindParam(':id', $id);
  $stmt->execute();
  return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getCategories()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM categories order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getCategoriesAlbum()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM categories WHERE type = 'album' order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getAbout()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM about");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getAllAlbum()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT album.id, album.img, album.name, c.name as categorie_type FROM album INNER JOIN categories c ON album.categorie_id = c.id order by album.id desc;");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getAlbum()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM album");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getAlbum1()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM album where categorie_id = 1 order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getAlbum2()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM album where categorie_id = 2 order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getAlbumId($id){
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM album where id = $id order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getInstalacoes()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM instalacoes order by name asc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getInstalacao($id)
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM instalacoes WHERE id = :id");
  $stmt->bindParam(':id', $id);
  $stmt->execute();
  return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getInscricoes()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM inscricoes order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getDocumentos()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM documentos order by id asc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getDocumentos1()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM documentos where name = 'FORMAÇÃO DE VIGILANTES' order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getDocumentos2()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM documentos where name = 'RECICLAGEM DE VIGILANTES' order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}