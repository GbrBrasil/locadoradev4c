<h2>Excluir Clientes</h2>
<?php
$idCliente = $_GET["idCliente"];
$sql = "DELETE FROM tbClientes WHERE idCliente = '{$idClientes}'";
$rs = mysqli_query($conexao, $sql);

echo "<p>Registro excluído com sucesso</p>";

?>