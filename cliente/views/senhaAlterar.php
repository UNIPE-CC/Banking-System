<?php
// Conexão direta
$conexao = mysqli_connect("localhost", "root", "", "bankingsystem");

if (!$conexao) {
    die("Erro ao conectar ao banco: " . mysqli_connect_error());
}

// Usuário fixo para teste
$usuario_id = 3;

// Verifica se o formulário foi enviado
if (isset($_POST['nova_senha'])) {
    $nova_senha = $_POST['nova_senha'];

    if (!empty($nova_senha)) {
        // Atualiza senha no banco (usando hash simples)
        $senha_hash = password_hash($nova_senha, PASSWORD_DEFAULT);
        $sql = "UPDATE usuarios SET senha = '$senha_hash' WHERE id = $usuario_id";

        if (mysqli_query($conexao, $sql)) {
            echo "<p style='color: green;'>Senha alterada com sucesso!</p>";
        } else {
            echo "<p style='color: red;'>Erro ao alterar senha.</p>";
        }
    } else {
        echo "<p style='color: red;'>Informe uma senha válida!</p>";
    }
}
?>

<h3>Alterar senha</h3>

<form method="post">
    <label>Nova senha:</label>
    <input type="password" name="nova_senha" required>
    <button type="submit">Alterar</button>
</form>
