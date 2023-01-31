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
    <?php include("../connect_to_database.php");
          include("functions.php");
          $rand = mt_rand(1, 151); 
          $url = New url;
          $index = New index($rand);?>

    <div class="container p-3 align-items-center align-text-center">
        <div class="titulo">
            <div class="">
                <h1>Pokédex </h1>
            </div>
            <div class=""> <img src="./imagens/pokebola.png" alt="pokebola"> </div>
        </div>


        <div class="alinhamento align-itens-center
        ">
            <div id="pesquisa" class="align-itens-center">
                <form action="search_pokemon.php" method="GET">
                    <input class="caixa-pesquisa" type="text" placeholder="Insira o nome do pokémon " name="name_pokemon" />
                    <button class="icone-pesquisa" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>

                </form>
            </div>

            <div class="card-container card-group align-itens-center " ontouchstart="this.classList.toggle('hover')" ;>
                <div class="card bg-secondary">
                    <div class="frente bg-secondary">
                        <img width="150" height="150" src= <?php echo image_find($rand); ?>  alt="pokemon">
                        <p id="nome-pokemon"><?php echo $index -> name_index($mysqli); ?> </p>
                        <div class="tipos">
                        <p class="verde tipo"><?php echo $index -> type1_index($mysqli);?> </p>
                            <?php if( $index -> type2_index($mysqli) ):?>
                            <p class="roxo tipo"> <?php echo $index -> type2_index($mysqli);?> </p>
                            <?php endif;?>  
                        </div>
                    </div>
                    <div class="tras">
                    

                    </div>

                </div>
            </div> 

           
        </div>

        <!--     
        <form action = "list_all?id=1.php">
            <button class="btn btn-sucess">Listar todos os pokémons<button class= "list_all" type = "submit"><i class="fa-solid fa-magnifying-glass"></i></button></button>                
        </form> -->
        <br />
        <button class="btn btn-sucess"><a href = <?php echo $url -> pokemon_list() ?>>Listar todos os pokémons </a><i class="fa-solid fa-magnifying-glass"></i></button>         
        <br />
        <br />


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>