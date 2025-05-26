<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

// ASSUNTO DA AULA

$q = "SELECT * FROM itens";

$result = $conn->query($q);

// UM RESULTADO
$item = $result->fetch_assoc();

print_r($item);

// TODOS OS RESULTADOS
$itens = $result->fetch_all();

print_r($itens);

$conn->close();