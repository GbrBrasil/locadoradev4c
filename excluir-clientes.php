<h2>Excluir Clientes</h2>
<?php
$idCliente = $_GET["idCliente"];


$sql = "SELECT * FROM tbclientes AS t INNER JOIN tblocacao AS tl ON t.idCLiente = tl.idCliente WHERE t.idCliente = $idCliente";
$rs = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

$linha = mysqli_num_rows($rs);

if ($linha > 0) {
    echo "<p>Registro não pode ser excluído pois ja existe histórico de locações para ele.</p>";
} else {
    $sql = "DELETE FROM tbclientes WHERE idCliente = '{$idCliente}'";
    $rs = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

    echo "<p>Registro excluído com sucesso</p>";
}


?>