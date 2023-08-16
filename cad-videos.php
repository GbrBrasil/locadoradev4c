<h2>Cadastro de Vídeos</h2>

<form action="index.php?menu=inserir-videos" method="post">
    <div>
        <label for="tituloFilme">Título do Vídeo</label>
        <input type="text" name="tituloFilme" id="tituloFilme" required>
    </div>
    <div>
        <label for="duracaoFilme">Duração do Vídeo</label>
        <input type="text" name="duracaoFilme" id="duracaoFilme" required>
    </div>
    <div>
        <label for="valorLocacao">Valor da Locação</label>
        <input type="text" name="valorLocacao" id="valorLocacao" required>
    </div>
    <div>
        <label for="idCategoria">Categoria</label>
        <select name="idCategoria" id="idCategoria" required>
            <option value="">Selecionea categoria</option>
            <?php
            $sql = "SELECT * FROM tbCategoria order by nomeCategoria ASC";
            $rs = mysqli_query($conexao, $sql);
            while ($dados = mysqli_fetch_assoc($rs)){
            
            ?>
                <option value="<?= $dados["idCategoria"] ?>">
                    <?= $dados["nomeCategoria"] ?>
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