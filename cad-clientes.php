<h2>Cadastro de novo cliente</h2>
<div class="col-fluid">
<form action="index.php?menu=inserir-clientes" method="post">
    <div class="mb-3 col-12 col-sn-6 col-md-8" >
        <label class="form-label text-light" for="nomeCliente">Nome do cliente</label>
        <div class="input-group">
            <div class="input-group-text">
            <i class="bi bi-person-circle"></i>
            </div>
            <input class="form-control" type="text" name="nomeCliente" id="nomecliente" required>

        </div>
    </div>
    <div class="mb-3 col-12 col-sn-6 col-md-8">
        <label class="form-label text-light" for="nomeCliente">Telefone do cliente</label>
        <div class="input-group">
            <div class="input-group-text">
            <i class="bi bi-telephone-fill"></i>
            </div>
            <input class="form-control" type="text" name="telefoneCliente" id="telefoneCliente" required>
        </div>
    </div>
    <div class="mb-3 col-12 col-sn-6 col-md-8">
        <label class="form-label text-light" for="nomeCliente">E-mail do cliente</label>
        <div class="input-group">
            <div class="input-group-text">
            <i class="bi bi-envelope-at-fill"></i>
            </div>
            <input class="form-control" type="text" name="emailCliente" id="emailCliente" required>
        </div>
    </div>

    <div class="mb-3 col-4 col-sn-6 col-md-8">
        <button class="btn btn-info" type="submit"><i class="bi bi-floppy"></i> Salvar</button>
    </div>
</form>
</div>