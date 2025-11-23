<?php
    require_once __DIR__ . "config.inc.php";
    $id = $_GET["id"];
    $qsl = "DELETE FROM usuarios WHERE id = '$id'";

    $resultado = mysqli_query($conexaom, $qsl);

    if($resultado){
        echo "Usuario deletado com sucesso!";
        echo "<a href='?pg=admin/adminHome'>Voltar</a>";
    }

    mysqli_close($conexao);