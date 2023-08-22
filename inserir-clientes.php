<h2>Inserir cliente</h2>
<?php
$nomeCliente = $_POST["nomeCliente"];

$sql = "INSERT INTO tbclientes (
    nomeCliente
    )
    VALUES(
    '$nomeCliente'
    )
    ";
    $rs = mysqli_query($conexao,$sql);

    if ($rs) {
        echo "<p>Registro inserido cxom sucesso</p>";
    } else {
        echo "<p>Erro ao inserir</p>";
    }
?>