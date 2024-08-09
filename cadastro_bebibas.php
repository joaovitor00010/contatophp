<?php

if(!isset($_SESSION)){
    session_start();
} 

?>

<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro de bebidas</title>
 
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>


</head>

<body>

<div class="container">
    <h1 class="text-center">Cadastro de Bebidas</h1>
    <div class="card float-start"  style="width: 25rem; border: solid white 1px;">
        <img src="img/Coca Cola.webp" height="400rem" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Refrigerante Coca Cola Lata 350 ml preço R$5.00</h5>
            <p class="card-text">  </p>
            <a href="#" class="btn btn-primary">Comprar</a>
        </div>
    </div>

    <div class="card float-start" style="width: 25rem; border: solid white 1px;">
        <img src="img/Fanta laranja.webp" height="400rem" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Refrigerante Fanta Laranja Zero Lata 350ml preço R$5.00</h5>
            <p class="card-text">  </p>
            <a href="#" class="btn btn-primary">Comprar</a>
        </div>
    </div>

    <div class="card" style="width: 25rem; border: solid white 1px;">
        <img src="img/Fanta uva.webp" height="400rem" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Refrigerante Fanta Uva Lata 350ml preço R$5.00</h5>
            <p class="card-text">  </p>
            <a href="#" class="btn btn-primary">Comprar</a>
        </div>
    </div>


</div>

</body>

</html>