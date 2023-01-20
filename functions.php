<?php

function image_find($image_id){#funcao para retornar a imagem   
    return "./imagens/". $image_id .".png"; 
}


function sql_consult($mysqli){#consulta no sql
    mysqli_select_db($mysqli, 'pokedex');    
    $sql = "SELECT * FROM pokemon";
    $result = mysqli_query($mysqli, $sql);

    return $result;
    
}

/*
function next_pokemon($pokemon_id){
    $pokemon_id < 151 ? url = "Project_pokedex/listar_todos.php?". ($pokemon_id + 1) : url = "";
    return url ;    
}*/