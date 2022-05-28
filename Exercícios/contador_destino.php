<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        Contador
    </h1>
    <hr>
    <h2>
        Parâmetros Informados:
    </h2>
    
    <?php
        $ini = filter_input(INPUT_POST, "ini", FILTER_SANITIZE_SPECIAL_CHARS);
        $fim = filter_input(INPUT_POST, "fim", FILTER_SANITIZE_SPECIAL_CHARS);
        $incremento = filter_input(INPUT_POST, "incremento", FILTER_SANITIZE_SPECIAL_CHARS);
    
        echo "Início: $ini <br><br>";

        echo "Final: $fim <br><br>";

        echo "Incremento: $incremento <br><hr>";

        if($ini < $fim){
            for($i = $ini; $i <= $fim ; $i+=$incremento){

                echo $i . " ";
            }
        }
        else{
            for($i = $ini; $i >= $fim ; $i-=$incremento){

                echo $i . " ";
            }
        }
    ?>


</body>
</html>