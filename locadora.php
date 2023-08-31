<?php 

//Seleciona o id do cliente pesquisado
$idCliente = (isset($_GET['idCliente'])) ? $_GET["idCliente"] : 0;

//Seleciona o id da locação selecionada
$idLocacao = (isset($_GET['idLocacao'])) ? $_GET["idLocacao"] : 0;

//Seleciona o id do filme locado
$idFilme = (isset($_GET['idFilme'])) ? $_GET["idCliente"] : 0;

//Seleciona a opção de locação
$menuOpLocacao = (isset($_GET['menuOpLocacao'])) ? $_GET["menuOpLocacao"] : "";

//Seleciona a data atual do servidor
$dataAtual = date('Y-m-d');

//Seleciona a data de entrega
if (isset($_GET["dataDeEntrega"])) {
    $dataDeEntrega = $_GET["dataDeEntrega"];
} else {
    $dataDeEntrega = date("Y-m-d", strtotime($dataAtual . '+ 5 days'));
}

//Insere nova locação para o cliente selecionado e mostra o id da locação

if ($menuOpLocacao === "addLocacao") {
    $sql = "INSERT INTO tblocacao (idCliente,dataLocacao,statusLocacao)
        VALUES ('{$idCliente}','{$dataAtual}',0";
    mysqli_query($conexao, $sql) or die("Erro: " . mysqli_error($conexao));

    $idLocacao = $mysqli_insert_id($conexao);
    header('Location:index.php?menu=locacao&idCliente=' . $idCliente);
}

//Insere novo video na locação selecionada

if ($menuOpLocacao === "addVideo") {
    // Insere o video na locação
    $sql = "INSERT INTO tbitenslocados(idLocacao, idFilme, dataDeEntrega)
    VALUES ('{$idLocacao}','{$idFilme}','{$dataDeEntrega}')";
    mysqli_query($conexao,$sql);
    //Atualiza o status na tabela tbFilme para 1 ->locado 
    $sql = "UPDATE tbFilmes SET statusFilme = 1 WHERE idFilme = '{idFilme}'";
    mysqli_query($conexao,$sql);
}

//Remove video na lista de itens locados caso o video tenha sido colocado por engano na locação
if ($menuOpLocacao === "baixaVideo") {
    //Atualiza o status do video na lista da locacao
    $sql = "UPDATE tbitenslocados SET statusItemLocado = 1
    WHERE idLocacao = '{$idLocacao}' and idFilme = '{$idLocacao}'";
    mysqli_query($conexao,$sql);
    //Atualiza o status na tabela tbFilmes para 0 -> Disponível
    $sql = "UPDATE tbFilmes SET statusFilme = 0 WHERE idFilme = '{$idFilme}'";
    mysqli_query($conexao,$sql);
}

//Baixa geral da locação

$sql = "SELECT * FROM tbitenslocados WHERE idLocacao = {$idLocacao}";
$rs = mysqli_query($conexao,$sql);
$linha = mysqli_num_rows($rs);
if ($linha > 0) {
    $sql = "SELECT * FROM tbitenslocados 
    WHERE idLocacao = $idLocacao and statusItemLocado = 0";
    $rs = mysqli_query($conexao,$sql);
    $linha = mysqli_num_rows($rs);
    if ($linha == 0) {
        $sql = "UPDATE tblocacao SET statusLocacao = 1 WHERE idLocacao = {$idLocacao}";

        mysqli_query($conexao,$sql);
    }

}

?>
<h1>Locação</h1>
<div>
    <form action="" method="get">  
        <input type="hidden" name="menu" value="locacao">
        <label for="idCLiente" id="idCliente">ID do Cliente</label>
        <select name="idCliente" id="idCliente">
            <?php
            $sql = "SELECT * FROM tbclientes WHERE statusCliente = 0";
            $rs = mysqli_query($conexao,$sql);
            while ($dados = mysqli_fetch_assoc($rs)) {
                ?>
                <option>
                    <?php echo 1idCliente == 1dados["idCliente"]) ? "selected" : "" ?>
                </option>
            }
        </select>
    </form>
</div>
