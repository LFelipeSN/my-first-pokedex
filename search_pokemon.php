<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    
    <?php 
    include("connect_to_lowerUser.php");
    include("functions.php");
    $url = new url;

    $name_search = $_GET["name_pokemon"];

    $found_pokemon = search_pokemon($mysqli, $name_search, $url); ?>

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
