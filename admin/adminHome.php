<?php
    include_once "/../includes/protege.php";

    if ($_SESSION['tipo'] != 'admin') {
        echo "Acesso negado!";
        exit;
    }
    ?>
    <h1>Bem-vindo, Administrador!</h1>
    <p>Bem-vindo, <?= $_SESSION['nome'] ?>!</p>

    <ul>
        <li><a href="../index.php?pg=admin/cadastrar">Cadastrar Cliente</a></li>
        <li><a href="../index.php?pg=admin/listar">Listar Clientes</a></li>
    </ul>