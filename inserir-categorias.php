<h2>Inserir categoria</h2>
<?php
$nomeCategoria = $_POST["nomeCategoria"];

$sql = "INSERT INTO tbcategorias (
    nomeCategoria
    )
    VALUES(
    '$nomeCategoria'
    )
    ";
    $rs = mysqli_query($conexao,$sql);

    if ($rs) {
        echo "<p>Registro inserido cxom sucesso</p>";
    } else {
        echo "<p>Erro ao inserir</p>";
    }
?>