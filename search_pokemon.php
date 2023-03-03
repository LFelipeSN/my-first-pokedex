<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/favicon.ico" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style-search.css">
    <script src="https://kit.fontawesome.com/50cab0d7de.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Pesquisa pokémon</title>
</head>

<body>  
<div class = "botao-home">
    <a class="botao-navegacao" href="index.php"><i class="fa-solid fa-house"></i></a>
</div>
    <?php 
    require("functions.php");
    $url = new url;
    $search = new Search;
    $name_search = $_GET["name_pokemon"];
    ?>           
            
    <div class="achados-pesquisados"><!--------- centralizar plis-------->
         <?php
        $found_pokemon = $search->search_pokemon($name_search, $url); ?>
    </div>

    <div class="no_found_pokemon">
        <?php if($found_pokemon == FALSE):
            $image_id = mt_rand(-3, -1);?>    
            <img src = <?php echo image_find( $image_id )?> alt="pokemon">  
            <h2> Não conseguimos achar este pokémon!</h2>    
        <?php endif; ?>
    </div>
  
</body>
</html>
