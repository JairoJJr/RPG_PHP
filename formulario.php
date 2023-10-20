<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Personagem</title>
    <link rel="stylesheet" href="newcss.css">
</head>

<body>
    <main>
        <header><h1>Crie o seu personagem de RPG</h1></header>
        <form action="SeuPersonagem.php" method="POST">

            <!--TIPO-->
            <div>
                <label for="tipo">Escolha seu tipo de Personagem:</label>
                <input type="radio" name="tipo" value="jogador" required>
                <label for="jogador">Jogador</label>
                <input type="radio" name="tipo" value="npc" required>
                <label for="npc">NPC</label>
                <br>
            </div>
            <!--NOME-->
            <div>
                <label for="nome">Nome do Seu Personagem:</label>
                <input type="text" name="nome">
            </div>
            <!--IDADE-->
            <div>
                <label for="idade">Idade Seu Personagem:</label>
                <input type="text" name="idade">
            </div>
            <!--SEXO-->
            <div>
                <label for="sexo">Escolha o sexo do seu Personagem:</label>
                <input type="radio" name="sexo" value="masculino" required>
                <label for="masculino">Masculino</label>
                <input type="radio" name="sexo" value="feminino" required>
                <label for="feminino">Feminino</label>
                <input type="radio" name="sexo" value="pni" required>
                <label for="pni">Prefiro não Informar</label>
                <br>
            </div>
            <!--TRAÇOS DE PERSONALIDADE-->
            <div>
                <label for="tracos_de_personalidade">Traços de Personalidade</label>
                <select name="tracos_de_personalidade">
                    <option value="justo">Justo</option>
                    <option value="esperto">Esperto</option>
                    <option value="empatico">Empático</option>
                    <option value="corajoso">Corajoso</option>
                    <option value="leal">Leal</option>
                    <option value="criativo">Criativo</option>
                    <option value="paciente">Paciente</option>
                    <option value="generoso">Generoso</option>
                    <option value="determinado">Determinado</option>
                    <option value="alegre">Alegre</option>
                    <option value="manipulador">Manipulador</option>
                    <option value="perverso">Perverso</option>
                    <option value="egoista">Egoísta</option>
                    <option value="arrogante">Arrogante</option>
                    <option value="teimoso">Teimoso</option>
                    <option value="rancoroso">Rancoroso</option>
                    <option value="cinico">Cínico</option>
                    <option value="inseguro">Inseguro</option>
                    <option value="irresponsavel">Irresponsável</option>
                    <option value="hostil">Hostil</option>
                    <option value="impulsivo">Impulsivo</option>
                    <option value="desonesto">Desonesto</option>
                    <option value="preconceituoso">Preconceituoso</option>
                    <option value="mesquinho">Mesquinho</option>
                    <option value="vingativo">Vingativo</option>
                </select>
            </div>
            <!--RAÇA-->
            <div>
                <label for="raca">Escolha sua Raça:</label>
                <select name="raca">
                    <option value="humano">Humano</option>
                    <option value="elfo">Elfo</option>
                    <option value="anao">Anão</option>
                    <option value="halfling">Halfling</option>
                    <option value="gnomo">Gnomo</option>
                    <option value="tiefling">Tiefling</option>
                    <option value="dragonborn">Dragonborn</option>
                    <option value="meio-elfo">Meio-Elfo</option>
                    <option value="meio-orc">Meio-Orc</option>
                </select>
            </div>
            <!--CLASSE-->
            <div>
                <label for="classe">Escolha sua classe:</label>
                <select name="classe">
                    <option value="barbaro">Bárbaro</option>
                    <option value="bardo">Bardo</option>
                    <option value="bruxo">Bruxo</option>
                    <option value="clerigo">Clérigo</option>
                    <option value="druida">Druida</option>
                    <option value="feiticeiro">Feiticeiro</option>
                    <option value="guerreiro">Guerreiro</option>
                    <option value="guardiao">Guardião</option>
                    <option value="ladino">Ladino</option>
                    <option value="mago">Mago</option>
                    <option value="monge">Monge</option>
                    <option value="paladino">Paladino</option>
                </select>
            </div>
            <!--TIPO DO CABELO-->
            <div>
                <label for="tipo_cabelo">Tipo de Cabelo:</label>
                <select name="tipo_cabelo">
                    <option value="curto">Curto</option>
                    <option value="comprido">Comprido</option>
                    <option value="calvo">Calvo</option>
                    <option value="trancas">Tranças</option>
                </select>
            </div>
            <!--COR DO CABELO-->
            <div>
                <label for="cor_cabelo">Cor do Cbelo:</label>
                <select name="cor_cabelo">
                    <option value="preto">Preto</option>
                    <option value="castanho">Castanho</option>
                    <option value="loiro">Loiro</option>
                    <option value="ruivo">Ruivo</option>
                    <option value="azul">Azul</option>
                    <option value="verde">Verde</option>
                    <option value="roxo">Roxo</option>
                </select>
            </div>
            <!--Acessórios ou Aparência-->
            <div>
                <label for="acessorio_aparencia">Traços de Aparência ou Acessório:</label>
                <select name="acessorio_aparencia">
                    <option value="cicatriz">Cicatriz no rosto</option>
                    <option value="brinco">Brinco</option>
                    <option value="colar">Colar</option>
                    <option value="tatuagens">Tatuagens</option>
                </select>
            </div>
            <!--TEMA DO BACKGROUND-->
            <div>
                <label for="tema_background">Escolha o tema da sua história:</label>
                <select name="tema_background">
                    <option value="historia vinganca">História de Vingança</option>
                    <option value="jornada heroi">Jornada do Herói</option>
                    <option value="conspiracao politica">Conspiração Política</option>
                    <option value="amor proibido">Amor Proibido</option>
                    <option value="misterio sobrenatural">Mistério Sobrenatural</option>
                    <option value="aventura exploracao">Aventura de Exploração</option>
                    <option value="fuga prisao">A Fuga da Prisão</option>
                    <option value="guerra epica">Guerra Épica</option>
                    <option value="busca tesouro">Busca pelo Tesouro</option>
                    <option value="redencao vilao">Redenção do Vilão</option>
                    <option value="tragedia amor">Tragédia de Amor</option>
                    <option value="confronto deuses">Confronto de Deuses</option>
                    <option value="intriga corte real">Intriga na Corte Real</option>
                    <option value="ascensao poder">Ascensão ao Poder</option>
                    <option value="missao resgate">Missão de Resgate</option>
                    <option value="sobrevivencia ambiente hostil">Sobrevivência em Ambiente Hostil</option>
                    <option value="desafio sobrevivencia">Desafio de Sobrevivência</option>
                    <option value="competicao mortal">Competição Mortal</option>
                    <option value="busca verdade">Busca pela Verdade</option>
                    <option value="revolucao popular">Revolução Popular</option>
                    <option value="conflito racial">Conflito Racial</option>
                </select>
            </div>
            <!--OBS
            <div>
                <label for="obs">Suas Observações Referentes a Aparência:</label>
                <input type="text" name="obs" maxlength="100" style="height: 200px;">
            </div>
            -->
            <input type="submit" value="Próximo" name="proximo" >
        </form>
        <?php 
            if (isset($_POST['proximo'])){
                header('location: SeuPersonagem.php');
                require 'prompt.php';
                
            }
        ?>
    </main>
</body>

</html>