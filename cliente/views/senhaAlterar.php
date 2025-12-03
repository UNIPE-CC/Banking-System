<?php
// Conexão direta
$conexao = mysqli_connect("localhost", "root", "", "bankingsystem");

if (!$conexao) {
    die("Erro ao conectar ao banco: " . mysqli_connect_error());
}

// Usuário fixo para teste
$usuario_id = 3;

// Inicializa mensagem
$msg = "";
$msg_class = "";

// Verifica se o formulário foi enviado
if (isset($_POST['nova_senha'])) {
    $nova_senha = $_POST['nova_senha'];

    if (!empty($nova_senha)) {
        // Atualiza senha no banco (hash seguro)
        $senha_hash = password_hash($nova_senha, PASSWORD_DEFAULT);
        $sql = "UPDATE usuarios SET senha = '$senha_hash' WHERE id = $usuario_id";

        if (mysqli_query($conexao, $sql)) {
            $msg = "Senha alterada com sucesso!";
            $msg_class = "msg-sucesso";
        } else {
            $msg = "Erro ao alterar senha.";
            $msg_class = "msg-erro";
        }
    } else {
        $msg = "Informe uma senha válida!";
        $msg_class = "msg-erro";
    }
}
?>

<div class="cliente-card">
    <h3>Alterar senha</h3>

    <?php if($msg != ""): ?>
        <p class="<?php echo $msg_class; ?>"><?php echo $msg; ?></p>
    <?php endif; ?>

    <form class="cliente-form" method="post">
        <label>Nova senha:</label>
        <input type="password" name="nova_senha" required>
        <button type="submit">Alterar</button>
    </form>
</div>
