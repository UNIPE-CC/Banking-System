<?php
    include_once __DIR__ . "/../includes/protege.php";

    if ($_SESSION['tipo'] != 'admin') {
        echo "Acesso negado!";
        exit;
    }

    require_once __DIR__ . "/../config.inc.php";

    echo "<h2>Lista de Clientes</h2><hr>";

    $sql = "SELECT * FROM usuarios WHERE tipo = 'cliente'";
    $resultado = mysqli_query($conexao, $sql);

    echo "<a href='index.php?pg=admin/cadastrar'>Cadastrar Cliente</a><br><br>";

    if (mysqli_num_rows($resultado) > 0) {
        while ($dados = mysqli_fetch_assoc($resultado)) {
            echo "ID: " . $dados['id'] . "<br>";
            echo "Nome: " . $dados['nome'] . "<br>";
            echo "CPF: " . $dados['cpf'] . "<br>";
            echo "Email: " . $dados['email'] . "<br>";
            echo "<a href='index.php?pg=admin/alterar&id={$dados['id']}'>Editar</a><br>";
            echo "<a href='index.php?pg=admin/deletar&id={$dados['id']}'>Excluir</a><br>";
            echo "<hr>";
        }
    } else {
        echo "Nenhum cliente cadastrado!";
    }
