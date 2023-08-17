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
    
</form>