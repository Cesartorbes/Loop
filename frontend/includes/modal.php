<?php
echo '<div class="modal fade" id="modal-perfil" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title sb-txt-secondary sb-w-700">
                Perfil | <a data-bs-toggle="modal"
                data-bs-target="#modal-agendamentos" href="#" > Agendamento </a>
            </h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true" class="sb-txt-white">
                    &times;
                </span>
            </button>
        </div>
        <div class="modal-body">
            <form id="form-perfil" method="POST" action="/elsalvador/atualizarperfil.php">';
        
            if(isset($_SESSION['user_id'])){
                $conn1 = mysqli_connect("localhost", "root", "", "barbearia_dev");

                $queryUsuarioLogado = "CALL PROC_SEL_USUARIO({$_SESSION['user_id']})";

                $resultUsuarioLogado = mysqli_query($conn1, $queryUsuarioLogado);

                $dadosUsuarioLogado = mysqli_fetch_assoc($resultUsuarioLogado);

                echo "
                    <!-- Nome -->
                    <div class='form-group row'>
                        <label for='inputPassword' class='col-sm-4 col-form-label sb-txt-white'>
                            Nome:
                        </label>
                        <div class='col-sm-8'>
                            <input 
                                type='text' 
                                class='form-control-plaintext sb-form-input pl-2 cursor-na' 
                                value='{$dadosUsuarioLogado['nome']}'
                                name='nome'
                                id='input-nome'
                                readonly
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
                                class='form-control-plaintext sb-form-input pl-2 maskTelefone cursor-na' 
                                value='{$dadosUsuarioLogado['telefone']}'
                                name='telefone'
                                id='input-telefone'
                                readonly
                            >
                        </div>
                    </div>
                ";}
                echo '<div class="btn-salvar">
                <button class="btn sb-btn-secondary sb-w-700 d-none" id="salvar">Salvar Alterações</button>
            </div>
        </form>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary sb-w-700" data-bs-dismiss="modal">
            Fechar
        </button>
        <button 
            class="btn sb-btn-secondary sb-w-700"
            id="editar"
        >
            Editar
        </button>
    </div>
</div>
</div>
</div>';

?>