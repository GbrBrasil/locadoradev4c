
<h2>Lista de Clientes</h2>

<div class="mb-4">
    <a class="btn btn-primary mb-2" href="index.php?menu=cad-clientes">Cadastrar novo cliente</a>
</div>
<div>
    <?php
    $txtPesquisa = (isset($_POST["txtPesquisa"]))?$_POST["txtPesquisa"]:"";
    ?>

    <form class="mb-4"  action="" method="post">
        <div class="input-group">  
            <div class="input-group-text">Pesquisar</div>
        <input class="form-control" type="search" name="txtPesquisa" id="txtPesquisa" value="<?=$txtPesquisa?>">
        <button class="btn btn-success" type="submit">
            OK
        </button>
        </div>  
    </form>
</div>
<div class="p-3 bg-dark rounded-4">
<table class="table table-dark table-striped">
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
                    <i class="btn btn-warning bi bi-pencil-square"></i>
                    </a>
                </td>
                <td>
                    <a href="index.php?menu=excluir-clientes&idCliente&idCliente=<?=$dados["idCliente"]?>">
                    <i class="btn btn-danger bi bi-x-lg"></i>
                    </a>

            </tr>
        <?php
        }
        ?>
    </tbody>
    
</table>
    </div>