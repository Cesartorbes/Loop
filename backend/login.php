<html>
<body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="module" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule="" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.js"></script>
<link rel="stylesheet" href="css/loop.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<?php
session_start();
$conn = mysqli_connect("localhost","root","", "loopdb");

if(isset($_POST['entrar'])){
    
    if(empty($_POST['email']) || empty($_POST['senha'])){
        echo "
        <script>
                Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Preencha todos os campos antes de prosseguir.'
            }).then(function() {
                window.location = '../frontend/index.php';
            });
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
            window.location = '../frontend/index.php';
        });
        
        </script>";
        }else{
             echo "
             <script>
             Swal.fire({
               icon: 'error',
               title: 'Oops...',
               text: 'Usuário ou senha inválidos.'
            }).then(function() {
                window.location = '../frontend/index.php';
            });
             </script>";
            }
        }
    }
?>
</body>
</html>