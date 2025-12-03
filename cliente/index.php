<link rel="stylesheet" href="../assets/css/style.css">
<link rel="stylesheet" href="../assets/css/cliente.css">

<div class="page-wrapper">

    <div class="client-header">
        <nav class="navbar navbar-expand-lg shadow-sm py-3">
            <div class="client-logo-container">
                <a class="navbar-brand d-flex align-items-center" href="?pg=index">
                    <img src="../assets/img/logo.png" class="client-logo" alt="Logo">
                    <span class="client-title">Mister Bank</span>
                </a>
            </div>
        </nav>
    </div>

    <div class="client-menu">
        <a href='?pg=views/saldo'>Saldo</a>
        <a href='?pg=views/depositar'>Depositar</a>
        <a href='?pg=views/sacar'>Sacar</a>
        <a href='?pg=views/senhaAlterar'>Alterar Senha</a>
    </div>

    <div class="client-content">
        <?php
            if (empty($_SERVER["QUERY_STRING"])) {
                echo "<h3>Bem-vindo ao painel do cliente!</h3>";
            } else {
                $pg = $_GET["pg"];
                include_once "$pg.php";
            }
        ?>
    </div>

    <footer class="footer-container">
        <div class="client-logo-container">
            <img src="../assets/img/logo.png" class="client-logo" alt="Logo">
            <span class="client-title">Mister Bank</span>
        </div>
    </footer>

</div>