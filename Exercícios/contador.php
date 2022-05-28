<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="contador_destino.php" method = "POST">

    <h1>Contador</h1>
    <hr>

    <label for="ini" > Início: </label>
    <br>
    <input type="number" name="ini"required>
    <br>
    <label for="fim" > Fim: </label>
    <br>
    <input type="number" name="fim"required>
    <br>
    <label for="incremento" > Incremento: </label>
    <br>
    <input type="number" name="incremento"required>
    <br>

    <button type="submit"> Calcular</button>

    <button type="reset"> Limpar</button>

    </form>
</body>
</html>