<h2>Excluir Categorias</h2>
<?php
$idCategoria = $_GET["idCategoria"];


$sql = "SELECT * FROM tbcategorias AS t INNER JOIN tbfilmes AS tl ON t.idCategoria = tl.idCategoria WHERE t.idCategoria = $idCategoria";
$rs = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

$linha = mysqli_num_rows($rs);

if ($linha > 0) {
    echo "<p>Registro não pode ser excluído pois ja existe histórico de locações para ele.</p>";
} else {
    $sql = "DELETE FROM tbcategorias WHERE idCategoria = '{$idCategoria}'";
    $rs = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

    echo "<p>Registro excluído com sucesso</p>";
}


?>