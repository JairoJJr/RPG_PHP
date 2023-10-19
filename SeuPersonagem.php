

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SeuPersonagem</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Esse é seu personagem</h1>
    <p><?php 
            require 'prompt.php';
            echo $prompt;
    ?></p>
</body>
</html>