<!-- Modal -->
<div class="modal fade" id="modalApagar" tabindex="-3">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h-1 class="modal-title fs-5 text-danger" id="exampleModalLabel">Cuidado !</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Você deseja realmente excluir este registro ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Voltar</button>
                <form method="post">
                    <button type="submit" class="btn btn-danger" name="idRegistro" value="foi" id="botaoApaga" onclick="actionModal()">Excluir</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalEditar" tabindex="-3">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h-1 class="modal-title fs-5" id="exampleModalLabel">Modal de edição</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <main id="formulario" class="my-3">
                    <h3 class="text-center"></h3>
                    <form method="post">

                        <!-- titulo -->
                        <div class="form-group">
                            <label for="titulo_editar">Titulo</label>
                            <input type="text" class="form-control" name="titulo" value="" id="titulo_editar" required>
                        </div>

                        <!-- valor -->
                        <div class="form-group">
                            <label for="">Valor</label>
                            <input type="text" name="valor" class="form-control" value="" id="valor_editar" required>
                        </div>


                        <!-- tipo da carteira digital ou fisico -->
                        <div class="form-group">
                            <label>Tipo carteira</label>
                            <div class="form-check">
                                <input type="radio" name="carteira" value="digital" class="form-check-input" id="digital">
                                <label for="digital" class="form-check-label">Digital</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" name="carteira" value="fisico" class="form-check-input" id="fisico">
                                <label for="fisico" class="form-check-label">Físico</label>
                            </div>
                        </div>


                        <!-- tipo renda ou despesa -->
                        <div class="form-group">
                            <label>Tipo de ganho ou gasto</label>
                            <div class="form-check">
                                <input type="radio" name="tipo_valor" value="renda" class="form-check-input" id="renda">
                                <label for="renda" class="form-check-label">Renda</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" name="tipo_valor" value="despesa" class="form-check-input" id="despesa">
                                <label for="despesa" class="form-check-label">despesa</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success w-100" name="edicao" value="" id="botao_editar">Editar</button>
                    </form>
                </main>
            </div>
        </div>
    </div>
</div>