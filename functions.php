<?php
include("connect_to_database.php");

function image_find($image_id){#funcao para retornar a imagem   
    return "./imagens/". $image_id .".png"; 
}


function evolution_find($pokemon_id){
    return "pokemon_evolution.php?id=". $pokemon_id;
}


function image_index($rand){
    return image_find($rand);
}


function name_index($mysqli, $rand){
    $result = sql_consult_id($mysqli, $rand);
    $row = mysqli_fetch_array($result);
    return $row["name"];
}


function type1_index($mysqli, $rand){
    $result = sql_consult_id($mysqli, $rand);
    $row = mysqli_fetch_array($result);
    return $row["type_1"];
}


function type2_index($mysqli, $rand){
    $result = sql_consult_id($mysqli, $rand);
    $row = mysqli_fetch_array($result);
    return $row["type_2"];
}


function pokemon_find($mysqli, $pokemon_id){
    $result = sql_consult_id($mysqli, $pokemon_id);
    $row = mysqli_fetch_array($result);
    return "pesquisa_pokemon.php?name_pokemon=" . $row["name"];

}


function have_evolution($mysqli, $image_id){
    $result = sql_consult_id($mysqli, $image_id);
    $row =  mysqli_fetch_array($result);  

    return isset( $row["evolution_line"] );  ;
}


function go_evolution($mysqli, $pokemon_id){

    $consult = sql_consult_id($mysqli, $pokemon_id);
    $evolution_line = mysqli_fetch_array($consult);

    $result = sql_consult($mysqli);

    while( $row = mysqli_fetch_array($result) ):
        if( isset($row["evolution_line"]) && isset($evolution_line["evolution_line"]) ):
            if( $row["evolution_line"] == $evolution_line["evolution_line"] ): ?>
                <img src = <?php echo ( image_find( $row["pokemon_id"] ) ) ?> >

                <?php  echo "<br/>";
                       echo $row["pokemon_id"]; 
                       echo " "; 
                       echo $row["name"];
                       echo "<br/>";
                       echo $row["type_1"];
                       echo " ";
                       echo $row["type_2"];
                       echo "<br/>";?>
                       <button class= " " type = "submit"><a href =<?php echo pokemon_find($mysqli, $row["pokemon_id"]); ?> >Ver Pokémon</a></button>    
                <?php  echo "<br/>";
                       echo "<br/>";       
            endif;            
        endif;  
    endwhile;        
}


function sql_consult($mysqli, $name_search = ""){#consulta no sql
    mysqli_select_db($mysqli, 'pokedex'); 

    if($name_search == ""){
        $sql = "SELECT * FROM pokemon";
        $result = mysqli_query($mysqli, $sql);

    }else {        
        $stmt = mysqli_prepare($mysqli, "SELECT * FROM pokemon WHERE name=?");
        mysqli_stmt_bind_param($stmt, "s", $name_search);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
    }   
    
    return $result;    
}


function sql_consult_id($mysqli, $pokemon_id){#consulta no sql
    mysqli_select_db($mysqli, 'pokedex');
      
    $stmt = mysqli_prepare($mysqli, "SELECT * FROM pokemon WHERE pokemon_id=?");
    mysqli_stmt_bind_param($stmt, "i", $pokemon_id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);     
    
    return $result;    
}


/*
function next_pokemon($pokemon_id){
    $pokemon_id < 151 ? url = "Project_pokedex/listar_todos.php?". ($pokemon_id + 1) : url = "";
    return url ;    
}*/