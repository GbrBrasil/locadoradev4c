<h2>Excluir Videos</h2>
<?php
$idFilme = $_GET["idFilme"];
$sql = "DELETE FROM tbfilmes WHERE idFilme = '{$idFilme}'";
$rs = mysqli_query($conexao, $sql);

echo "<p>Registro excluído com sucesso</p>";

?>