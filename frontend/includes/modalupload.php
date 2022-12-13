<div class="modal fade" id="modal-upload" tabindex="-1" role="dialog" aria-hidden="true">
<link rel="stylesheet" href="../css/loop.css">
<div class="modal-dialog " id="modalup" role="document">
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
                        <label for='nomemusica' style="white-space: nowrap;" class='col-sm-4 col-form-label sb-txt-white'>
                            Nome da música:
                        </label>
                        <div class='col-sm-8'>
                            <input 
                                    type='text' 
                                    class="inputmusica text-white" 
                                    name='musica'
                                    id='input-musica'
                                    placeholder="Nome da música"
                            >
                        </div>
                    </div>

                    <div class='form-group row'>
                        <label style="white-space: nowrap;" class='col-sm-4 col-form-label sb-txt-white'>
                            Imagem da capa:
                        </label>
                        <div class='col-sm-8' class="opacity-25">
                            <input type="file" name="arquivoimg" required/>
                        </div> 
                    </div>    
                    <div class='form-group row'>   
                        <label  style="white-space: nowrap;" class='col-sm-4 col-form-label sb-txt-white'>
                            Arquivo da música:
                        </label>
                        <div class='col-sm-8' class="opacity-25">
                        <input type="file" name="arquivomsc" required/>
                        </div>
                    </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary float-left" data-dismiss="modal">
            Cancelar
        </button>
        <button name="login" class="btn btn-secondary sb-w-700" type="submit">
            Cadastrar
        </button>
        </form>
    </div>
</div>
</div>
</div>