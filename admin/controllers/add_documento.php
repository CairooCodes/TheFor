<?php
require "../../db_config.php";

$name = $_POST['name'];
$description = $_POST['description'];

$dom = new DOMDocument();
$dom->loadHTML($description);

$new_description = $dom->saveHTML();

$sql = "INSERT INTO documentos (name, description) VALUES (?,?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$name, $description]);  
header('Location: ../documentos.php');