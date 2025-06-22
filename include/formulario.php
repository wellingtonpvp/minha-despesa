<main id="formulario" class="my-3">
    <h3 class="text-center"><?= TITLE ?></h3>
    <form method="post">
        <div class="form-group">
            <label for="">Titulo</label>
            <input type="text" class="form-control" name="titulo" value="<?= $registro_editar->titulo ?>">
        </div>

        <div class="form-group">
            <label for="">Valor</label>
            <input type="number" name="valor" class="form-control" value="<?= $registro_editar->valor ?>">
        </div>

        <div class="form-group">
            <label>Tipo carteira</label>
            <div class="form-check">
                <input type="radio" name="carteira" value="digital" class="form-check-input" id="digital" checked>
                <label for="digital" class="form-check-label">Digital</label>
            </div>

            <div class="form-check">
                <input type="radio" name="carteira" value="fisico" class="form-check-input" id="fisico" <?= $registro_editar->carteira == 'fisico' ? "checked" : "" ?>>
                <label for="fisico" class="form-check-label">Físico</label>
            </div>
        </div>

        <div class="form-group">
            <label>Tipo de ganho ou gasto</label>
            <div class="form-check">
                <input type="radio" name="tipo_valor" value="renda" class="form-check-input" id="renda" checked>
                <label for="renda" class="form-check-label">Renda</label>
            </div>

            <div class="form-check">
                <input type="radio" name="tipo_valor" value="despesa" class="form-check-input" id="despesa" <?= $registro_editar->tipo_valor == "despesa" ? "checked" : "" ?>>
                <label for="despesa" class="form-check-label">despesa</label>
            </div>
        </div>

        <button type="submit" class="btn btn-outline-success w-100"><?= BOTAO ?></button>
    </form>
</main>