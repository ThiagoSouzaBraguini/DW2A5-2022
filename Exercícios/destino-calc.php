<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Calculadora média</h1>
    <hr>
    <?php
        $nota1 = filter_input(INPUT_POST, "nota1", FILTER_SANITIZE_SPECIAL_CHARS);
        $nota2 = filter_input(INPUT_POST, "nota2", FILTER_SANITIZE_SPECIAL_CHARS);
        $nota3 = filter_input(INPUT_POST, "nota3", FILTER_SANITIZE_SPECIAL_CHARS);

        $media = ($nota1 + $nota2 + $nota3)/3;

        echo "<p> Um aluno com notas: $nota1 , $nota2 e $nota3 tem uma média igual a $media</p>";

        if($media>=6){
            $cor = "Green";
            echo "<p> Com essa média o aluno está <font color=$cor> APROVADO </font> </p>";
        }

        else{
            if($media > 4 && $media < 6){
                $cor = "Yellow";
                echo "<p>Com essa média o aluno está de <font color=$cor> RECUPERAÇÂO </font> </p>";
            }

            else{
                $cor = "Red";
                echo "<p>Com essa média o aluno está <font color=$cor> REPROVADO </font> </p>";
            }
        }
    ?>

</body>
</html>
