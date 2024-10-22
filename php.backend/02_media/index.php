<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média dos Alunos</title>
</head>
<body>
    <div class="container">
        <h1>Média dos Alunos</h1>
        <form action="index.php" method=post>
            <div class="dados">
                <label for="">Nota 1</label>
                <input type="text" name="nota1" id="n1">
            </div>

            <div class="dados">
                <label for="">Nota 2</label>
                <input type="text" name="nota2" id="n2">
            </div>

            <div class="dados">
                <label for="">Nota 3</label>
                <input type="text" name="nota3" id="n3">
            </div>

            <div class="btn">
                <input type="submit" value="Calcular" name="calcular">
                <input type="submit" value="Limpar" name="limpar">
            </div>

            <div class="resultado">
                <?php
                    // Receber as variáveis
                    if(isset($_POST["nota1"], $_POST["nota2"], $_POST["nota3"])) {

                        // Declaração das variáveis
                        $nota1 = floatval($_POST["nota1"]);
                        $nota2 = floatval($_POST["nota2"]);
                        $nota3 = floatval($_POST["nota3"]);

                        // Cálculo da mádia
                        $media = ($nota1 + $nota2 + $nota3) / 3;

                    if ($nota1 > 10 or $nota2 > 10 or $nota3 > 10) {
                        echo "<p>Valor inválido! <br> Informe nota de 0 à 10.</p>";
                    }else {

                        if ($media >= 6) {
                            echo "<p>Média Final: $media. Aprovado! 😁</p>";
                        } elseif ($media >= 5.9) {
                            echo "<p>Média Final: $media. Recuperação! </p>";
                        } else {
                            echo "<p>Média Final: $media. Reprovado! 🤣🤣</p>";
                        }
                    }
                }


                    if(isset($_POST["limpar"])) {
                        header("location: index.php");
                        exit;
                     }
                ?>
            </div>

        </form>
    </div>
</body>
</html>
