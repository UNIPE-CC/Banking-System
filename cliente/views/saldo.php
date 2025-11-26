<?php
// Conexão direta com o banco
$conexao = mysqli_connect("localhost", "root", "", "bankingsystem");

if (!$conexao) {
    die("Erro ao conectar ao banco: " . mysqli_connect_error());
}

// Usuário fixo para teste
$usuario_id = 3;

// Consulta saldo
$sql = "SELECT saldo FROM contas WHERE usuario_id = $usuario_id LIMIT 1";
$result = mysqli_query($conexao, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $dados = mysqli_fetch_assoc($result);
    $saldo = number_format($dados['saldo'], 2, ',', '.');
} else {
    $saldo = "100,00";
}

// Mostra na tela
echo "<h3>Seu saldo atual:</h3>";
echo "<h1 style='color: green;'>R$ $saldo</h1>";
