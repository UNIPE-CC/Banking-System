<?php
    require_once __DIR__ . "/../config.inc.php";

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

<h2>Atualizar Cliente</h2>

<form action="?pg=controller/alterar" method="post">
    <input type="hidden" name="id" value="<?=$id?>">
    <label>Nome:</label>
    <input type="text" name="nome" value="<?=$nome?>"><br>
    <label>cpf:</label>
    <input type="text" name="cpf" value="<?=$cpf?>"><br>
    <label>Email:</label>
    <input type="text" name="email" value="<?=$email?>"><br>
    <label>Senha:</label>
    <input type="text" name="senha" value="<?=$senha?>"><br>
    <label>Tipo:</label>
    <input type="text" name="tipo" value="<?=$tipo?>"><br>
    <input type="submit" value="Atualizar Cliente">
    <a href='?pg=controller/adminHome&id=$dados[id]'>Voltar</a><br>
</form>