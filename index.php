<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POKÉDEX</title>
</head>
<body>
    <h1>Pesquisa Pokémon</h1>
    <form action = "pesquisa_nome.php" method = "GET"> 
        <label>
            <input type = "text" placeholder = "Name do pokémon " name = "name_pokemon"/>
        </label>
        <button type = "submit">Procurar</button>
    </form>
    

    <?php        


        $con = mysqli_connect('localhost','root','123456');
        mysqli_select_db($con, 'pokedex');
        
        $query = "SELECT * FROM pokémon";
    
	    $result = mysqli_query($con, $query);

        if($result){
            while($row = mysqli_fetch_array($result)){
                $name = $row["Name"];
                $type = $row["Type"];
                $song = $row["Song"];
                echo "Name: ". $name . " ";
                echo "Type: ". $type . " ";
                echo "Song: ". $song ;

            }
        }
    
        #phpinfo(); 
        #mysqli_close($con);

        #  <input type= "submit" value="Procurar">

    ?>
</body>
</html>

