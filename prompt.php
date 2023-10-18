<?php
    $tipo = $_POST['tipo'];
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $sexo = $_POST['sexo'];
    $tracos_de_personalidade = $_POST['tracos_de_personalidade'];
    $raca = $_POST['raca'];
    $classe = $_POST['classe'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prompt</title>
</head>
<body>
    <h1>pág temporária</h1>
    <!--Testando Variáveis -->
    <p><?php 
        echo $tipo . '<br>';
        echo $nome . '<br>';
        echo $idade . '<br>';
        echo $sexo . '<br>';
        echo $tracos_de_personalidade . '<br>';
        echo $raca . '<br>';
        echo $classe . '<br>';
    ?></p>
    <!--Testando Prompt -->
    <p><?php 
        $prompt = "Crie uma história para meu personagem de D&D para uma campanha que vou iniciar. O personagem se chama $nome, tem $idade anos de idade, é da raça $raça, da classe $classe, é do sexo $sexo, seu traço de personalidade é $tracos__de_personalidade, a história será de <tema_background>. Para preenchimento da ficha, com base na história e personalidade dele, também crie frases de até 100 caracteres para os campos de: Traços de personalidade, Ideais, Vínculos e Fraquezas. Suas regras para criar a história são: Não especifique o local de nascimento e nem dê nomes de lugares, apenas características sobre o lugar; Só escreva a história anterior à campanha que eu iniciarei agora, sem fazer nenhum tipo de introdução à jornada que farei no jogo; Não faça afirmações do tipo \"moral da história\".
        Com base nesse personagem preencha os pontos de atributos que são: força, destreza, constituição, inteligência, sabedoria e carisma.";
        echo $prompt;
    ?></p>
</body>
</html>