<?php
    include("conexao.php");

     // Recupera o último ID inserido na tabela para incrementar o Cod_historia
    
    $sql="INSERT INTO rpg_resposta(resposta)
        VALUES ('$resposta')";
    
    mysqli_query($conexao, $sql);
    mysqli_close($conexao); 
?>