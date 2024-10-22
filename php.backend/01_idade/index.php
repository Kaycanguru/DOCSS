<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade</title>
</head>
<body>
    <div class="container">
        <h1>Idade</h1>
        
        <form action="index.php" method="post">
            <div class="dados"><!--estutura básica, construção formulário-->
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome">
            </div>

        <div class="dados"><!--estutura básica, construçõ formulário-->
                <label for="idade">Idade</label>
                <input type="text" name="idade" id="idade">
            </div>

            <div class="btn">
                <input type="submit" value="Exibir" name="exibir" class="show">
                <input type="submit" value="Limpar" name="limpar" class="clear">
            </div>

            <div class="resultado">
                <?php
                    // Função interna do PHP para receber variáveis
                    if(isset($_POST["nome"], $_POST["idade"])) {

                        // Declaração das variáveis
                        $nome = $_POST["nome"];
                        $idade = $_POST["idade"];

                        // Verifica se é maior de idade
                        if ($idade >= 18) {
                            echo "<p>Olá, $nome! <br> Você tem $idade anos. Maior de idade. 👌😘</p>";
                        } else {
                            echo "<p>Olá, $nome! <br> Você tem $idade anos. Menor de idade.😒 </p>";
                        }
                    }

                    // Função do botão limpar 
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