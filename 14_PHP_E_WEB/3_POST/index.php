<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário com POST</title>
</head>
<body>
    <form action="cadastro.php" method="POST">
        <div>
            <input type="text" name="marca" placeholder="Marca do carro">
        </div>
        <div>
            <input type="text" name="preco" placeholder="Preço do carro">
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" value="Teto solar"> Teto solar
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" value="película"> Película
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" value="Blindado"> Blindado
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>