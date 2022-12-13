<div class="modal fade" id="modal-upload" tabindex="-1" role="dialog" aria-hidden="true">
<link rel="stylesheet" href="../css/tooplate-style.css">
<div class="modal-dialog" role="document">
    <div class="modal-content bg-dark">
        <div class="modal-header">
            <h5 class="modal-title sb-txt-primary sb-w-700">
                Cadastrar música
            </h5>
            <button type="button" class="close float-right" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true" class="sb-txt-dark float-right">
                    &times;
                </span>
            </button>
        </div>
        <div class="modal-body">
            <form id="form-upload" method="POST" action="/loop/backend/upload.php" enctype="multipart/form-data">

                    <div class='form-group row'>
                         <div class='col-sm-8' class="opacity-25">
                        <label for='nomemusica' style="white-space: nowrap;" class='col-sm-2 col-form-label sb-txt-white'>
                            Nome da música:
                        </label>
                        <br />
                        <input 
                        
                                type='text' 
                                class="inputmusica" 
                                name='musica'
                                id='input-musica'
        
                        >
</div>
                    </div>

                    <div class='form-group row'>
                        <div class='col-sm-8' class="opacity-25">
                        <label style="white-space: nowrap;" class='col-sm-2 col-form-label sb-txt-white'>
                            Imagem da capa:
                        </label>
                        <input type="file" name="img" required/>
                        <label  style="white-space: nowrap;" class='col-sm-2 col-form-label sb-txt-white'>
                            Arquivo da música:
                        </label>
                        <input type="file" name="msc" required/>
                        </div>
                    </div>
        </form>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary float-left" data-dismiss="modal">
            Cancelar
        </button>
        <button name="login" class="btn btn-secondary sb-w-700" type="submit">
            Cadastrar
        </button>
    </div>
</div>
</div>
</div>