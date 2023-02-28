<main>
    <section>
        <a href="index.php">
            <button class="btn btn-success">Voltar</button>
        </a>
    </section>
    <h2 class="mt3">Cadastrar Vaga</h2>
    <form method="post">
        <div class="form-group">
            <label>Titulo</label>
            <input type="text" class="form-control" name="title">
        </div>

        <div class="form-group">
            <label>Descrição</label>
            <textarea class="form-control" name="description" rows="5"></textarea>
        </div>

        <div class="form-group">
            <label>Status</label>

            <div>
                <div>
                    <div class="form-check form-check-inline">
                        <label>
                            <input type="radio" name="active" value="s" checked> Ativo
                        </label>
                    </div>
                </div>

                <div>
                    <div class="form-check form-check-inline">
                        <label>
                            <input type="radio" name="active" value="n"> Inativo
                        </label>
                    </div>
                </div>

            </div>

        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>
    </form>
</main>