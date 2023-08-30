<h2>Atualizar Categoria</h2>
<?php
$idCategoria = $_POST["idCategoria"];
$nomeCategoria = $_POST["nomeCategoria"];

$sql = "UPDATE tbcategorias SET
idCategoria='{$idCategoria}',
nomeCategoria='{$nomeCategoria}'
WHERE idCategoria ='{$idCategoria}'
";
$rs = mysqli_query($conexao,$sql);
echo "<p>Registro inserido com sucesso!</p>";
?>