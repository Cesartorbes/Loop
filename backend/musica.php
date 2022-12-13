<?php
 include_once('conecta.php');
 $dados = $_POST;
 $banco = new Banco;
 try{
     $conn = $banco->conectar();
 } catch(PDOException $e){
     echo 'Falha ao salvar os arquivos. Favor, tente mais tarde.';
 }
        function listar($categoria)
        {
            global $conn;
            $lancamentos = [];
            $maistocadas = [];
           
            $query = $conn->query('SELECT * FROM musica');
            $resultados = $query->fetchAll(PDO::FETCH_ASSOC);
           
                   foreach($resultados as $resultado) {
                       if ($resultado['destaque_lancamento'] == 1) {
                           array_push($lancamentos, $resultado['img']);
                       } else {
                           array_push($maistocadas, $resultado['img']);
                       }}

            if ($categoria == "lancamentos") {
                $musicas = $lancamentos;
            } else {
                $musicas = $maistocadas;
            }

            foreach ($musicas as $musica) {
                echo '<a data-toggle="modal" data-target="#modal-musica" data-backdrop="static" data-keyboard="false" class="tm-slider-img"><img class="imgquadrada" src="../frontend/', $musica, '" alt="Image" class="img-fluid"></img></a>';
            }
        }
        function layoutmusica(){
            global $conn;
            $query = $conn->query('SELECT * FROM musica');
            $resultados = $query->fetchAll(PDO::FETCH_ASSOC);
            $musicas = [];
           
                   foreach($resultados as $resultado) {
                           array_push($musicas, $resultado['img']);
                       }
                    echo '<div class="modal-body">
                        <div class="music-container" id="music-container">
                            <div class="music-info">
                                <h4 id="title"></h4>
                                <div class="progress-container" id="progress-container">
                                    <div class="progress" id="progress"></div>
                                </div>
                            </div>

                            <audio src="../frontend/music/tutorial.mp3" id="audio"></audio>

                            <div class="img-container">
                                <img src="../frontend/music/nao-cadastrada.jpg" alt="music-cover" id="cover" />
                            </div>
                            <div class="navigation">
                                <button id="prev" class="action-btn">
                                    <i class="fas fa-backward"></i>
                                </button>
                                <button id="play" class="action-btn action-btn-big">
                                    <i class="fas fa-play"></i>
                                </button>
                                <button id="next" class="action-btn">
                                    <i class="fas fa-forward"></i>
                                </button>
                            </div>
                        </div>
        </div>';
    echo '<script>const songs = ["hey", "summer", "ukulele", "Sinfonia dos crias", "tutorial", "amiga da minha mulher"] </script>';
    }
                    ?>