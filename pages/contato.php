<?php
    echo "<h2>Fale Conosco</h2>";

?>
<form action="pages/faleConoscoConfirm.php" method="POST">
    <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" class="form-control" id="nome" placeholder="Seu nome" name="nome" required>
    </div>
    <div class="mb-3 mt-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Seu email" name="email" required>
    </div>
    <div class="mb-3 mt-3">
        <label for="assunto" class="form-label">Assunto:</label>
        <input type="text" class="form-control" id="assunto" placeholder="Assunto" name="assunto" required>
    </div>
    <div class="mb-3 mt-3">
        <label for="mensagem" class="form-label">Mensagem:</label>
        <textarea type="text" class="form-control" id="mensagem" placeholder="Sua mensagem" name="mensagem" required></textarea>
    </div>

    <div class="form-check mb-3">
        <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="remember"> Remember me
        </label>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>