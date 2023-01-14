<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/50cab0d7de.js" crossorigin="anonymous"></script>
    <title>POKÉDEX</title>
</head>
<body>
    <div id="main">
        <h1>Pokédex</h1>
        <div id="pesquisa">
            <form action = "pesquisa_nome.php" method = "GET">
                    <input class="caixa-pesquisa" type = "text" placeholder = "Name do pokémon " name = "name_pokemon" />
                    <button class="icone-pesquisa" type = "submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                
            </form>
        </div>
       
        
        <div class="card">
            <img src="poke1.png" alt="pokemon">
            <p id="nome-pokemon">Bulbasaur</p>
        </div>
        
    </div>
    
    

    <?php        


        $con = mysqli_connect('localhost','root','admin');
        mysqli_select_db($con, 'pokedex');
        
        $query = "SELECT * FROM pokemon";
    
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

