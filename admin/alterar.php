<?php
    require_once __DIR__ . "config.inc.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $tipo = $_POST["tipo"];

        $sql = "UPDATE usuarios SET
                nome = '$nome',
                email = '$email', 
                senha = '$senha', 
                tipo = '$tipo'
                WHERE id = '$id'";

        if(mysqli_query($conexao, $sql)){
            echo "<h3>Cliente alterado com sucesso!</h3>";
            echo "<a href='?pg=admin/adminHome'>Voltar</a>";
        }else{
            echo "<h3>Erro ao alterar o cliente</h3>";
        }
    }else{
        echo "<h2>Acesso negado</h2>";
        echo "<a href='?pg=admin/adminHome'>Voltar</a>";
    }