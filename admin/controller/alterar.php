<?php
    require_once __DIR__ . "/../../config.inc.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $tipo = $_POST["tipo"];
        $id = $_POST["id"];

        $sql = "UPDATE usuarios SET
                nome = '$nome',
                cpf = '$cpf',
                email = '$email', 
                senha = '$senha', 
                tipo = '$tipo'
                WHERE id = '$id'";

        echo "<div class='alterar-container'><div class='alterar-card'>";

        if(mysqli_query($conexao, $sql)){
            echo "<h3>Cliente alterado com sucesso!</h3>";
        }else{
            echo "<h3>Erro ao alterar o cliente</h3>";
        }
        echo "<a class='btn-voltar' href='?pg=controller/adminHome'>Voltar</a>";
        echo "</div></div>";
    }else{
        echo "<div class='alterar-container'><div class='alterar-card'>";
        echo "<h2>Acesso negado</h2>";
        echo "<a class='btn-voltar' href='?pg=controller/adminHome'>Voltar</a>";
        echo "</div></div>";
    }