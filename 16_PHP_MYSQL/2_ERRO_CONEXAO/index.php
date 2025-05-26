<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophpa";

mysqli_report(MYSQLI_REPORT_OFF);

/*
    A função mysqli_report() é usada para configurar o nível de relatório de erros da biblioteca MySQLi. Você pode controlar se os erros devem:

            1. ser lançados como exceções (Exception)

            2. ser mostrados como avisos (Warning)

            3. ou não serem relatados (modo silencioso)

*/

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_errno) {
    echo "Erro na conexão! <br>";
    echo "Erro: " . mysqli_connect_error() . "<br>";
}

if ($conn->connect_errno) {
    echo "Erro na conexão! <br>";
    echo "Erro: " . $conn->connect_error . "<br>";
}
