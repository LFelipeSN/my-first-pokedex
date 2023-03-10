<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/favicon.ico" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="pokedex.css">
    <script src="https://kit.fontawesome.com/50cab0d7de.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>POKÉDEX</title>
</head>

<body>
    <?php require("functions.php");
          $rand =  mt_rand(1, 151); 
          $url = New Url;
          $index = New Index($rand);?>

    <div class="container-fluid p-3 align-items-center align-text-center">
        <div class="titulo">
            <div class="">
                <h1>Pokédex </h1>
            </div>
            <div class=""> <img src="./imagens/pokebola.png" alt="pokebola"> </div>
        </div>


        <div class="container-fluid alinhamento align-itens-center">
            <div id="pesquisa" class="align-itens-center">

                <form action="search_pokemon.php" method="GET">
                <form action="search_pokemon.php" method="GET">
                
                <form action="search_pokemon.php" method="GET">                
                
                    <input class="caixa-pesquisa" type="text" placeholder="Insira o nome do pokémon " name="name_pokemon" required/>
                    <button class="icone-pesquisa" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>

            <audio autoplay id='player'>
                <source src= "./audio/mix(Game_freak&Op).mp3" type="audio/mp3"/>
            </audio>
            
            <div id="pokedex">
                <div class="lado-direito bg-danger">
                    <div class="botao-azul">
                      
                    </div>
                    <hr> <!--o html faz uma linha horizontal na página-->
                    <div class="foto-poke">
                        <img width="150" height="150" src= <?php echo image_find($rand); ?>  alt="pokemon">-
                    </div>
                    
                </div>
                <div class="lado-esquerdo bg-danger">
                    <p id="nome-pokemon"><?php echo $index -> name_index(); ?> </p>
                    <div class="botoes-azuis">
                        <div class="linha1">
                            <div></div>
                            <div></div>
                        </div>
    
                        <div class="linha1">
                            <div></div>
                            <div></div>     
                        </div>

                        <div class="linha1">
                            <div></div>
                            <div></div>
                        </div>

                        <div class="linha1">
                            <div></div>
                            <div></div>
                        </div>

                        <div class="linha1">
                            <div></div>
                            <div></div>
                        </div>
                    
                    </div>

                    <div class="row">
                        <button class="col-4 tipo-pokedex" id= <?php echo $index -> color_type1_index($mysqli);?> > <?php echo $index -> type1_index($mysqli);?> </button> 
                            <?php if( $index -> type2_index($mysqli) ):?>
                        <button class="col-4 tipo-pokedex" id= <?php echo $index -> color_type2_index($mysqli);?> > <?php echo $index -> type2_index($mysqli);?> </button>
                            <?php endif;?> 
                    </div>
                </div>
            </div>  
        
                
        </div>      
       
        

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <footer>
        <div class="container-botao-listar">
            <form action="list_all.php" method="POST"> 
                <input type="hidden" name="id" value=1>
                <button class="botao-listar btn bg-danger">Listar todos os pokémons </button> 
            </form>               
        </div> 
    </footer>   
    
    
<script>
    var audio = document.getElementById('player');
    audio.volume = 0.04;
</script>

</body>

</html>