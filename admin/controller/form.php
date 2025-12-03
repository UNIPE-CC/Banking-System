<h2 class="form-title">Cadastrar Cliente</h2>
<hr>
<div class="form-card">
    <form action="?pg=controller/cadastrar" method="post" class="cliente-form">
    <div class="form-group">
        <label>Nome</label>
        <input type="text" name="nome" required>
    </div>    
        <div class="form-group">
            <label>CPF</label>
            <input type="text" name="cpf" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" required>
        </div>
        <div class="form-group">
            <label>Senha</label>
            <input type="password" name="senha" required>
        </div>
        <div class="form-group">
            <label>Tipo</label>
            <select name="tipo" id="tipo">
                <option value="Cliente" selected>Cliente</option>
                <option value="Admin">Admin</option>
            </select>
        </div>
        <div class="form-buttons">
            <button type="submit" class="btn-submit">Cadastrar</button>
            <a href='?pg=controller/adminHome' class="btn-back">Voltar</a>
        </div>
    </form>
</div>