<?php

$host = "localhost";
$db = "cursophp";
$user = "root";
$pass = "";

$conn = new PDO("mysql:localhost=$host;dbname=$db", $user, $pass);

// ASSUNTO DA AULA
$id = 5;

$stmt = $conn->prepare("SELECT * FROM itens WHERE id > :id");

$stmt->bindParam(":id", $id);

$stmt->execute();

$data = $stmt->fetch(PDO::FETCH_ASSOC);

$itens = $stmt->fetchAll(PDO::FETCH_ASSOC);

print_r($data);
print_r($itens);
