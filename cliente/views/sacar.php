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
if (isset($_POST['valor'])) {
    $valor = floatval($_POST['valor']);

    // Pega o saldo atual
    $sql_saldo = "SELECT saldo FROM contas WHERE usuario_id = $usuario_id LIMIT 1";
    $result = mysqli_query($conexao, $sql_saldo);
    $saldo = 0;
    if ($result && mysqli_num_rows($result) > 0) {
        $dados = mysqli_fetch_assoc($result);
        $saldo = $dados['saldo'];
    }

    if ($valor > 0) {
        if ($valor <= $saldo) {
            // Atualiza saldo
            $sql = "UPDATE contas SET saldo = saldo - $valor WHERE usuario_id = $usuario_id";
            if (mysqli_query($conexao, $sql)) {
                $msg = "Saque de R$ " . number_format($valor, 2, ',', '.') . " realizado com sucesso!";
                $msg_class = "msg-sucesso";
            } else {
                $msg = "Erro ao sacar.";
                $msg_class = "msg-erro";
            }
        } else {
            $msg = "Saldo insuficiente!";
            $msg_class = "msg-erro";
        }
    } else {
        $msg = "Valor inválido!";
        $msg_class = "msg-erro";
    }
}

// Pega o saldo atualizado
$sql_saldo = "SELECT saldo FROM contas WHERE usuario_id = $usuario_id LIMIT 1";
$result = mysqli_query($conexao, $sql_saldo);
$saldo = 0;
if ($result && mysqli_num_rows($result) > 0) {
    $dados = mysqli_fetch_assoc($result);
    $saldo = number_format($dados['saldo'], 2, ',', '.');
}
?>

<div class="cliente-card">
    <h3>Saldo atual: R$ <?php echo $saldo; ?></h3>

    <?php if($msg != ""): ?>
        <p class="<?php echo $msg_class; ?>"><?php echo $msg; ?></p>
    <?php endif; ?>

    <form class="cliente-form" method="post">
        <label>Valor para sacar:</label>
        <input type="number" step="0.01" name="valor" required>
        <button type="submit">Sacar</button>
    </form>
</div>
