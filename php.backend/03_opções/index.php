<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opções</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Menu de Opções</h1>

        <form action="index.php" method="post">
        <div class="dados">
                <label for="">Informe uma opção</label>
                <input type="text" name="opcao" id="opção" placeholder="Informe uma opção...">
            </div>

            <div class="btn">
                <input type="submit" value="Exibir" name="Exibir" id="show">
                <input type="submit" value="Limpar" name="Limpar" id="clear">
            </div><!--Botão de limpeza-->

            <div class="resultado">
                <?php
                if (isset($_POST["opcao"])) {

                    $opcao = $_POST["opcao"];

                    switch ($opcao) {
                        case 1:
                            $opcao = "Nossos produtos🕹️";
                            break;
                        case 2:
                            $opcao = "Suporte Técnico📞";
                            break;
                        case 3:
                            $opcao = "Financeiro💸";
                            break;
                        case 4:
                            $opcao = "Outros assuntos🤷‍♀️";
                            break;
                        default:
                        $opcao = "Opção Inválida🤬";
                    }
                    echo "<p> Opção: $opcao</p>";
                }

                //Botão limpar
                if (isset($_POST["limpar"])) {
                    header("Location: index.php");
                    exit; 
                }
                ?>  
            </div>
            </form>
    </div>
</body>
</html>