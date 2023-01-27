<?php
include("connect_to_database.php");

function image_find($image_id){#funcao para retornar a imagem   
    return "./imagens/". $image_id .".png"; 
}


/*function check_previous($mysqli, $pokemon_id){
    mysqli_select_db($mysqli, 'pokedex'); 
    $result = sql_consult2($mysqli, $pokemon_id);
    $row = mysqli_fetch_array($result); 

    if( $row["evolves_from_id"] != NULL){#error ao verificar campo nulo
        if($row["evolves_from_id"] == $pokemon_id){
            return true;
        }
    }
    return false;
}*/


function check_next($mysqli, $pokemon_id){
    $result = sql_consult2($mysqli, ($pokemon_id+1) );
    $row = mysqli_fetch_array($result); 

    if( $row["evolves_from_id"] != NULL){
        if($row["evolves_from_id"] == $pokemon_id){
            return true;
        }
    }
    return false;

}


function have_evolution($mysqli, $pokemon_id){
    if(check_next($mysqli, $pokemon_id) == false /*&& check_previous($mysqli, $pokemon_id) == false*/){
        return false;
    }else{
        return true;
    }
}


function go_evolution($mysqli, $name_search){
        $result = sql_consult($mysqli, $name_search);
        $row = mysqli_fetch_array($result);   
                
        return "pokemon_evolution.php?id=".$row["pokemon_id"];  

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


function sql_consult2($mysqli, $pokemon_id = ""){#consulta no sql
    mysqli_select_db($mysqli, 'pokedex'); 

    if($pokemon_id == ""){
        $sql = "SELECT * FROM pokemon";
        $result = mysqli_query($mysqli, $sql);

    }else {        
        $stmt = mysqli_prepare($mysqli, "SELECT * FROM pokemon WHERE pokemon_id=?");
        mysqli_stmt_bind_param($stmt, "i", $pokemon_id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
    }   
    
    return $result;    
}


/*
function next_pokemon($pokemon_id){
    $pokemon_id < 151 ? url = "Project_pokedex/listar_todos.php?". ($pokemon_id + 1) : url = "";
    return url ;    
}*/