<link rel="stylesheet" href="../assets/css/admin.css">
<link rel="stylesheet" href="../assets/css/style.css">

<div class="admin-header">
    <nav class="navbar navbar-expand-lg shadow-sm py-3">
        <div class="container-logo">
            <a class="navbar-brand d-flex align-items-center" href="?pg=index">
                <img src="../assets/img/logo.png" class="logo-image" alt="Logo">
                <span class="admin-span">Mister Bank</span>
            </a>
        </div>
    </nav>
</div>

<div class="admin-menu">
    <a href='?pg=controller/adminHome'>Listar Clientes</a> 
    <a href='?pg=controller/form'>Cadastrar Clientes</a>
</div>

<div class="admin-content">
    <?php
        if(empty($_SERVER['QUERY_STRING'])){
        echo "<h3>Bem-vindo ao painel admin.";
        }else {
            $pg = "$_GET[pg]";
            include_once "$pg.php";
        }
    ?>
</div>

<footer class="footer-container">
    <div class="container d-flex align-items-center py-3">
        <a class="navbar-brand d-flex align-items-center" href="?pg=index">
            <img src="../assets/img/logo.png" class="logo-image" alt="Logo do Sistema">
            <span class="admin-span">Mister Bank</span>
        </a>
    </div>
</footer>