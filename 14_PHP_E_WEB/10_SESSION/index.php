<?php
    session_start();

    print_r($_SESSION);

    $_SESSION['nome'] = "Moab";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <h1>Olá Session!</h1>
</body>
</html>