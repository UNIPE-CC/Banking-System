<?php
    //include_once __DIR__ . "/../includes/protege.php";
    include_once "config.inc.php";

    $sql = "SELECT * FROM usuarios";

    $resultado = mysqli_query($conexao, $sql);

    echo "<h2>Lista de Clientes</h2><hr>";

    if (mysqli_num_rows($resultado) > 0) {
        while($dados = mysqli_fetch_array($resultado)) {
            echo "ID: " . $dados['id'] . "<br>";
            echo "Nome: " . $dados['nome'] . "<br>";
            echo "CPF: " . $dados['cpf'] . "<br>";
            echo "Email: " . $dados['email'] . "<br>";
            echo "Tipo: " . $dados['tipo'] . "<br>";
            echo "<a href='?pg=controller/formAlterar&id=$dados[id]'>Editar</a><br>";
            echo "<a href='?pg=controller/deletar&id=$dados[id]'>Excluir</a><br>";
            echo "<br>";
        }
    }else{
        echo "Nenhum cliente cadastrado!";
    }
    // if ($_SESSION['tipo'] != 'admin') {
    //     echo "Acesso negado!";
    //     exit;
    // }
?>