<h2>Lista de Categorias</h2>
<div>
    <a href="index.php?menu=cad-categorias">Cadastrar nova categoria</a>
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
                    Editar
                    </a>
                </td>
                <td>
                    <a href="index.php?menu=excluir-categorias&idCategorias&idCategoria=<?=$dados["idCategoria"]?>">
                        Excluir
                    </a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
    
</table>