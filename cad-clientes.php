<h2>Cadastro de novo cliente</h2>

<form action="index.php?menu=inserir-clientes" method="post">
    <div>
        <label for="nomeCliente">Nome do cliente</label>
        <input type="text" name="nomeCliente" id="nomecliente" required>
    </div>
    <div>
        <label for="nomeCliente">Telefone do cliente</label>
        <input type="text" name="telefoneCliente" id="telefoneCliente" required>
    </div>
    <div>
        <label for="nomeCliente">E-mail do cliente</label>
        <input type="text" name="emailCliente" id="emailCliente" required>
    </div>

    <div>
        <input type="submit" value="Salvar">
    </div>
</form>