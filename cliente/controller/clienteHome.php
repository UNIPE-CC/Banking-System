<?php
include_once __DIR__ . "/../includes/protege.php";

if ($_SESSION['tipo'] != 'cliente') {
    echo "Acesso negado!";
    exit;
}
?>
<h1>Bem-vindo, Cliente!</h1>
