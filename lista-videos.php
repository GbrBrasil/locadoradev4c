<h2>Lista de Vídeos</h2>
<div>
    <a href="index.php?menu=cad-videos">Cadastrar novo vídeo</a>
</div>
<div>
    <?php
        $txtPesquisa = (isset($_POST["txtPesquisa"]))?$_POST["txtPesquisa"]:"";
    ?> 
    
    <form action="" method="post">
        <label for="txtPesquisa">Pesquisar</label>
        <input type="search" name="txtPesquisa" id="txtPesquisa" value="<?=$txtPesquisa?>">
        <button type="submit">OK</button>
    </form>
</div>
<table></table>

