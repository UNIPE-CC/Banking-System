<?php

    include_once "includes/header.php";
    include_once "includes/menu.php";

    if(empty($_SERVER['QUERY_STRING'])){
        $pg = "pages/home";
        include_once "$pg.php";
    }elseif($_GET['pg']) {
        $pg = "pages/" . $_GET['pg'];
        include_once "$pg.php";
    }else{
        echo "Página não encontrada";
    }

    include_once "includes/footer.php";