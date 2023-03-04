<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/favicon.ico" />
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/50cab0d7de.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Ver pokémon</title>    

</head>

<body>  

<audio autoplay id='player'>
    <source src= "./audio/Pokémon_Center.mp3" type="audio/mp3"/>
</audio>  

    <?php
    require("functions.php");
    $url = new url;
    $view = new View;

    $pokemon_id = $_GET["id"];

    $view->view_pokemon($pokemon_id); ?>

    <div class="visualizando-pokemon">
    <?php if(have_evolution($pokemon_id) != NULL): ?>
        <button class= "btn bg-light btn-ver-evolucao"><a href = <?php echo $url -> evolution_find($pokemon_id) ?> >Ver Evolução</a></button>                
    <?php endif; ?>                        
        <button class="btn bg-primary voltar" ><a href="index.php">Voltar</a></button>
    </div>


<script>
    var audio = document.getElementById('player');
    audio.volume = 0.06;
</script>


</body>
</html>


