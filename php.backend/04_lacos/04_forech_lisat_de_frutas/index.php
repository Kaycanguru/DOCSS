<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de frutas</title>
</head>
<body>
    <div class="container">
        <h2>Lista de frutas</h2>

        <?php
        $frutas = ["Banana",  "Maçã", "Melancia", "Goiaba", "Melão", "Abacaxi"];

        foreach($frutas as $frutas) {
            echo $frutas . "<br>";
        }
        ?>
    </div>
</body>
</html>