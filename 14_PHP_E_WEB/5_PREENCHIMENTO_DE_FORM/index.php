<?php

$usuraio = [
    'nome' => 'Moab',
    'idade' => 21,
    'profissao' => 'Programador'
];

if ($usuraio) {
    $nome = $usuraio['nome'];
    $idade = $usuraio['idade'];
    $profissao = $usuraio['profissao'];
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preenchimento de formulário</title>
</head>

<body>
    <form>
        <div>
            <input type="text" name="nome" value=<?= $nome?> placeholder="Digite seu nome">
        </div>
        <div>
            <input type="text" name="idade" value=<?= $idade?> placeholder="Digite sua idade">
        </div>
        <div>
            <input type="text" name="profissao" value=<?= $profissao ?> placeholder="Digite sua profissão">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>

</html>