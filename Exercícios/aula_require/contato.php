<?php
    include 'header.php'
?>

<div class="bg-light p-4 mb-4 rounded">
    <h1 class="text-center">
        Formulário para contato
    </h1>

    <form action="destino.php" method = "POST">

    <div class = "row">
        <div class = "col">
        <label for="Nome">Nome:</label> <br>
        <input type="text" name ="nome" placeholder = "Nome" class = "col-6">
    </div> 
    
    <div>
        <label for="E-mail">E-mail:</label> <br>
        <input type="email" name="email" id="" placeholder = "E-mail" class = "col-6"> 
        <br><br>
    </div>

    <div class="form-group">
    <label for="">Mensagem</label>
    <textarea class="form-control" name = "mensagem" id="exampleFormControlTextarea1" rows="3"></textarea>
    <br>
    </div>

    <div class = "">
    <button type="submit" class="btn btn-primary center" >Enviar</button>
    <button type="reset" class="btn btn-warning center">Limpar</button>
    </div>

    </form>

    <?php
    ?>


</div>

<?php
    include 'footer.php'
?>