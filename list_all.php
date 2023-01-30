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
include("connect_to_database.php");
include("functions.php");


$pokemon_id = $_GET["id"];

list_all($mysqli, $pokemon_id);

$pokemon_id = ($pokemon_id+8);

?>

<form action = "index.php">
    <button class="voltar" type = "submit">Voltar</button>
</form>
<div class="card bg-secondary">
    <button><a href = <?php echo pokemon_list($pokemon_id); ?>><h3>proximos</h3></a></button>   
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
