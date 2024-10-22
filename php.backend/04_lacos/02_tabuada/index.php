<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <div class="container">
        <h2>Tabuada</h2>

        <?php
        $tab = 6;

        for  ($cont = 1; $cont <= 100; $cont++) {
            echo $tab . "X" . $cont . "=" . ($tab * $cont) . "<br>";
        }
        ?>
    </div>
</body>
</html>