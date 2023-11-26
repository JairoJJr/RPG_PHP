<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Personagem</title>
    <link rel="stylesheet" href="paginaprincipal.css">
</head>

<body>
    <!--PopUp-->
    <div id="popup" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: rgba(220, 177, 176, 1); padding-left: 20px; padding-right: 20px; padding-bottom: 20px; padding-top: 0px; border: 2px solid #000000; text-align: center; text-shadow: 1.25px 1.25px 0px rgba(255, 255, 255, 0.781); max-width: 375px; max-height: 375px;">
        <p style="font-size: 40px; text-align: center; font-family: 'medieval';">Aguarde!</p>
        <p id="timerEspera" style="font-size: 30px; text-align: center; font-family: 'medieval';"></p>
        <p style="font-size: 25px; text-align: center; font-family: 'medieval';">Seu personagem está sendo gerado.</p>
    </div>
    <!--Funções JS Para POPup-->
    <script>
        function mostrarPopup() {
            var popup = document.getElementById("popup");
            popup.style.display = 'block';

            var duration = 60 * 2;
            var display = document.getElementById("timerEspera");

            timerEspera(duration, display);
        }

        function timerEspera(duration, display) {
            var timer = duration,
                min, sec;

            setInterval(function() {
                min = parseInt(timer / 60, 10);
                sec = parseInt(timer % 60, 10);

                min = min < 10 ? "0" + min : min;
                sec = sec < 10 ? "0" + sec : sec;

                display.textContent = min + ":" + sec;

                if (--timer < 0) {
                    timer = duration;
                }
            }, 1000);
        }
    </script>
    <!--IMAGEM CRIE O SEU PERSONAGEM-->
    <div><img src="img/criar_personagem2.png"></div>
    <main>
        <form action="SeuPersonagem.php" method="POST" onsubmit="mostrarPopup()">
            <!--TIPO-->
            <div>
                <label for="tipo">Escolha seu tipo de personagem:</label>
                <input type="radio" name="tipo" value="jogador" required>
                <label for="jogador">Jogador</label>
                <input type="radio" name="tipo" value="npc" required>
                <label for="npc">NPC</label>
                <br>
            </div>
            <!--NOME-->
            <div>
                <label for="nome">Nome do seu personagem:</label>
                <input type="text" name="nome" required>
            </div>
            <!--IDADE-->
            <div>
                <label for="idade">Idade do seu personagem:</label>
                <input type="number" name="idade" min="4" step="1" required>
            </div>
            <!--SEXO-->
            <div>
                <label for="sexo">Escolha o sexo do seu personagem:</label>
                <input type="radio" name="sexo" value="masculino" required>
                <label for="masculino">Masculino</label>
                <input type="radio" name="sexo" value="feminino" required>
                <label for="feminino">Feminino</label>
                <input type="radio" name="sexo" value="pni" required>
                <label for="pni">Prefiro não informar</label>
                <br>
            </div>
            <!--TRAÇOS DE PERSONALIDADE-->
            <div>
                <label for="tracos_de_personalidade">Traços de personalidade:</label>
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
                <label for="raca">Escolha sua raça:</label>
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
                <label for="tipo_cabelo">Tipo de cabelo:</label>
                <select name="tipo_cabelo">
                    <option value="curto">Curto</option>
                    <option value="comprido">Comprido</option>
                    <option value="trancas">Tranças</option>
                    <option value="calvo">Calvo</option>
                </select>
            </div>
            <!--COR DO CABELO-->
            <div>
                <label for="cor_cabelo">Cor do cabelo:</label>
                <select name="cor_cabelo">
                    <option value="preto">Preto</option>
                    <option value="castanho">Castanho</option>
                    <option value="loiro">Loiro</option>
                    <option value="ruivo">Ruivo</option>
                    <option value="verde">Verde</option>
                    <option value="azul">Azul</option>
                    <option value="roxo">Roxo</option>
                </select>
            </div>
            <!--Acessórios ou Aparência-->
            <div>
                <label for="acessorio_aparencia">Traços de aparência ou acessório:</label>
                <select name="acessorio_aparencia">
                    <option value="barba">Barba</option>
                    <option value="cicatriz">Cicatriz no rosto</option>
                    <option value="tatuagens">Tatuagens</option>
                    <option value="brinco">Brinco</option>
                    <option value="colar">Colar</option>
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
            <div><input type="submit" value="Criar" name="proximo"></div>
        </form>
        <?php
        //    if (isset($_POST['proximo'])){
        //        header('location: SeuPersonagem.php');
        //        require 'prompt.php';
        //    }
        ?>
    </main>
</body>

</html>