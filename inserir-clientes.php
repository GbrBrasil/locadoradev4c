<h2>Inserir cliente</h2>
<?php
$nomeCliente = $_POST["nomeCliente"];
$telefoneCliente = $_POST["telefoneCliente"];
$emailCliente = $_POST["emailCliente"];

$sql = "INSERT INTO tbclientes (
    nomeCliente,
    telefoneCliente,
    emailCliente
    )
    VALUES(
    '$nomeCliente',
    '$telefoneCliente',
    '$emailCliente'
    )
    ";
    $rs = mysqli_query($conexao,$sql);

    if ($rs) {
        echo "<p>Registro inserido com sucesso</p>";
    } else {
        echo "<p>Erro ao inserir</p>";
    }
?>