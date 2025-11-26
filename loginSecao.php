<?php

    // session_start();
    // require_once "config.inc.php";

    // $email = $_POST['email'];
    // $senha = $_POST['senha'];

    // $sql = "SELECT id, nome, senha, tipo FROM usuarios WHERE email = '$email'";
    // $resposta = mysqli_query($conexao, $sql);

    // if(mysqli_num_rows($resposta) > 0){
    //     $user = mysqli_fetch_assoc($resposta);

    //     if($senha == $user['senha']){
    //         $_SESSION['logado'] = true;
    //         $_SESSION['id'] = $user['id'];
    //         $_SESSION['nome'] = $user['nome'];
    //         $_SESSION['tipo'] = $user['tipo'];

    //         if($user['tipo'] == 'admin'){
    //             header("Location: index.php?pg=./admin/adminHome");
    //         }else{
    //             header("Location: index.php?pg=./cliente/clienteHome");
    //         }
    //         exit;

    //     }else{
    //         echo "Senha incorreta";
    //     }
    // }else{
    //     echo "Usuario nao encontrado";
    // }