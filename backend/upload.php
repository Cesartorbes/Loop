<?php
 include_once('conecta.php');
 $dados = $_POST;
 $banco = new Banco;
 try{
     $conn = $banco->conectar();
 } catch(PDOException $e){
     echo 'Falha ao salvar os arquivos. Favor, tente mais tarde.';
 }
// Pasta onde o arquivo vai ser salvo
$_UP['pastaimg'] = '../frontend/images/';
$_UP['pastamsc'] = '../frontend/music/';
  
// Array com as extensões permitidas
$_UP['extensaoimg'] = array('jpg', 'png');
$_UP['extensaomsc'] = 'mp3';
 
// Faz a verificação da extensão do arquivo da musica e da imagem
$extensaoimg = strtolower(end(explode('.', $_FILES['arquivoimg']["name"])));
$extensaomsc = strtolower(end(explode('.', $_FILES['arquivomsc']["name"])));
if (array_search($extensaoimg, $_UP['extensaoimg']) === false) {
echo "<html>
                    <body>
                    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@9'></script>
 
                    <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Por favor, envie imagens com as seguintes extensões: jpg, png'
                        }).then(function() {
                            window.location = '../frontend/index.php';
                        });
                    </script></body></html>";
    die();
if ($extensaomsc != $_UP['extensaomsc']) {
    echo "<html>
    <body>
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@9'></script>

    <script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Por favor, envie músicas com a seguinte extensão: mp3'
        }).then(function() {
            window.location = '../frontend/index.php';
        });
    </script></body></html>";
    die();
}
}
$nomeimg = $_POST['musica'] . '.jpg';
$nomemsc =$_POST['musica'] . '.mp3';
// Depois verifica se é possível mover o arquivo para a pasta escolhida
if (move_uploaded_file($_FILES['arquivoimg']['tmp_name'], $_UP['pastaimg'] . $nomeimg) and move_uploaded_file($_FILES['arquivomsc']['tmp_name'], $_UP['pastamsc'] . $nomemsc)) {
    global $conn;
$query = $conn->prepare('INSERT INTO musica (nome, img, destaque_lancamento) VALUES (:nome, :img, :destaque_lancamento)');
            $query->execute([
                ':nome' => $_POST['musica'],
                ':img' => 'images/' . $nomeimg,
                ':destaque_lancamento' => mt_rand(0,1)
            ]);
echo "<html>
<body>
<script src='https://cdn.jsdelivr.net/npm/sweetalert2@9'></script>

<script>
    Swal.fire({
        icon: 'success',
        title: 'Parabéns',
        text: 'A música foi adicionada com sucesso!'
    }).then(function() {
        window.location = '../frontend/index.php';
    });
</script></body></html>";
} else {
// Não foi possível fazer o upload, provavelmente a pasta está incorreta
echo "Não foi possível enviar o arquivo, tente novamente";
}
 
 
?>