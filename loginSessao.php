<?php
    session_start();

    if(!empty($_POST['email']) && (!empty($_POST['senha']))){

        require_once __DIR__ . "/config.inc.php";

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";
        $resposta = mysqli_query($conexao, $sql);

        if(mysqli_num_rows($resposta) < 1){

            unset($_SESSION['logado']);
            unset($_SESSION['id']);
            unset($_SESSION['nome']);
            unset($_SESSION['tipo']);

            header("Location: index.php?pg=pages/login");
        }else{
            $user = mysqli_fetch_assoc($resposta);

            $_SESSION['logado'] = true;
            $_SESSION['id'] = $user['id'];
            $_SESSION['nome'] = $user['nome'];
            $_SESSION['cpf'] = $user['cpf'];
            $_SESSION['tipo'] = $user['tipo'];
        
            if($user['tipo'] == 'admin'){
                header("Location: index.php?pg=admin/controller/adminHome");
            }else{
                header("Location: index.php?pg=cliente/controller/clienteHome");
            }
            exit;
        }
    }else{
        header("Location: index.php?pg=pages/login");
        exit;
    }