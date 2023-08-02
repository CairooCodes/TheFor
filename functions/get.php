<?php

function getAllLeads()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM inscricoes order by id desc");
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

function getEsportes()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM esportes order by id desc");
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

function getCategoriesNoticia()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM categories WHERE type = 'Noticia' order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getCategoriesFuncionario()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM categories WHERE type = 'Funcionario' order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getCategoriesConvenios()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM categories WHERE type = 'Convenios' order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getAllFuncionarios()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT funcionario.id,funcionario.name,funcionario.cargo,funcionario.sede , c.name as categorie_type FROM funcionario INNER JOIN categories c ON funcionario.categorie_id = c.id order by funcionario.name asc;");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getFuncionarios()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM funcionario where categorie_id = 1 order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getFuncionarios2()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM funcionario where categorie_id = 2 order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getFuncionarios3()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM funcionario where categorie_id = 3 order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getAllNoticias()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT noticias.id, noticias.img, noticias.name, c.name as categorie_type FROM noticias INNER JOIN categories c ON c.id = noticias.categorie_id order by noticias.id desc;");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getNoticias1()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM noticias where categorie_id = 4 order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getNoticias2()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM noticias where categorie_id = 5 order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getSedes()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM sedes order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getEsporte($id){
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM esportes where id = $id order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getNoticia($id){
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM noticias where id = $id order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getEspacos()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM espacos order by id asc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getAlbum()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM noticias where categorie_id = 6 order by id desc");
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getConvenios()
{
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM convenios order by id asc");
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