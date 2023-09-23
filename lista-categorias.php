<h2>Lista de Categorias</h2>
<div class="mb-4">
    <a class="btn btn-success" href="index.php?menu=cad-categorias">Cadastrar nova categoria</a>
</div>
<div>
    <?php
    $txtPesquisa = (isset($_POST["txtPesquisa"]))?$_POST["txtPesquisa"]:"";
    ?>

    <form class="mb-3" action="" method="post">
        <div class="input-group">
            <div class="input-group-text">Pesquisar</div>
        <input type="search" name="txtPesquisa" id="txtPesquisa" value="<?=$txtPesquisa?>">
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
            <th>Nome da Categoria</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $sql = "SELECT * FROM tbcategorias
        where nomeCategoria like '%{$txtPesquisa}%'";
        $rs = mysqli_query($conexao, $sql);
        while ($dados = mysqli_fetch_assoc($rs)){
        ?>
            <tr>
                <td><?= $dados["idCategoria"] ?></td>
                <td><?= $dados["nomeCategoria"] ?></td>
                <td>
                    <a href="index.php?menu=editar-categorias&idCategoria=<?=$dados{"idCategoria"}?>">
                    <i class="btn btn-warning bi bi-pencil-square"></i>
                    </a>
                </td>
                <td>
                    <a href="index.php?menu=excluir-categorias&idCategorias&idCategoria=<?=$dados["idCategoria"]?>">
                    <i class="btn btn-danger bi bi-x-lg"></i>
                    </a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
    
</table>
</div>