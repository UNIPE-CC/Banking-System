<?php
// Conexão direta
$conexao = mysqli_connect("localhost", "root", "", "bankingsystem");

if (!$conexao) {
    die("Erro ao conectar ao banco: " . mysqli_connect_error());
}

// Usuário fixo para teste
$usuario_id = 3;

// Verifica se o formulário foi enviado
if (isset($_POST['valor'])) {
    $valor = floatval($_POST['valor']);

    if ($valor > 0) {
        // Atualiza saldo
        $sql = "UPDATE contas SET saldo = saldo + $valor WHERE usuario_id = $usuario_id";
        if (mysqli_query($conexao, $sql)) {
            echo "<p style='color: green;'>Depósito de R$ " . number_format($valor, 2, ',', '.') . " realizado com sucesso!</p>";
        } else {
            echo "<p style='color: red;'>Erro ao depositar.</p>";
        }
    } else {
        echo "<p style='color: red;'>Valor inválido!</p>";
    }
}

// Pega o saldo atual
$sql_saldo = "SELECT saldo FROM contas WHERE usuario_id = $usuario_id LIMIT 1";
$result = mysqli_query($conexao, $sql_saldo);
$saldo = 0;
if ($result && mysqli_num_rows($result) > 0) {
    $dados = mysqli_fetch_assoc($result);
    $saldo = number_format($dados['saldo'], 2, ',', '.');
}
?>

<h3>Saldo atual: R$ <?php echo $saldo; ?></h3>

<form method="post">
    <label>Valor para depositar:</label>
    <input type="number" step="0.01" name="valor" required>
    <button type="submit">Depositar</button>
</form>
