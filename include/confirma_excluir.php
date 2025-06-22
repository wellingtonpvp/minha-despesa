<main id="formulario" class="my-3">
    <form method="post">
        <div class="form-group">
            <h4>Deseja realmente apagar este registro ? <?= "<b>$registro_excluir->titulo</b>" ?></h4>
        </div>

        <a href="index.php" class="btn btn-outline-success">Cancelar</a>
        <button type="submit" class="btn btn-danger" name="exclusao_registro">Excluir</button>
    </form>
</main>