<?php

    echo "<h1>Painel Cliente</h1>";

    echo "<a href='?pg=views/saldo'>Saldo</a> | ";
    echo "<a href='?pg=views/depositar'>Depositar</a> | ";
    echo "<a href='?pg=views/sacar'>Sacar</a> | ";
    echo "<a href='?pg=views/senhaAlterar'>Alterar senha</a> | ";
    echo "<hr>";

    if(empty($_SERVER['QUERY_STRING'])){
       echo "<h3>Bem-vindo ao painel Cliente.";
    }else {
        $pg = "$_GET[pg]";
        include_once "$pg.php";
    }