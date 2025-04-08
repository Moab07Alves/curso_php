<?php

$dados = [
    'Moab' => 21,
    'Thaynná' => 17,
    'João' => 46,
    'Mara' => 54,
    'Moany' => 17,
    'Jarbelly' => 36,
    'Sophia' => 12
];
?>

<style>
    table,
    th,
    td {
        border: 1px solid black;
    }
</style>

<table>
    <tr>
        <th>NOME</th>
        <th>IDADE
        </th>
    </tr>
    <?php foreach ($dados as $nome => $idade): ?>
        <tr>
            <td><?php echo $nome; ?></td>
            <td><?php echo $idade; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php
// ------------------------------------------------------------------------------------------ //

$pessoas = [
    'Matheus' => 29,
    'Alexia' => 25,
    'Pedro' => 24,
    'João' => 43
];
?>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    <?php foreach ($pessoas as $nome => $idade): ?>
        <tr>
            <td><?= $nome; ?></td>
            <td><?= $idade; ?></td>
        </tr>
    <?php endforeach; ?>
</table>