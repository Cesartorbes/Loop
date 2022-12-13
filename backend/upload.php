<?php
 
// Pasta onde o arquivo vai ser salvo
$_UP['pastaimg'] = '/loop/frontend/images/';
$_UP['pastamusic'] = '/loop/frontend/images/';
  
// Array com as extensões permitidas
$_UP['extensaoimg'] = array('jpg', 'png');
$_UP['extensaomsc'] = 'mp3';
 
// Faz a verificação da extensão do arquivo da musica e da imagem
$extensaoimg = strtolower(end(explode('.', $_FILES['img']["name"])));
$extensaomsc = strtolower(end(explode('.', $_FILES['msc']["name"])));
if (array_search($extensaoimg, $_UP['extensaoimg']) === false) {
echo "Por favor, envie imagens com as seguintes extensões: jpg, png";
if ($extensaomsc != $_UP['extensaomsc']) {
    echo "Por favor, envie músicas com a seguinte extensão: mp3";
}
}
else {
$nome_final = $_FILES['arquivo']['name'];
}
 
// Depois verifica se é possível mover o arquivo para a pasta escolhida
if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) {
// Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
echo "Upload efetuado com sucesso!";
echo '<br /><a href="' . $_UP['pasta'] . $nome_final . '">Clique aqui para acessar o arquivo</a>';
} else {
// Não foi possível fazer o upload, provavelmente a pasta está incorreta
echo "Não foi possível enviar o arquivo, tente novamente";
}
 
 
?>