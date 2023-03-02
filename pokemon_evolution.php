<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/favicon.ico" />
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/50cab0d7de.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Linha evolutiva</title>
</head>
<body>
    <div class = "botao-home">
        <a class="botao-navegacao" href="index.php"><i class="fa-solid fa-house"></i></a>
    </div>
   <?php
        require("functions.php");
        $url = new url;

        $pokemon_id = $_GET["id"];
        ?>
        <div class="row">
            <?php
         go_evolution($pokemon_id, $url);
         ?>
        </div>
        <?php

   ?>

    <form action = "index.php">
        <button class="btn btn-light" type = "submit">Criar realmente um botão de voltar</button>
    </form>

</body>
</html>