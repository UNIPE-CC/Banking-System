<?php
    require_once __DIR__ . "/../../config.inc.php";

    $id = $_GET['id'];
    $sql = "SELECT * FROM usuarios WHERE id = '$id'";
    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){
        while($dados = mysqli_fetch_array($resultado)){
            $nome = $dados['nome'];
            $cpf = $dados['cpf'];
            $email = $dados['email'];
            $senha = $dados['senha'];
            $tipo = $dados['tipo'];
            $id = $dados['id'];
        }
    }
?>

<h2 class="form-title">Atualizar Cliente</h2>
<hr>

<div class="form-card">
    <form action="?pg=controller/alterar" method="post" class="cliente-form">
        <input type="hidden" name="id" value="<?=$id?>">
        <div class="form-group">
            <label>Nome:</label>
            <input type="text" name="nome" value="<?=$nome?>">
        </div>
        <div class="form-group">
            <label>cpf:</label>
            <input type="text" name="cpf" value="<?=$cpf?>">
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="text" name="email" value="<?=$email?>">
        </div>
        <div class="form-group">
            <label>Senha:</label>
            <input type="text" name="senha" value="<?=$senha?>">
        </div>
        <div class="form-group">
            <label>Tipo:</label>
            <select name="tipo" required>
                <option value="Cliente" <?= ($tipo == "Cliente" ? "selected" : "") ?>>Cliente</option>
                <option value="Admin" <?= ($tipo == "Admin" ? "selected" : "") ?>>Admin</option>
            </select>
        </div>
        <div class="form-buttons">
            <button type="submit" class="btn-submit">Atualizar</button>
            <a href='?pg=controller/adminHome' class="btn-back">Voltar</a>
        </div>
    </form>
</div>