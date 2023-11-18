<?php

    $tipo = $_POST['tipo'];
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $sexo = $_POST['sexo'];
    $tracos_de_personalidade = $_POST['tracos_de_personalidade'];
    $raca = $_POST['raca'];
    $classe = $_POST['classe'];
    $tipo_cabelo = $_POST['tipo_cabelo'];
    $cor_cabelo = $_POST['cor_cabelo'];
    $acessorio_aparencia = $_POST['acessorio_aparencia'];
    $tema_background = $_POST['tema_background'];

    //echo $tipo . '<br>';
    //echo $nome . '<br>';
    //echo $idade . '<br>';
    //echo $sexo . '<br>';
    //echo $tracos_de_personalidade . '<br>';
    //echo $raca . '<br>';
    //echo $classe . '<br>';

    //Prompt
    
    $prompt = "Crie uma história para meu personagem de D&D para uma campanha que vou iniciar. O personagem se chama $nome, tem $idade anos de idade, é da raça $raca, da classe $classe, é do sexo $sexo, seu traço de personalidade é $tracos_de_personalidade, a história será de $tema_background. Seu cabelo é $cor_cabelo e do tipo $tipo_cabelo. Possui $acessorio_aparencia. Para preenchimento da ficha, com base na história e personalidade dele, também crie frases de até 100 caracteres para os campos de: Traços de personalidade, Ideais, Vínculos e Fraquezas. Suas regras para criar a história são: Não especifique o local de nascimento e nem dê nomes de lugares, apenas características sobre o lugar; Só escreva a história anterior à campanha que eu iniciarei agora, sem fazer nenhum tipo de introdução à jornada que farei no jogo; Não faça afirmações do tipo \"moral da história\"; Começe o texto sempre com a história, após terminar toda a história inclua os campos Traços de personalidade, Ideais, Vínculos e Fraquezas e por último os atributos, mantendo um mesmo padrão para todos os textos; Não liste a história como um atributo, já comece contando a história; Comece a história direto com o nome do personagem, não utilize frases como \"Era uma vez\".
    Com base nesse personagem preencha os pontos de atributos que são: força, destreza, constituição, inteligência, sabedoria e carisma.";
    ?>
</body>
</html>