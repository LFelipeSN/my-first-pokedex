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


<div class = "botao-home">
    <a class="botao-navegacao" href="index.php"><i class="fa-solid fa-house"></i></a>
</div>
<div class = tipo-filtro-listar>
    <?php if( !(empty($_POST["type_pokemon"])) ):
        echo "Tipo : ". $_POST["type_pokemon"]; 
    endif;?>    
</div> 

<?php
require("functions.php");

$url = new url;
$list = new List_all;

$pokemon_id = $_POST["id"];
$type_pokemon = "";

if( !(empty($_POST["type_pokemon"])) ):?>
    <?php $type_pokemon = $_POST["type_pokemon"];
endif;

?>
<form action="list_all.php" method="POST"> 
    <input type="hidden" name="id" value=<?php echo $pokemon_id;?>>
    <label class="m-2" for="type_pokemon">Tipos:   
    <select name="type_pokemon" id="type_pokemon">
        <option value= "" selected>Todos</option>
        <option value="Fire">Fogo</option>
        <option value="Water">Água</option>
        <option value="Poison">Veneno</option>
        <option value="Electric">Eletrico</option>
        <option value="Grass">Planta</option>
        <option value="Bug">Inseto</option>
        <option value="Flying">Voador</option>
        <option value="Ground">Terra</option>
        <option value="Psychic">Psiquico</option>
        <option value="Fighting">Lutador</option>
        <option value="Fairy">Fada</option>
        <option value="Rock">Rocha</option>
        <option value="Steel" disabled >Metal</option>
    </select>
    <button class = "btn bg-primary" type="submit">Filtrar</button>
</form>    




<div class="listar-todos">    
    <?php $list->list_all($pokemon_id, $type_pokemon); ?>
</div>

<?php

    $previous_list = ($pokemon_id-8);
    $next_list = ($pokemon_id+8);?>

<!-- <footer>
    <div class="barra-navegacao">
        
        <?php if( $pokemon_id > 8 ):?>
            <form action="list_all.php" method="POST"> 
                <input type="hidden" name="id" value= <?php echo $previous_list; ?>>
                <button><a class="botao-navegacao" ><i class="fa-solid fa-arrow-left"></i></a></button> 
            </form>    
        <?php endif;?>  

        <?php if( $pokemon_id < 145 ):?>
            <form action="list_all.php" method="POST"> 
                <input type="hidden" name="id" value= <?php echo $next_list; ?>>
                <a class="botao-navegacao"><i class="fa-solid fa-arrow-right"></i></a>
                
            </form>    

        <?php endif;?>  
    </div>
</footer> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>    

</html>
