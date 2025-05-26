<?php

$host = "localhost";
$user = "root";
$pass = "";
$bd = "cursophp";

$conn = new mysqli($host, $user, $pass, $bd);

// ASSUNTO DA AULA

//$q = "CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100))";

$q = "DROP TABLE teste";

$conn->query($q);

$conn->close();
