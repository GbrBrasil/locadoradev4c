<?php
$idCliente = $_GET["idcliente"];
$sql = "SELECT * FROM tbclientes WHERE idcliente = '{$idCliente}'";
$rs = mysqli_query($conexao,$sql)
or die("Erro ao realizar a consulta. Erro: " . mysqli_error($conexao));
$dados = mysqli_fetch_assoc($rs);
?>
<h2>Editar Clientes</h2>
<form action="index.php?menu=atualizar-clientes" method="post">
    <div>
        <label for="idCliente">ID</label>
        <input type="text" name="idCliente" id="idCliente" value="<?=$dados['idCliente']?>" required>
    </div>
    <div>
        <label for="nomeCliente">Nome do Cliente</label>
        <input type="text" name="nomeCliente" id="nomeCliente" value="<?=$dados['tituloCliente']?>">
    </div>
    <div>
        <label for="telefoneCliente">Telefone do Cliente</label>
        <input type="text" name="telefoneCliente" id="telefoneCliente" value="<?=$dados['tituloCliente']?>">
    </div>
    <div>
        <label for="emailCliente">E-mail do Cliente</label>
        <input type="text" name="emailCliente" id="emailCliente" value="<?=$dados['tituloCliente']?>">
    </div>
    <div>
        <button type="submit">Salvar</button>
    </div>
</form>