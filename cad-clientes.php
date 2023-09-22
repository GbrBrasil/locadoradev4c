<h2>Cadastro de novo cliente</h2>

<form action="index.php?menu=inserir-clientes" method="post">
    <div class="mb-3 col-4 col-sn-6 col-md-8" >
        <label class="form-label" for="nomeCliente">Nome do cliente</label>
        <input class="form-control" type="text" name="nomeCliente" id="nomecliente" required>
    </div>
    <div class="mb-3 col-4 col-sn-6 col-md-8">
        <label class="form-label" for="nomeCliente">Telefone do cliente</label>
        <input class="form-control" type="text" name="telefoneCliente" id="telefoneCliente" required>
    </div>
    <div class="mb-3 col-4 col-sn-6 col-md-8">
        <label class="form-label" for="nomeCliente">E-mail do cliente</label>
        <input class="form-control" type="text" name="emailCliente" id="emailCliente" required>
    </div>

    <div class="mb-3 col-4 col-sn-6 col-md-8">
        <button class="btn btn-info" type="submit"><i class="bi bi-floppy"></i> Salvar</button>
    </div>
</form>