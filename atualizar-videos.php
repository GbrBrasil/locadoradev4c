<h2>Atualizar Videos</h2>
<?php
$idFilme = $_POST["idFilme"];
$tituloFilme = $_POST["tituloFilme"];
$duracaoFilme = $_POST["duracaoFilme"];
$valorLocacao = $_POST["valorLocacao"];
$idCategoria = $_POST["idCategoria"];

$sql = "UPDATE tbfilmes SET
tituloFilme='{$tituloFilme}',
duracaoFilme='{$duracaoFilme}',
valorLocacao='{$valorLocacao}',
idCategoria='{$idCategoria}'
WHERE idFilme='{$idFilme}'
";
$rs = mysqli_query($conexao,$sql);
echo "<p>Registro inserido com sucesso!</p>";
?>