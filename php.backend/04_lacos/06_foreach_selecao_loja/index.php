<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleção de Lojas</title>
</head>
<body>
    <div class="container">
        <h1>Seleção de Lojas</h1>

        <form action="index.php" method="post">
            <div class="dados">
                <label for="">Indique o código</label>
                <input type="text" name="codigo" id="codigo">
            </div>

            <div class="btn">
                <input type="submit" value="Exibir" name="exibir">
                <input type="submit" value="Limpar" name="limpar">
            </div>

            <div class="resultado">
                <?php
                    if(isset($_POST["codigo"])) {
                        // Variável código da loja (número inteiro)
                        $loja_selecionada = intval($_POST["codigo"]);

                        // Lista de lojas
                        $lojas = ["Santo André", "São Bernardo", "São Caetano", "Diadema", "Mauá"];

                        $loja_encontrada = false;

                        // Laço for para selecionar a loja pelo código
                        foreach($lojas as $i => $loja) {
                            // Usar $i + 1 para atribuir o valor de 1 para o primeiro item da lista
                            if($loja_selecionada == ($i + 1)) {
                                // Exibe a loja com o código correspondente
                                echo ($i + 1) . " - " . $loja . "<br>";
                                $loja_encontrada = true;
                                break; // Interrompe o fluxo ao selecionar a loja

                            }
                        }
                        // Tratamento para código fora da lista
                        if (!$loja_encontrada) {
                            echo "Loja inválida! <br>";
                        }
                    }

                    // Botão Limpar 
                    if(isset($_POST["limpar"])) {
                        header("Location: index.php");
                        exit;
                    }
                ?>
            </div>
        </form>
    </div>
</body>
</html>