
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
            <th>Telefone</th>
            <th>E-mail</th>
            <th>Status</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $sql = "SELECT * ,  CASE
            WHEN statusCliente = 0 THEN 'Ativo'
            WHEN statusCliente = 1 THEN 'Inativo'
        END
        as statusCliente FROM tbclientes
       
        where nomeCliente like '%{$txtPesquisa}%'";
        $rs = mysqli_query($conexao, $sql);
     
        while ($dados = mysqli_fetch_assoc($rs)){
        ?>
            <tr>
                <td><?= $dados["idCliente"] ?></td>
                <td><?= $dados["nomeCliente"] ?></td>
                <td><?= $dados["telefoneCliente"] ?></td>
                <td><?= $dados["emailCliente"] ?></td>
                <td><?= $dados["statusCliente"] ?></td>
                <td>
                    <a href="index.php?menu=editar-clientes&idCliente=<?=$dados{"idCliente"}?>">
                    Editar
                    </a>
                </td>
                <td>
                    <a href="index.php?menu=excluir-clientes&idCliente&idCliente=<?=$dados["idCliente"]?>">
                        Excluir
                    </a>

            </tr>
        <?php
        }
        ?>
    </tbody>
    
</table>