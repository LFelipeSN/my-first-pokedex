<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
        include("connect_to_database.php");
        include("functions.php");

        $pokemon_id = $_GET["id"];

        $result1 = sql_consult2($mysqli, $pokemon_id);
        $row1 = mysqli_fetch_array($result1);
        $result2 = sql_consult2($mysqli, ($pokemon_id+1));
        $row2 = mysqli_fetch_array($result2);

        echo ( image_find( $row1["pokemon_id"] ) );
        echo "<br/>";
        echo $row1["pokemon_id"]; 
        echo " "; 
        echo $row1["name"];
        echo "<br/>";
        echo $row1["type_1"];
        echo $row1["type_2"];
        echo "<br/>";
        echo "<br/>";       
        
        echo "EVOLUI PARA :";
        echo "<br/>";
        echo "<br/>"; 

        echo ( image_find( $row2["pokemon_id"] ) );
        echo "<br/>";
        echo $row2["pokemon_id"]; 
        echo " "; 
        echo $row2["name"];
        echo "<br/>";
        echo $row2["type_1"];
        echo $row2["type_2"];
        echo "<br/>";
        echo "<br/>";   
   ?>

    <form action = "index.php">
        <button class="voltar" type = "submit">Voltar</button>
    </form>


</body>
</html>