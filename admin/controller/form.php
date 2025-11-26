<h2>Cadastrar cliente</h2>
<form action="?pg=controller/cadastrar" method="post">
    <label>Nome</label>
    <input type="text" name="nome" required><br>
    <label>CPF</label>
    <input type="text" name="cpf" required><br>
    <label>Email</label>
    <input type="email" name="email" required><br>
    <label>Senha</label>
    <input type="password" name="senha" required><br>
    <label>Tipo</label>
    <select name="tipo" id="tipo">
        <option value="Cliente" selected>Cliente</option>
        <option value="Admin">Admin</option>
    </select><br>
    <button type="submit">Cadastrar</button>
    <a href='?pg=controller/adminHome.php'>Voltar</a>
</form>