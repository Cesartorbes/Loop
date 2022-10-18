<div class="modal fade" id="modal-perfil" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content bg-dark">
        <div class="modal-header">
            <h5 class="modal-title sb-txt-primary sb-w-700">
                Registre-se
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true" class="sb-txt-white">
                    &times;
                </span>
            </button>
        </div>
        <div class="modal-body">
            <form id="form-perfil" method="POST" action="/elsalvador/atualizarperfil.php">
                    <!-- Nome -->
                    <div class='form-group row'>
                        <label for='inputPassword' class='col-sm-4 col-form-label sb-txt-white'>
                            Nome:
                        </label>
                        <div class='col-sm-8'>
                            <input 
                                type='text' 
                                class='form-control-plaintext sb-form-input pl-2 bg-danger cursor-na' 
                                name='nome'
                                id='input-nome'
                            >
                        </div>
                    </div>
                    <!-- Telefone -->
                    <div class='form-group row'>
                        <label for='inputPassword' class='col-sm-4 col-form-label sb-txt-white'>
                            Telefone:
                        </label>
                        <div class='col-sm-8'>
                            <input 
                                type='text' 
                                class='form-control-plaintext sb-form-input pl-2 bg-danger maskTelefone cursor-na' 
                                name='telefone'
                                id='input-telefone'
                            >
                        </div>
                    </div>
                    <div class="btn-salvar">
                <button class="btn sb-btn-secondary sb-w-700 d-none" id="salvar">Salvar Alterações</button>
            </div>
        </form>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary float-left" data-dismiss="modal">
            Cancelar
        </button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
            Registrar
        </button>
        <button 
            class="btn btn-secondary sb-w-700"
        >
            Entrar
        </button>
    </div>
</div>
</div>
</div>