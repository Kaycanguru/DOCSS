<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de compra</title>
</head>
<body>
    <div class="container">
        <h2>Lista de compra</h2>

        <?php
          $lista = ["Arroz" , "Feijão", "Macarrão", "Carne", "Farofa"];
         
         //Indexador
         $i = 1;

         foreach ($lista as $item) {
            //Exibe itens da llista como indexador
            echo $i . " - " . $item . "<br>";
            $i++; //incremento
         }
        ?>
    </div>
</body>
</html>