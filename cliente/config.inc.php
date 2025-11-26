<?php
    $conexao = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($conexao, "bankingSystem");

    if(!$conexao){
        echo "Erro ao conectar ao banco";
    }