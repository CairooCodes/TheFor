<?php

function getAllLeads()
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

function getServices()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM services order by id asc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getService($id){
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM services where id = $id order by id asc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
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
  $stmt = $pdo->prepare("SELECT * FROM categories WHERE type = 'Album' order by id desc");
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
  $stmt = $pdo->prepare("SELECT Album.id, Album.img, Album.name, c.name as categorie_type FROM Album INNER JOIN categories c ON Album.categorie_id = c.id order by Album.id desc;");
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
  $stmt = $pdo->prepare("SELECT * FROM Album where categorie_id = 1 order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getAlbum2()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM Album where categorie_id = 2 order by id desc");
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