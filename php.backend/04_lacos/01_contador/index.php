<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador For</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h2>Contador for</h2>

    <?php
        
        for ($i = 0; $i <= 10; $i++) {//i++=i+1
            echo $i . "<br>";
        }
     ?>
    </div>
</body>
</html>