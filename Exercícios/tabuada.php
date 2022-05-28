<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="tabuada.php" method = "GET">

        <h1>Tabuada</h1>
        <hr>
    
        <label for="numero" > Número: </label>
        <br>
        <input type="number" name="numero"required>
        <br>
        <button type="submit"> Cadastrar</button>
        
        <button type="reset"> Limpar</button>

    </form>
    
    <?php
    
    

    if(isset($_GET["numero"])){

        $num = filter_input(INPUT_GET, "numero", FILTER_SANITIZE_SPECIAL_CHARS);

       

        echo "<br><hr>";
        echo "<h1>Tabuada do $num </h1> </br> ";


        for($x = 1; $x<=10; $x++){
            
            echo "$num x $x = " . $num * $x . "<br>";

        }

    }
    ?>


</body>
</html>