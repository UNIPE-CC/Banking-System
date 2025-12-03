<link rel="stylesheet" href="../assets/css/cliente.css">
<link rel="stylesheet" href="../assets/css/style.css">

<?php
require_once __DIR__ . "/../../config.inc.php";

// ID do usuário logado (pegar da sessão, se disponível)
$usuario_id = $_SESSION['usuario_id'] ?? 3;

// Mensagem
$mensagem = "";

// Processa depósito
if (isset($_POST['valor'])) {
    $valor = floatval($_POST['valor']);

    if ($valor > 0) {
        $sql = "UPDATE contas SET saldo = saldo + $valor WHERE usuario_id = $usuario_id";
        if (mysqli_query($conexao, $sql)) {
            $mensagem = "<p class='msg-sucesso'>Depósito de R$ " . number_format($valor, 2, ',', '.') . " realizado com sucesso!</p>";
        } else {
            $mensagem = "<p class='msg-erro'>Erro ao depositar.</p>";
        }
    } else {
        $mensagem = "<p class='msg-erro'>Valor inválido!</p>";
    }
}

// Consulta saldo atual
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

    <?php echo $mensagem; ?>

    <form method="post" class="cliente-form">
        <label for="valor">Valor para depositar:</label>
        <input type="number" step="0.01" name="valor" id="valor" required>
        <button type="submit" class="btn">Depositar</button>
    </form>
</div>
