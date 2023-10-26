<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SeuPersonagem</title>
        <link rel="stylesheet" href="paginasaida.css">
    </head> 
    <body>
        <!--Imagem Seu personagem-->
        <div><img src="img/seupersonagem.png"></div>
        <main>
            <p><?php
                //INSERE O ARQUIVO QUE ESTÁ COM O PROMPT
                require 'prompt.php';
                //INSERE O  ARQUIVO QUE CHAMA AS VARIÁVEIS LOCAIS
                require 'dotenv.php';

                //IMPRIME O PROMPT PARA TESTE (NÃO ESTARÁ NO PROJETO FINAL)
                //echo $prompt;
                
                //CHAMA A VARIÁVEL QUE GUARDA A API KEY NO ARQUIVO .ENV
                $apiKey = $API_KEY;

                //CONEXÃO COM API
                /*$endPoint = 'https://api.openai.com/v1/chat/completions';

                $dados = json_encode(array(
                    'model' => 'gpt-3.5-turbo',
                    'messages' => [
                        ['role' => 'user', 'content' => "$prompt"],
                    ]
                    ));

                $ch = curl_init();

                curl_setopt($ch, CURLOPT_URL, $endPoint);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, [
                    'Content-Type: application/json',
                    'Authorization: Bearer ' . $apiKey,                
                ]);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $dados);

                $response = curl_exec($ch);
                
                //RESPOSTA ENVIADA DA API
                if($response === false) {
                    echo 'Deu Ruim!' . curl_error($ch);
                }else {
                    $resultado = json_decode($response,true);
                    echo '<div>';
                    //echo var_dump($resultado);
                    echo $resultado['choices'][0]['message']['content'];
                    echo '<div>';
                }
                curl_close($ch);*/

                //TEXTO EXEMPLO PARA TRABALHAR NO CSS DA RESPOSTA

                echo 'Lairo Pimentheus, um jovem ladino justo, nasceu em uma cidade dividida por desigualdades sociais. Seus cabelos loiros, trançados com colares, eram um símbolo de sua resistência. Com apenas 10 anos de idade, ele testemunhou a opressão sofria pela população mais pobre e decidiu que faria parte da revolução. Seu treinamento como ladino começou cedo, quando ele se tornou um aprendiz de um grupo de ladrões que roubavam dos ricos para ajudar os necessitados. Lairo adquiriu habilidades de furtividade e enganação, as quais aperfeiçoou ao longo dos anos. Ele se destacava pela sua justiça e era conhecido como alguém que lutava pelo bem comum. Suas ações inspiraram muitos a se juntarem à causa da revolução popular. Lairo liderou manifestações pacíficas, persuadindo as classes mais baixas a se unirem contra a tirania. Seus traços de personalidade refletem sua liderança e coragem: "Justiça é meu norte, independentemente das circunstâncias." Seu ideal é "Um mundo onde todos tenham igualdade de oportunidades." Seu vínculo é com as pessoas que lutam ao seu lado: "A revolução é um esforço conjunto, não posso deixar meus companheiros para trás." Suas fraquezas são sua teimosia e imprudência: "Minha determinação muitas vezes me cega para os perigos imediatos." Força: 12 Destreza: 16 Constituição: 14 Inteligência: 13 Sabedoria: 10 Carisma: 15';
            ?></p>
        </main>
    </body>
</html>