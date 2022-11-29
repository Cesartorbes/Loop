<!-- <div class='form-group row'>
    <label for="inputEmail">Endereço de e-mail:</label>
    <div class='col-sm-8'>
    <input class="form-control" id="inputEmail" type="email" name="email" placeholder="Endereço do Email" required />
</div>
 -->
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
            <form id="form-perfil" method="POST" action="/../index.php">
                    <!-- Nome -->
                    <div class='form-group row'>
                        <label for='inputPassword' class='col-sm-2 col-form-label sb-txt-white'>
                            Email:
                        </label>
                        <div class='col-sm-8'>
                            <input 
                                type='text' 
                                class="inputlogin" 
                                name='nome'
                                id='input-nome'
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
                                type='text' 
                                class='inputlogin' 
                                name='senha'
                                id='input-senha'
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="location.href='registro.php'">
            Registrar
        </button>
        <button name="login" class="btn btn-secondary sb-w-700" type="submit">
            Entrar
        </button>
    </div>
</div>
</div>
</div>

<?php session_start();
include_once(__DIR__ . '\..\..\backend\conecta.php');
if(isset($_POST['login']))
  {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $banco = new Banco;
    $conn = $banco->conectar();    
    
    $stmt = $conn->prepare('SELECT * FROM usuario WHERE email = :email AND senha = :senha');
    $stmt->execute([
        ':email' => $email,
        ':senha' => $password
        ]
    );    
    $ret = $stmt->fetch();
    
    if($ret){        
        $_SESSION['usuario_id']=$ret['usuario_id'];
        $_SESSION['uemail']=$ret['email'];
        echo "<script>window.location.href='index.php'</script>";
    }
    else{
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@9' ></script>
        <script>
            Swal.fire({ 
            icon: 'error',
            title: 'Oops...',
            text: 'Dados incorretos.'
            })
        </script>";
    }
  }
  ?>