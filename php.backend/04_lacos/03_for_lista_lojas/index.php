<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Lojas</title>
</head>
<body>
    <div class="container">
        <h2>Lista loja</h2>

        <?php
        //Criação de Lista
        $Lojas = ["Santo André", "São Bernardo", "São Caetano" , "Diadema", "Mauá"];

        for ($i = 0; $i < count($Lojas); $i++) {
            echo $Lojas[$i] . "<br>";
        }
        ?>
    </div>
</body>
</html>