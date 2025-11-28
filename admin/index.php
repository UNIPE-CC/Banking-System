<?php

    echo "<h1>Painel Administrativo</h1>";

    echo "<a href='?pg=controller/adminHome'>Listar Clientes</a> | ";
    echo "<a href='?pg=controller/form'>Cadastrar Clientes</a> | ";
    echo "<hr>";

    if(empty($_SERVER['QUERY_STRING'])){
       echo "<h3>Bem-vindo ao painel admin.";
    }else {
        $pg = "$_GET[pg]";
        include_once "$pg.php";
    }