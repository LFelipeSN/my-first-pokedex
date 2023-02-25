<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver pokémon</title>
</head>
<body>
    <?php
    require("functions.php");
    $url = new url;
    $view = new View;

    $pokemon_id = $_GET["id"];

    $view->view_pokemon($pokemon_id);

    $image_id = $pokemon_id;?>
    

    <?php if(have_evolution($pokemon_id) != NULL): ?>
        <button class= "Ver Evolução" type = "submit"><a href = <?php echo $url -> evolution_find($image_id) ?> >Ver Evolução</a></button>                
    <?php endif; ?>             

    <form action = "index.php" >            
        <button class="voltar" type = "submit">Voltar</button>
    </form>    
</body>
</html>


