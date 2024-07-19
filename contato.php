<?php

   /* isso e um comentario */

   if(isset ($_GET[ "bt_nome"])) {
        $nome = $_GET ["bt_nome"];
        $gmail = $_GET ["bt_gmail"];
        $mensagem = $_GET ["bt_mensagem"];
   }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Contato</title>
     
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="meu_estilo.css">
</head>
<body>
    <div class="container text-center">
        <h1> Atividade - Pagina de contato Contato</h1>
    </div>
    <div class="container ">
        <form action="" method="get">
            <label for="">Nome </label>
            <input class="form-control" type="text" name="bt_nome" placeholder="Seu Nome">
            <label for="">Gmail</label>
            <input class="form-control" type="text" name="bt_gmail"  placeholder="gmail@exemplo.com.br">
            <label for="">Mensagem</label>
            <input class="form-control" type="text" name="bt_mensagem" placeholder="Escreva sua mensagem">
           

            <input  class="btn btn-success" type="submit">
            <input  class="btn btn-danger"  type="reset">
        </form>

        <?php
    
    if(isset ($nome)){
        
        echo "<hr>";
        echo "<p>";
        echo "Nome:" . $nome;
        echo "<p>";
        echo "<hr>";
        echo "<p>";
        echo "Gmail:" . $gmail;
        echo "<p>";
        echo "<hr>";
        echo "<p>";
        echo "Mensagem:" . $mensagem;
        echo "<p>";
        echo "<hr>";
    }      
     
?>
         
    </div>

</body>
</html>

    