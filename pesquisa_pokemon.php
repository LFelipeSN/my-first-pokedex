<?php #search for name pokemon ----- futuramente vai ser o exibir pokemon

include("connect_to_database.php");
include("functions.php");


$name_search = $_GET["name_pokemon"];
$name_search = $name_search;
$image_id = "000";

$result = sql_consult($mysqli);

if($result){    
    while($row = mysqli_fetch_array($result)){    
        if($row["name"] == $name_search){    
            $image_id = $row["pokemon_id"];
            break;
        }  
    }
}


#var_dump($_GET);
?>

<div>
    <img src = <?php echo image_find($image_id); ?> alt="pokemon">                                                         
</div>

<div>
    <p></p>
    <?php echo ($image_id == "000" ? "Não conseguimos achar este pokémon!" : $name_search); ?>
    <p></p>
</div>

 <?php if($image_id != "000" || have_evolution($mysqli, $image_id) == true): ?>
    <button class= "Ver Evolução" type = "submit"><a href = <?php echo go_evolution($mysqli, $name_search); ?> >Ver Evolução</a></button>                
 <?php endif; ?> 
        
<form action = "index.php" >            
    <button class="voltar" type = "submit">Voltar</button>
</form>


