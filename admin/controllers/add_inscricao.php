<?php
require "../../db_config.php";
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$escolaridade = $_POST['escolaridade'];
$data_nascimento = $_POST['data_nascimento'];
$whatsapp = $_POST['whatsapp'];
$curso = $_POST['curso'];

$sql = "INSERT INTO inscricoes (nome, cpf, endereco, escolaridade, data_nascimento, whatsapp, curso) VALUES (?,?,?,?,?,?,?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$nome, $cpf, $endereco, $escolaridade, $data_nascimento, $whatsapp, $curso]);

echo ("
<script>
  window.location = '../../home.php';
  alert('Parabéns, você acabou de efetuar sua pré-inscrição!');
</script>
");
