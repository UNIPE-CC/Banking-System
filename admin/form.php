<h2>Cadastrar cliente</h2>
<form action="index.php?pg=admin/cadastrar" method="post">
    <label>Nome</label>
    <input type="text" name="nome" required><br>
    <label>CPF</label>
    <input type="text" name="cpf" required><br>
    <label>Email</label>
    <input type="email" name="email" required><br>
    <label>Senha</label>
    <input type="password" name="senha" required><br>
    <label>Tipo</label>
    <input type="text" name="tipo" required><br>

    <button type="submit">Cadastrar</button>
</form>