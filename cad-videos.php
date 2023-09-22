<h2>Cadastro de Vídeos</h2>

<form action="index.php?menu=inserir-videos" method="post">
    <div class="mb-3 col-4 col-sn-6 col-md-8" >
        <label class="form-label" for="tituloFilme">Título do Vídeo</label>
        <input class="form-control" type="text" name="tituloFilme" id="tituloFilme" required>
    </div>
    <div class="mb-3 col-4 col-sn-6 col-md-8" >
        <label class="form-label" for="duracaoFilme">Duração do Vídeo</label>
        <input class="form-control" type="text" name="duracaoFilme" id="duracaoFilme" required>
    </div>
    <div class="mb-3 col-4 col-sn-6 col-md-8" >
        <label class="form-label" for="valorLocacao">Valor da Locação</label>
        <input class="form-control" type="text" name="valorLocacao" id="valorLocacao" required>
    </div>
    <div class="mb-3 col-4 col-sn-6 col-md-8" >
        <label class="form-label" for="idCategoria">Categoria</label>
        <select class="form-control" name="idCategoria" id="idCategoria" required>
            <option value="">Selecionea categoria</option>
            <?php
            $sql = "SELECT * FROM tbcategorias order by nomeCategoria ASC";
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
    <div class="mb-3 col-4 col-sn-6 col-md-8" >
        <button type="submit"><i class="bi bi-floppy"></i> Salvar</button>
    </div>

</form>