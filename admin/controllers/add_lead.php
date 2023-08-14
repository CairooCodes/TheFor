<?php
require "../../db_config.php";
$name = $_POST['name'];
$email = $_POST['email'];
$whatsapp = $_POST['whatsapp'];
$type = $_POST['type'];
$sql = "INSERT INTO leads (name, email, whatsapp, type) VALUES (?,?,?,?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$name, $email, $whatsapp, $type]);

echo ("
<script>
  window.location = '../../home.php';
  alert('Obrigado pelo cadastro, em breve entraremos em contato');
</script>
");
