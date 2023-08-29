<h2>Atualizar Clientes</h2>
<?php
$idCliente = $_POST["idCliente"];
$nomeCliente = $_POST["nomeCliente"];
$telefoneCliente = $_POST["telefoneCliente"];
$emailCliente = $_POST["emailCliente"];

$sql = "UPDATE tbclientes SET
idCliente='{$idCliente}',
nomeCliente='{$nomeCliente}',
telefoneCliente='{$telefoneCliente}',
emailCliente='{$emailCliente}',
";
$rs = mysqli_query($conexao,$sql);
echo "<p>Registro inserido com sucesso!</p>";
?>