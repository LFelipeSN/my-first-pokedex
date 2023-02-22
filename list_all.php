<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/50cab0d7de.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>POKÉDEX</title>
</head>

<body>
<?php
require("../connect_to_database.php");
require("functions.php");
$url = new url;

$pokemon_id = $_GET["id"];
?>

<div class=" justify-itens-center align-itens-center row container">
    <?php
    list_all($mysqli, $pokemon_id, $url);
    ?>
</div>
<?php

$previous_list = ($pokemon_id-1);
$next_list = ($pokemon_id+1);?>


<form action = "index.php">
    <button class="">Voltar</button>
</form>

<?php if( $pokemon_id > 1 ):?>
    <div>
        <button><a href = <?php echo $url -> pokemon_list($previous_list); ?>>Anterior</a></button>   
    </div>
<?php endif;?>  

<?php if( $pokemon_id < 19 ):?>
    <div class="">
        <button class=""><a href = <?php echo $url -> pokemon_list($next_list); ?>>proximos</a></button>
    </div>
<?php endif;?>  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
    

</html>
