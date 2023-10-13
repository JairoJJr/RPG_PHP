<?php
$tipo = $_POST["tipo"];
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
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Atributos</h1>
        <form action="SeuPersonagem.php" method="POST">
            <input type="hidden" name="tipo" value="<?php echo $tipo; ?>">
            <input type="hidden" name="nome" value="<?php echo $nome; ?>">
            <input type="hidden" name="idade" value="<?php echo $idade; ?>">
            <input type="hidden" name="raca" value="<?php echo $raca; ?>">
            <input type="hidden" name="classe" value="<?php echo $classe; ?>">

            <!--FORÇA-->
            <div>
                <label for="forca">Força</label>
                <button>-</button>
                <div style="border: 1px solid #000; padding: 10px;">
                    teste
                </div>
                <!--<input type="text" name=forca value="0">-->
                <button>+</button>
            </div>
            <!--DESTREZA-->
            <div>
                <label for="destreza">Destreza</label>
                <button style="display: inline-block;">-</button>
                <input type="text" name=destreza>
                <button style="display: inline-block;">+</button>
            </div>
            <!--CONSTITUIÇÃO-->
            <div>
                <label for="constituicao">Constituição</label>
                <button style="display: inline-block;">-</button>
                <input type="text" name="constituicao">
                <button style="display: inline-block;">+</button>
            </div>
            <!--INTELIGÊNCIA-->
            <div>
                <label for="inteligencia">Inteligência</label>
                <button style="display: inline-block;">-</button>
                <input type="text" name="inteligencia">
                <button style="display: inline-block;">+</button>
            </div>
            <!--SABEDORIA-->
            <div>
                <label for="sabedoria">Sabedoria</label>
                <button style="display: inline-block;">-</button>
                <input type="text" name="sabedoria">
                <button style="display: inline-block;">+</button>
            </div>
            <!--CARISMA-->
            <div>
                <label for="carisma">Carisma</label>
                <button style="display: inline-block;">-</button>
                <input type="text" name="carisma">
                <button style="display: inline-block;">+</button>
            </div>

            <input type="submit" value="Gerar :D" name="gerar">

        </form>
    </header>
</body>

</html>