<h2>Lista de Clientes</h2>

<div>
    <a href="index.php?menu=cad-clientes">Cadastrar novo cliente</a>
</div>
<div>
    <?php
    $txtPesquisa = (isset($_POST["txtPesquisa"]))?$_POST["txtPesquisa"]:"";
    ?>

    <form action="" method="post">
        <label for="txtPesquisa">Pesquisa</label>
        <input type="search" name="txtPesquisa" id="txtPesquisa" value="<?=$txtPesquisa?>">
        <button type="submit">
            OK
        </button>
    </form>
</div>
<table border="1">
    <thead>
        <tr>
            <th>id</th>
            <th>Nome do(a) Cliente</th>
            <th>Editar</th>
            <th>Excluir</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $sql = "SELECT * , FROM tbclientes
        where nomeCliente like '%{$txtPesquisa}%'";
        $rs = mysqli_query($conexao, $sql);
     
        while ($dados = mysqli_fetch_assoc($rs)){
        ?>
            <tr>
                <td><?= $dados["idCliente"] ?></td>
                <td><?= $dados["nomeCliente"] ?></td>
                <td>
                    <a href="index.php?menu=editar-clientes&idCliente=<?=$dados{"idCliente"}?>">
                    Editar
                    </a>
                </td>
                <td>
                    <a href="index.php?menu=excluir-clientes&idClientes&idCliente=<?=$dados["idCliente"]?>">
                        Excluir
                    </a>
                </td>
                <td><?= $dados["statusCliente"] ?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
    
</table>