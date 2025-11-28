<?php
    require_once __DIR__ . "/../../config.inc.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $tipo = $_POST["tipo"];

        $sql = "INSERT INTO usuarios(nome, cpf, email, senha, tipo)
                VALUES('$nome', '$cpf', '$email', '$senha', '$tipo')";

        if(mysqli_query($conexao, $sql)){
            $usuario_id = mysqli_insert_id($conexao);

            $sqlConta = "INSERT INTO contas(usuario_id, saldo) VALUES('$usuario_id', 0)";
            mysqli_query($conexao, $sqlConta);

            echo "<h3>Cliente e conta cadastrado com sucesso!</h3>";
            echo "<a href='?pg=controller/adminHome'>Voltar</a>";
        }else{
            echo "<h3>Erro ao cadastrar o cliente</h3>";
            echo "<a href='?pg=controller/adminHome'>Voltar</a>";
        }
    }else{
        echo "<h2>Acesso negado</h2>";
        echo "<a href='?pg=controller/adminHome'>Voltar</a>";
    }