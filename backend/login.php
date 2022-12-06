<?php session_start();
include_once(__DIR__ . '/conecta.php');
if(isset($_POST['login']))
  {
    $email = $_POST['email'];
    $password = $_POST['senha'];

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
        $_SESSION['email']=$ret['email'];
        echo "<script>window.location.href='../loop/frontend/index.php'</script>";
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