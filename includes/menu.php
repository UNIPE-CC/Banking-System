<nav class="navbar navbar-expand-sm bg-primary navbar-dark" id="navMenu">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>

            <?php if(!isset($_SESSION['id'])): ?>
            <li class="nav-item">
                <a class="nav-link" href="index.php?pg=pages/sobre">Sobre</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?pg=pages/contato">Contato</a>
            </li>         
            <li class="nav-item">
                <a class="nav-link" href="index.php?pg=pages/login">Login</a>
            </li>

            <?php elseif($_SESSION['tipo'] == 'admin'): ?>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?pg=admin/adminHome">Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Sair</a>
                </li>

            <?php elseif($_SESSION['tipo'] == 'cliente'): ?>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?pg=pages/contato">Contato</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="index.php?pg=cliente/clienteHome">Saldo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Sair</a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>