<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Destino</h1>
    <hr>
    <?php
        $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

        echo "<p> Nome informado: $nome<br>Email: $email</p>";
    
    ?>

    <style>
        body{
            background-color: <?= $nome; ?>;
        }
    
    </style>

</body>
</html>
