<?php
    require_once "config.inc.php";
    $id = $_GET["id"];
    $qsl = "DELETE FROM usuarios WHERE id = '$id'";

    $resultado = mysqli_query($conexao, $qsl);

    if($resultado){
        echo "Usuario deletado com sucesso!";
        echo "<a href='?pg=controller/adminHome'>Voltar</a>";
    }

    mysqli_close($conexao);
?>