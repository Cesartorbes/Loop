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
            <form id="form_login" method="POST">
                    <!-- Nome -->
                    <div class='form-group row'>
                        <label for='inputPassword' class='col-sm-2 col-form-label sb-txt-white'>
                            Email:
                        </label>
                        <div class='col-sm-8'>
                            <input 
                                type='text' 
                                class="inputlogin" 
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
                                class='inputlogin' 
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

<?php


$conn = mysqli_connect("localhost","root","", "loopdb");

if(isset($_POST['entrar'])){
    
    if(empty($_POST['email']) || empty($_POST['senha'])){
        echo "
        <script>
                Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Preencha todos os campos antes de prosseguir.'
                })
                </script>";
    }else{
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $senha = mysqli_real_escape_string($conn, $_POST['senha']);
        $query = " SELECT * FROM usuario WHERE email = '$email' and senha = '$senha' ";

        $result = mysqli_query($conn, $query);

        $dadosUsuario = mysqli_fetch_assoc($result);

        $row = mysqli_num_rows($result);

        if($row == 1){
            $_SESSION = $dadosUsuario;
                 echo "
        <script>
        
        Swal.fire({
          icon: 'success',
          title: 'Parabéns',
          text: 'Seu login foi realizado com sucesso!'
        }).then(function() {
            window.location = '../index.php';
        });
        
        </script>";
        }else{
             echo "
             <script>
             Swal.fire({
               icon: 'error',
               title: 'Oops...',
               text: 'Usuário ou senha inválidos.'
             })
             
             </script>";
            }
        }
    }
?>
