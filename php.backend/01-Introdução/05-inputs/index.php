<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma com formulário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Soma</h1>
    </header>

    <form action="index.php" method="get"> <!-- get é pra vincular -->
        <h2>Calculadora</h2>
        <div>
            <label for="">Número 1</label>
            <input type="text" name="n1" id="n1">
        </div>

        <div>
            <label for="">Número 2</label>
            <input type="text" name="n2" id="n2">
        </div>

        <div class="calcular">
            <input type="submit" value="Calcular">
        </div>

        <?php
            // if isset: função interna do PHP para checar se as variáveis estão declaradas.
            if (isset($_GET["n1"], $_GET["n1"])) {

            // Variáveis
            $n1 = $_GET["n1"];
            $n2 = $_GET["n2"];

            //Cálculo
            $soma = $n1 + $n2;

            echo "O resultado calculado é " . $soma . ".";
        }
        

        ?>
    </form>
</body>
</html>