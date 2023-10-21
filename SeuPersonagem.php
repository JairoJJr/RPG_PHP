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
        <div><img src="seupersonagem.png"></div>
        <main>
            <p><?php
                require 'prompt.php';
                echo $prompt;

                $apiKey = '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';

                $endPoint = 'https://api.openai.com/v1/chat/completions';

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

                if($response === false) {
                    echo 'Deu Ruim!' . curl_error($ch);
                }else {
                    $resultado = json_decode($response,true);
                    echo '<div>';
                    echo var_dump($resultado);
                    echo '<div>';
                }
                curl_close($ch);
            ?></p>
        </main>
    </body>
</html>