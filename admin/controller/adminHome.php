<?php
    include_once __DIR__ . "/../../config.inc.php";

    $sql = "SELECT u.id, u.nome, u.cpf, u.email, u.tipo, c.saldo
            FROM usuarios u
            LEFT JOIN contas c ON u.id = c.usuario_id
            WHERE u.tipo = 'cliente'";

    $resultado = mysqli_query($conexao, $sql);

    echo "<h2 class='titulo-lista'>Lista de Clientes</h2><hr>";

    if (mysqli_num_rows($resultado) > 0) {
        echo "<table class='clientes-tabela'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Email</th>
                    <th>Saldo</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
        ";
        while($dados = mysqli_fetch_array($resultado)) {
            echo "
        <tr>
            <td>{$dados['id']}</td>
            <td>{$dados['nome']}</td>
            <td>{$dados['cpf']}</td>
            <td>{$dados['email']}</td>
            <td>R$ " . number_format($dados['saldo'], 2, ',', '.') . "</td>
            <td class='acoes'>
                <a class='btn-edit' href='?pg=controller/formAlterar&id={$dados['id']}'>Editar</a>
                <a class='btn-delete' href='?pg=controller/deletar&id={$dados['id']}'>Excluir</a>
            </td>
        </tr>";
        }
    echo "</tbody></table>";
    
    }else{
        echo "<p class='nenhum-cliente'>Nenhum cliente cadastrado!</p>";
    }
?>