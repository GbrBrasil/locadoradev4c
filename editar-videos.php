<?php
$idFilme = $_GET["idfilme"];
$sql = "SELECT * FROM tbfilmes WHERE idfilme = '{$idFilme}'";
$rs = mysqli_query($conexao,$sql)
or die("Erro ao realizar a consulta. Erro: " . mysqli_error($conexao));
$dados = mysqli_fetch_assoc($rs);
?>
<h2>Editar Videos</h2>
<form action="index.php?menu=atualizar-videos" method="post">
    <div>
        <label for="idFilme">ID</label>
        <input type="text" name="idFilme" id="idFilme" value="<?=$dados['idFilme']?>" required>
    </div>
    <div>
        <label for="tituloFilme">Título do FIlme</label>
        <input type="text" name="tituloFilme" id="tituloFilme" value="<?=$dados['tituloFilme']?>">
    </div>
    <div>
        <label for="duracaoFilme">Duração do Video</label>
        <input type="text" name="duracaoFilme" id="duracaoFilme" value="<?=$dados['tituloFilme']?>">
    </div>
    <div>
        <label for="valorLocacao">Valor da Locação</label>
        <input type="text" name="valorLocacao" id="valorLocacao" value="<?=$dados['tituloFilme']?>">
    </div>
    <div>
        <label for="idCategoria">Categoria</label>
        <select name="idCategoria" id="idCategoria" required>
            <option value="">Selecione a categoria</option>
            <?php
            $sql = 'SELECT * FROM tbcategorias ORDER BY nomeCategoria ASC';
            $rs = mysqli_query($conexao, $sql);
            while ($dados2 = mysqli_fetch_assoc($rs)){
            ?>
                <option value="" <?php echo ($dados["idCategoria"] == $dados2["idCategoria"])?"selected":""?>
                value="<?= $dados2["idCategoria"] ?>">
                <?= $dados2["nomeCategoria"]?>
                </option>
            <?php
            }
            ?>
        </select>
    </div>
    <div>
        <button type="submit">Salvar</button>
    </div>
</form>