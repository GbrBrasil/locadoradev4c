<?php
$idCliente = $_GET["idCliente"];
$sql = "SELECT * FROM tbclientes WHERE idCliente = '{$idCliente}'";
$rs = mysqli_query($conexao,$sql)
or die("Erro ao realizar a consulta. Erro: " . mysqli_error($conexao));
$dados = mysqli_fetch_assoc($rs);
?>
<h2>Editar Clientes</h2>
<form action="index.php?menu=atualizar-clientes" method="post">
    <div>
        <label for="idCliente">ID</label>
        <input type="text" name="idCliente" id="idCliente" value="<?=$dados['idCliente']?>" readonly>
    </div>
    <div>
        <label for="nomeCliente">Nome do Cliente</label>
        <input type="text" name="nomeCliente" id="nomeCliente" value="<?=$dados['nomeCliente']?>">
    </div>
    <div>
        <label for="telefoneCliente">Telefone do Cliente</label>
        <input type="text" name="telefoneCliente" id="telefoneCliente" value="<?=$dados['telefoneCliente']?>">
    </div>
    <div>
        <label for="emailCliente">E-mail do Cliente</label>
        <input type="text" name="emailCliente" id="emailCliente" value="<?=$dados['emailCliente']?>">
    </div>
    <div>
        <label for="statusCliente">Status</label>
        <select name="statusCliente" id="statusCliente">
            <option value="">Selecione o status do cliente</option>
            <option value="0" <?php echo ($dados["statusCliente"]==0)?"selected":""?>>Ativo</option>
            <option value="1" <?php echo ($dados["statusCliente"]==1)?"selected":""?>>inativo</option>
        </select>
    </div>
    <div>
        <button type="submit">Salvar</button>
    </div>
</form>