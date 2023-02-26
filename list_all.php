<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/favicon.ico" />
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/50cab0d7de.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Listar pokémon</title>
</head>

<body>

<div class = "miau">
    <button class="botao-navegacao"><a href="index.php"><i class="fa-solid fa-house"></i></a></button>
</div>

    <?php
    require("functions.php");
    $url = new url;
    $list = new List_all;

    $pokemon_id = $_GET["id"];
    ?>

<div class="listar-todos">    
    <?php $list->list_all($pokemon_id, $url); ?>
</div>

<?php

    $previous_list = ($pokemon_id-1);
    $next_list = ($pokemon_id+1);?>


    <div class="barra-navegacao">
        
        <?php if( $pokemon_id > 1 ):?>
            <div>
                <button class="botao-navegacao"><a href = <?php echo $url -> pokemon_list($previous_list); ?>><i class="fa-solid fa-arrow-left"></i></a></button>   
            </div>
        <?php endif;?>  

        <?php if( $pokemon_id < 19 ):?>
            <div>
                <button class="botao-navegacao"><a href = <?php echo $url -> pokemon_list($next_list); ?>><i class="fa-solid fa-arrow-right"></i></a></button>
            </div>
        <?php endif;?>  
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>    

</html>
