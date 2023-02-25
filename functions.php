<?php
include("../connect_to_database.php");

$mysqli = database();

class Index{
    public int $rand;
   
    function __construct($rand) {
        $this->rand = $rand;
    }

    function name_index(){
        $result = sql_consult_id($this->rand);
        $row = mysqli_fetch_array($result);
        return $row["name"];
    }
    
    function image_index(){ /* temporary function*/
        return "./imagens/improved_version/id(".$this->rand.").png"; 
    }

    function type1_index(){
        $result = sql_consult_id($this->rand);
        $row = mysqli_fetch_array($result);
        return $row["type_1"];
    }    
    
    function type2_index(){
        $result = sql_consult_id($this->rand);
        $row = mysqli_fetch_array($result);
        return $row["type_2"];
    }    

    function color_type1_index(){ 
        return "color-type-".$this->type1_index();
    }   

    function color_type2_index(){ 
        return "color-type-".$this->type2_index();
    }   
}


class Url{    

    function evolution_find($pokemon_id){
        return "pokemon_evolution.php?id=". $pokemon_id;
    }

    function pokemon_list($pokemon_id=1){
        return "list_all.php?id=". $pokemon_id;
    }
    
    function pokemon_find($pokemon_id){
        $result = sql_consult_id($this->mysqli, $pokemon_id);
        $row = mysqli_fetch_array($result);
        return "search_pokemon.php?name_pokemon=" . $row["name"];    
    }

    function view($pokemon_id){
        return "view_pokemon.php?id=" . $pokemon_id;
    }
}

class View{
    function view_pokemon($pokemon_id){ 

        $result = sql_consult_id($pokemon_id); 
        $row = mysqli_fetch_array($result);

        $image_id =  $row["pokemon_id"]; ?>

        <img width="150" height="150" src = <?php echo image_find( $image_id )?> alt="pokemon"> 
                
        <?php  print_pokemon($row); 
    }
}

class Search_pokemon{
    function search_pokemon($name_search, $url){

        $result = sql_consult($name_search);
        $found_pokemon = FALSE;    

        while( $row = mysqli_fetch_array($result) ){
                ?>
                <button><a href = <?php echo $url -> view($row["pokemon_id"]); ?>><?php echo $row ["name"]; ?> </a></button>
                <?php  

                if(!$found_pokemon){
                    $found_pokemon = TRUE; 
                }
            }        
        
        return $found_pokemon;    
    }
}

class List_all{
    function list_all($pokemon_id, $url){
        $pokemon_id = id_pokemon_list($pokemon_id);
        
        for($i=1 ; $i <= 8 ; $i++): 
                    
            $result = sql_consult_id($pokemon_id); 
            $row = mysqli_fetch_array($result);?>
    
            <div class="container justify-itens-center align-itens-center col-2 m-4 bg-secondary card">
                
                <img width="100" height="100" src = <?php echo image_find( $row["pokemon_id"] )?> alt="pokemon">
    
                <?php print_pokemon($row) ;?>
    
                <button class="ver-pokemon btn btn-light"><a href = <?php echo $url -> view($row["pokemon_id"]); ?> >Ver Pokémon</a></button>   
                
            </div>   
           
            <?php ;  
    
            $pokemon_id++;
    
            if($pokemon_id > 151){
                break;
            }
        endfor;         
    }
}


function go_evolution($mysqli, $pokemon_id, $url){

    $consult = sql_consult_id($mysqli, $pokemon_id);
    $evolution_line = mysqli_fetch_array($consult);

    $result = sql_consult($mysqli);

    while( $row = mysqli_fetch_array($result) ):
        if( isset($row["evolution_line"]) && isset($evolution_line["evolution_line"]) ):
            if( $row["evolution_line"] == $evolution_line["evolution_line"] ): ?>
                <img width="100" height="100" src = <?php echo ( image_find( $row["pokemon_id"] ) ) ?> >

                <?php print_pokemon($row) ?>

                      <button class= " " type = "submit"><a href =<?php echo $url -> view($mysqli, $row["pokemon_id"]); ?> >Ver Pokémon</a></button>   

                <?php echo "<br/>";
                      echo "<br/>";       
            endif;            
        endif;  
    endwhile;        
}


function sql_consult($mysqli, $name_search = ""){
    mysqli_select_db($mysqli, 'pokedex'); 

    if($name_search == ""){
        $sql = "SELECT * FROM pokemon";
        $result = mysqli_query($mysqli, $sql);

    }else {        
        $stmt = mysqli_prepare($mysqli, "SELECT * FROM pokemon WHERE name LIKE CONCAT(?, '%') ");
        mysqli_stmt_bind_param($stmt, "s", $name_search);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
    }       
    return $result;    
}


function sql_consult_id($pokemon_id){
    Global $mysqli;

    mysqli_select_db($mysqli, 'pokedex');

    $stmt = mysqli_prepare($mysqli, "SELECT * FROM pokemon WHERE pokemon_id=?");
    mysqli_stmt_bind_param($stmt, "i", $pokemon_id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);     
    
    return $result;    
}


function image_find($image_id){  
    return "./imagens/". $image_id .".png"; 
}


function have_evolution($mysqli, $image_id){
    $result = sql_consult_id($mysqli, $image_id);
    $row =  mysqli_fetch_array($result);  

    return isset( $row["evolution_line"] );  ;
}


function id_pokemon_list($n){ #PA que calcula o id do pokemon inicial da lista dado um determinado id(da url)
    $An = 1 + ($n-1) * 8;
    return $An;
}

function print_pokemon($row){
    ?>
    <div id="nome-pokemon">
    <?php
        echo $row["name"];
    ?>
    </div>
    
    <div class="tipos">
        <?php
        echo $row["type_1"];
        
        if($row["type_2"] ):
            echo " | ";
            echo $row["type_2"];
        endif  
       
        
        ?>
    </div>
    <?php
}
