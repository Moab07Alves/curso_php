<?php

$arr = [
    'Moab' => 100,
    'João' => 75,
    'Maria' => 89,
    'José' => 34,
    'Ana' => 55,
    'Paula' => 12
];

arsort($arr);

?>

<ol>
    <?php foreach ($arr as $nome => $valor) : ?>
        <li><?= $nome; ?></li>
    <?php endforeach; ?>
</ol>

<br>

<?php

$ranking = [
    "Matheus" => 200,
    "João" => 54,
    "Pedro" => 444,
    "Maria" => 239,
    "Joana" => 123,
    "Henrique" => 12
];

arsort($ranking);

?>

<h1>Ranking:</h1>

<ol>
    <?php foreach ($ranking as $pessoa => $pontuacao): ?>
        <li><?= $pessoa; ?> -> <?= $pontuacao; ?></li>
    <?php endforeach; ?>
</ol>