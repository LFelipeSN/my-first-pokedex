<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa pokémon</title>
</head>
<body>    
    <?php 
    require("functions.php");
    $url = new url;
    $search = new Search;

    $name_search = $_GET["name_pokemon"];

    $found_pokemon = $search->search_pokemon($name_search, $url); ?>

    <?php if($found_pokemon == FALSE):
        $image_id = mt_rand(-3, -1);?>    
        <img src = <?php echo image_find( $image_id )?> alt="pokemon">
        <p></p>    
        <h2> Não conseguimos achar este pokémon!</h2>    
    <?php endif; ?>


    <form action = "index.php" >            
        <button class="voltar" type = "submit">Voltar</button>
    </form>    
</body>
</html>
