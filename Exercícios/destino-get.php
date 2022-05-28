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
        $nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_GET, "email", FILTER_SANITIZE_EMAIL);
        $cor = filter_input(INPUT_GET, "cor", FILTER_SANITIZE_EMAIL);

        echo "<p> Nome informado: $nome<br>Email: $email</p>";
    
    ?>

    <p> 
        <a href="destino-get.php?nome=Thiago&email=thiago@gmail.com&cor=lightblue">
                nome:thiago  e-mail: thiago@gmail.com
        </a>
    </p>

    <p> 
        <a href="destino-get.php?nome=José&email=joseSilva@gmail.com&cor=<?=$cor?>">
                outro link
        </a>
    </p>

    <p> 
        <a href="destino-get.php?nome=<?=$nome?>&email=<?=$email?>&cor=lightblue">
                cor: lighblue
        </a>
    </p>

    <p> 
        <a href="destino-get.php?nome=<?=$nome?>&email=<?=$email?>&cor=yellow">
                cor: amarelo
        </a>
    </p>


    <p> 
        <a href="destino-get.php?nome=<?=$nome?>&email=<?=$email?>&cor=orange">
                cor: orange
        </a>
    </p>
    


    <style>
        body{
            background-color: <?= $cor; ?>;
        }
    
    </style>

</body>
</html>
