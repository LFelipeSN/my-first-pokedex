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
        require("../connect_to_database.php");
        require("functions.php");
        $url = new url;

        $pokemon_id = $_GET["id"];
        
        go_evolution($mysqli, $pokemon_id, $url); 

   ?>

    <form action = "index.php">
        <button class="voltar" type = "submit">Voltar</button>
    </form>

</body>
</html>