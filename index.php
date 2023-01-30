<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/50cab0d7de.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>POKÉDEX</title>
</head>
<body>
    <?php include("connect_to_database.php");
          include("functions.php");
          $rand = mt_rand(1, 151)?>

    <div class="container p-3 align-items-center align-text-center">
        <div class="row align-items-center  mx-auto
        ">
            <div class="col-2 "><h1>Pokédex </h1></div>
            <div class="col-2"> <img src="./imagens/pokebola.png" alt="pokebola"> </div>
            
        </div>

        
        <!-- <div class="input-group mb-3 mx-auto" id="pesquisa">
            <form class="row g-3 m-4" action="pesquisa_pokemon.php">
                <div class="col-8">
                <input type="text" class="form-control caixa-pesquisa" placeholder="Insira o nome do pokémon " aria-label="Insira o nome do pokémon " aria-describedby="basic-addon2" name = "name_pokemon" >
                </div>

                <div class="col-auto">
                <button class="input-group-text icone-pesquisa" id="basic-addon2 type = "submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
                
            </form>
        </div> -->

        <div id="pesquisa">
            <form action = "pesquisa_pokemon.php" method = "GET">
                    <input class="caixa-pesquisa" type = "text" placeholder = "Insira o nome do pokémon " name = "name_pokemon" />
                    <button class="icone-pesquisa" type = "submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                
            </form>
        </div>
       
        <div class="card-container" ontouchstart="this.classList.toggle('hover')";>
            <div class="card">
                <div class="frente">
                    <img width = "150" height = "150" src= <?php echo image_index($rand); ?> alt="pokemon">
                    <p id="nome-pokemon"><?php echo name_index($mysqli, $rand); ?> </p>
                        <div class="tipos">                            
                            <p class="verde tipo"><?php echo type1_index($mysqli, $rand);?> </p>
                            <?php if( type2_index($mysqli, $rand) != NULL):?>
                            <p class="roxo tipo"> <?php echo type2_index($mysqli, $rand);?> </p>
                            <?php endif;?>           
                        </div>
                </div>
                <div class="tras">
                        <table>
                            <p>Fraquezas:</p>
                            <br/>
                            <tr>
                                <td class="verde tipo">Grama</td>
                                <td class="verde tipo">Grama</>
                            </tr>
                            <tr>
                                <td class="verde tipo">Grama</td>
                                <td class="roxo tipo">Veneno</td>
                            </tr>
                            
                            
                        </table>
                        <tr>

                </div>
                     
            </div>
        </div>
        
        
    
        <form action = "listar_todos.php">
            <button class="btn btn-sucess">Listar todos os pokémons<button class= "listar_todos" type = "submit"><i class="fa-solid fa-magnifying-glass"></i></button></button>                
        </form>
            
        
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>    
</body>
</html>

