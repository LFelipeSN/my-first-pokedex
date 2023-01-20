<?php

include("connect_to_database.php");
include("functions.php");

$result = sql_consult($mysqli);

if($result){    
    while( $row = mysqli_fetch_array($result) ){  
        echo ( image_find( $row["pokemon_id"] ) );
        echo "<br/>";
        echo $row["pokemon_id"]; 
        echo " "; 
        echo $row["name"];
        echo "<br/>";
        echo "<br/>";       
    }
}

?>

<form action = "index.php">
    <button class="voltar" type = "submit">Voltar</button>
</form>

<!--
    <php
$name_search = $_GET["n"];#nn sei como dar get no valor da pagina(id)
>

image src = ....

<php
 echo ( image_find( $row["pokemon_id"] ) );
        echo "<br/>";
        echo $row["pokemon_id"]; 
        echo " "; 
        echo $row["name"];
        
        ?>

    <form action = <php echo next_pokemon($pokemon_id) ?>#rota pro proximo poke da lista
        <button type = "submit">proximo pokémon</button>
    </form>



-->