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
