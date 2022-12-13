<?php 
       if(!isset($_SESSION)) 
       { 
           session_start(); 
       } ?>

<div class="modal fade" id="modal-perfil" tabindex="-1" role="dialog" aria-hidden="true">
<link rel="stylesheet" href="../css/tooplate-style.css">
<div class="modal-dialog" role="document">
    <div class="modal-content bg-dark">
        <div class="modal-header">
            <h5 class="modal-title sb-txt-primary sb-w-700">
                Entrar
            </h5>
            <button type="button" class="close float-right" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true" class="sb-txt-dark float-right">
                    &times;
                </span>
            </button>
        </div>
        <div class="modal-body">
            <form id="form_login" method="POST" action="../backend/login.php">
                    <!-- Nome -->
                    <div class='form-group row'>
                        <label for='inputPassword' class='col-sm-2 col-form-label sb-txt-white'>
                            Email:
                        </label>
                        <div class='col-sm-8'>
                            <input 
                                type='text' 
                                class="inputlogin text-white" 
                                name='email'
                                id="login_email"
                                placeholder="E-mail"
                            >
                        </div>
                    </div>
                    <!-- Telefone -->
                    <div class='form-group row'>
                        <label for='inputPassword' class='col-sm-2 col-form-label sb-txt-white'>
                            Senha:
                        </label>
                        <div class='col-sm-8' class="opacity-25">
                            <input 
                                type='password' 
                                class='inputlogin text-white' 
                                name='senha'
                                id='login_senha'
                                placeholder="Senha"
                            >
                        </div>
                    </div>
                    <div class="btn-salvar">
                <button class="btn sb-btn-secondary sb-w-700 d-none" id="salvar">Salvar Alterações</button>
            </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary float-left" data-dismiss="modal">
            Cancelar
        </button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="location.href='registro.php'">
            Registrar
        </button>
        <button name="entrar" class="btn btn-secondary sb-w-700" type="submit">
            Entrar
        </button>
    </div>
    </form>
</div>
</div>
</div>
