<?php #search for name pokemon

include("connect_to_database.php");

$name_search = $_GET["name_pokemon"];
$image_name = "";

mysqli_select_db($mysqli, 'pokedex');    
$sql = "SELECT * FROM pokémon";
$result = mysqli_query($mysqli, $sql);

echo "<p>o nome pesquisado foi $name_search<p>";

if($result){    
    while($row = mysqli_fetch_array($result)){    
        if($row["Name"] == $name_search){    
            $image_name = $name_search;
            break;
        }  

    }
}

#var_dump($_GET);
?>

<div>
    <img src = <?php echo "./imagens/". $image_name .".png"; ?> alt="pokemon"> 
</div>

<form action = "index.php" >
    <button class="voltar" type = "submit">Voltar</button>
</form>


