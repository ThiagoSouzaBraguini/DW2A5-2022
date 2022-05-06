<?php

use Claudsonm\CepPromise\CepPromise;

require 'vendor/autoload.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="Cep.php" method = "POST">
    
        <h1>Exemplo de CEP com Composer</h1>
        <label for="cep">CEP:</label>
        <br>
        <input type =  "text" id="cep" name="cep" required placeholder = "Somente Números"> 
        <button type = "submit">Enviar</button>
        <button type = "reset">Limpar</button>
    
    </form>

    <?php
        $cep = $_POST["cep"];

        if($cep != null){
            $address = CepPromise::fetch($cep);
            echo "<h1>CEP: $address->zipCode </h1>";
            echo "<p>$address->street </p>";
            echo "<p> $address->district</p>";
            echo "<p> $address->city</p>";
            echo "<p> $address->state </p>";
        }
    ?>
</body>

</html>




