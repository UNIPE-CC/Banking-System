<?php
    //include_once __DIR__ . "/../includes/protege.php";
    include_once __DIR__ . "/../../config.inc.php";

    $sql = "SELECT u.id, u.nome, u.cpf, u.email, u.tipo, c.saldo
            FROM usuarios u
            LEFT JOIN contas c ON u.id = c.usuario_id
            WHERE u.tipo = 'cliente'";

    $resultado = mysqli_query($conexao, $sql);

    echo "<h2>Lista de Clientes</h2><hr>";

    if (mysqli_num_rows($resultado) > 0) {
        while($dados = mysqli_fetch_array($resultado)) {
            echo "ID: " . $dados['id'] . "<br>";
            echo "Nome: " . $dados['nome'] . "<br>";
            echo "CPF: " . $dados['cpf'] . "<br>";
            echo "Email: " . $dados['email'] . "<br>";
            echo "Tipo: " . $dados['tipo'] . "<br>";
            echo "Saldo: R$ " . number_format($dados['saldo'], 2, ',', '.') . "<br>";
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