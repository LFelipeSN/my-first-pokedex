<?php 

include("connect_to_database.php");
include("functions.php");
$url = new url;

$name_search = $_GET["name_pokemon"];

$image_id = search_pokemon($mysqli, $name_search);

?>

<?php if($image_id < 0):?>
    <img src = <?php echo image_find( $image_id )?> alt="pokemon">
    <p></p>    
    <h2> Não conseguimos achar este pokémon!</h2>    
<?php endif; ?>

<?php if($image_id > 0 && have_evolution($mysqli, $image_id) != NULL): ?>
    <button class= "Ver Evolução" type = "submit"><a href = <?php echo $url -> evolution_find($image_id) ?> >Ver Evolução</a></button>                
<?php endif; ?> 
        
<form action = "index.php" >            
    <button class="voltar" type = "submit">Voltar</button>
</form>
