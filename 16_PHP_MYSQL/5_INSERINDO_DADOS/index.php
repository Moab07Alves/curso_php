<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

// ASSUNTO DA AULA

$table = "itens";
$nome = "Xícara";
$descricao = "é uma xícara usada de uma cor rosa";

$q = "INSERT INTO $table(nome, descricao) VALUES('$nome', '$descricao')";

$conn->query($q);

$conn->close();
