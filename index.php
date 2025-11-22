<?php
    session_start();

    include_once "includes/header.php";
    include_once "includes/menu.php";

    if(!isset($_SESSION['id'])){
        include_once "pages/login.php";
        include_once "includes/footer.php";
        exit;
    }

    if(empty($_SERVER['QUERY_STRING'])){
        $pg = "pages/home";
        include_once "$pg.php";
    }elseif (isset($_GET['pg'])){
        $pg = $_GET['pg'];
        if(file_exists("$pg.php")){
            include_once "$pg.php";
        }else{
            echo "Página não encontrada";
        }
    }
    include_once "includes/footer.php";