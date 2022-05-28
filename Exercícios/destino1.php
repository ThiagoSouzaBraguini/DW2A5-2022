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
        $titulo = filter_input(INPUT_POST, "titulo", FILTER_SANITIZE_SPECIAL_CHARS);
        $corpo = filter_input(INPUT_POST, "corpo", FILTER_SANITIZE_SPECIAL_CHARS);
        $cor_texto = filter_input(INPUT_POST, "cor_texto", FILTER_SANITIZE_SPECIAL_CHARS);
        $url_img = filter_input(INPUT_POST, "url_img", FILTER_SANITIZE_URL);
        $url_link = $_POST["url_link"];
        $cor_fundo = filter_input(INPUT_POST, "cor_fundo", FILTER_SANITIZE_SPECIAL_CHARS);

        

        echo "<h1>$titulo</h1>";
        echo "<textarea>$corpo</textarea>";

        echo"<img src= '$url_img'>";

        echo"<p><a href= '$url_link'> Link para o w3c </a></p>"
        

    ?>

    <style>
        
        body{
            color: <?= $cor_texto; ?>;    
            background-color: <?= $cor_fundo; ?>;
        }
    
    </style>


</body>
</html>