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

            $apiKey = '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';

            $endPoint = 'https://api.openai.com/v1/chat/completions';

            $dados = [
                'model' => 'gpt-3.5-turbo',
                'messages' => ['role'=>'user', 'content'=>$prompt]
            ];

            $ch = curl_init($endPoint);

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Authorization: Bearer ' . $apiKey,
                'Content-Type: application/json',
            ]);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($dados));

            $response = curl_exec($ch);

            if($response === false) {
                echo 'Deu Ruim!' . curl_error($ch);
            }else {
                $resultado = json_decode($response);
                echo $resultado->choices[0]->text;
            }
            //curl_close($ch);
            ?></p>
    </body>
</html>