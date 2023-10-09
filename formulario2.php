<?php 
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $raca = $_POST["raca"];
    $classe = $_POST["classe"];
    $obs = $_POST["obs"];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atributos</title>
    <!--<link rel="stylesheet" href="style.css">-->
</head>
<body>
    <header>
        <h1>Atributos</h1>
        <form action="SeuPersonagem.php" method="POST">
            <input type="hidden" name="nome" value="<?php echo $nome ?>">
            <input type="hidden" name="idade" value="<?php echo $idade ?>">
            <input type="hidden" name="raca" value="<?php echo $raca ?>">
            <input type="hidden" name="classe" value="<?php echo $classe ?>">

            <label for="forca">Força</label>
            <div>
                <button style="display: inline-block;">-</button>
                <button style="display: inline-block;">+</button>
            </div>
                <input type="submit" value="Gerar :D" name="gerar">
            
        </form>
    </header>
</body>
</html>