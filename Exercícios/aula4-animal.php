<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $nome = $_GET["nome"];
        $descricao = $_GET["descricao"];
        $img = $_GET["img"];

        echo "<p> Você clicou no $nome </p>" ;
    
        echo "<p>Esse animal é um $descricao </p>";

        echo "<img src = $img>";
    
    
    
    ?>
</body>
</html>