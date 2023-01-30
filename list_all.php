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

<button><a href = <?php echo pokemon_list($pokemon_id); ?>><h3>proximos</h3></a></button>