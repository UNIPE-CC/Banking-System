<?php
include_once "../includes/protege.php";

if ($_SESSION['tipo'] != 'cliente') {
    echo "Acesso negado!";
    exit;
}
?>
<h1>Bem-vindo, Cliente!</h1>
