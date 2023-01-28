<?php #search for name pokemon ----- futuramente vai ser o exibir pokemon

include("connect_to_database.php");
include("functions.php");


$name_search = $_GET["name_pokemon"];
$image_id = mt_rand(-3, -1);

$result = sql_consult($mysqli, $name_search);
$row = mysqli_fetch_array($result);     
if( isset($row) ){       
    if($row["name"] == $name_search){ 
               $image_id =  $row["pokemon_id"]; ?>
               <img src = <?php echo image_find( $image_id )?> alt="pokemon"> 

        <?php  echo "<br/>";
               echo $row["pokemon_id"]; 
               echo " "; 
               echo $row["name"];
               echo "<br/>";
               echo $row["type_1"];
               echo " ";
               echo $row["type_2"];
               echo "<br/>";
               
    }
}
?>

<?php if($image_id < 1):?>
    <img src = <?php echo image_find( $image_id )?> alt="pokemon">
    <p></p>    
    <h2> Não conseguimos achar este pokémon!</h2>    
<?php endif; ?>

<?php if($image_id < 1 && have_evolution($mysqli, $image_id) != NULL): ?>
    <button class= "Ver Evolução" type = "submit"><a href = <?php echo evolution_find($image_id) ?> >Ver Evolução</a></button>                
<?php endif; ?> 
        
<form action = "index.php" >            
    <button class="voltar" type = "submit">Voltar</button>
</form>
