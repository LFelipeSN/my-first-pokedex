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
    <?php include("connect_to_database.php"); ?>

    <div id="main">
        <div class="titulo">
            <h1>Pokédex </h1> <img src="./imagens/pokebola.png" alt="pokebola"> 
        </div>

        <div id="pesquisa">
            <form action = "pesquisa_pokemon.php" method = "GET">
                    <input class="caixa-pesquisa" type = "text" placeholder = "Insira o nome do pokémon " name = "name_pokemon" />
                    <button class="icone-pesquisa" type = "submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                
            </form>
        </div>
       
        <div class="card-container" ontouchstart="this.classList.toggle('hover')";>
            <div class="card">
                <div class="frente">
                    <img src= "./imagens/bulbasaur.png" alt="pokemon">
                    <p id="nome-pokemon">Bulbasaur</p>
                        <div class="tipos">
                            <p class="verde tipo">Grama</p>
                            <p class="roxo tipo">Veneno</p>
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
        
        <div>
            <form action = "listar_todos.php">
                <h2>Listar todos os pokémons<button class= "listar_todos" type = "submit"><i class="fa-solid fa-magnifying-glass"></i></button></h2>                
            </form>
        </div>
    </div>
        
</body>
</html>

