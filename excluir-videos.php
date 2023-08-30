<h2>Excluir Videos</h2>
<?php
$idFilme = $_GET["idFilme"];

$sql = "SELECT * FROM tbfilmes AS t INNER JOIN tbitenslocados AS tl ON t.idFilme = tl.idFilme WHERE t.idFilme = $idFilme";
$rs = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

$linha = mysqli_num_rows($rs);

if ($linha > 0) {
    echo "<p>Registro não pode ser excluído pois ja existe histórico de locações para ele.</p>";
} else {
    $sql = "DELETE FROM tbfilmes WHERE idFilme = '{$idFilme}'";
    $rs = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

    echo "<p>Registro excluído com sucesso</p>";
}

?>