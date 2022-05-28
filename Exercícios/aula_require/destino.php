<?php
    require "header.php"
?>

<div class="bg-light p-4 mb-4 rounded">
    <h1 class="text-center">
        Formulário para contato
    </h1>
</div>


<?php

    $_0 = 2;

    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
    $mensagem = filter_input(INPUT_POST, "mensagem", FILTER_SANITIZE_SPECIAL_CHARS);
    date_default_timezone_set('America/Sao_Paulo');
    $data = date('d-m-Y');
    $hora = date('H:i:s');

    echo "Nome: $nome <br><br>";

    echo "E-mail: $email <br><br>";

    echo "Mensagem: $mensagem <br><hr>";

    echo "Data: $data - $hora";

    $arquivo = fopen("C:\\xampp\\htdocs\\contatos\\contato$nome.txt","w");

    $texto = "contato via site
    Nome: $nome
    E-mail: $email
    Mensagem: $mensagem
    Data: $data - $hora";

    fwrite($arquivo,$texto);


?>


<form action="contato.php">
<button type="" class="btn btn-primary center" >Voltar</button>
</form>

<?php
    require "footer.php"
?>