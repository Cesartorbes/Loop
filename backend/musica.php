<?php
 include_once('conecta.php');
 $dados = $_POST;
 $banco = new Banco;
 try{
     $conn = $banco->conectar();
 } catch(PDOException $e){
     echo 'Falha ao salvar os arquivos. Favor, tente mais tarde.';
 }

            $query = $conn->prepare('SELECT * FROM musica');
            $query->execute([
                ':email' => $dados['email']           
            ]);


        function listar($categoria)
        {
            $lancamentos = [

            ];

            $maistocadas = [

            ];

            if ($categoria == "lancamentos") {
                $musicas = $lancamentos;
            } else {
                $musicas = $maistocadas;
            }

            foreach ($musicas as $musica) {
                echo '<a data-toggle="modal" data-target="#modal-musica" data-backdrop="static" data-keyboard="false" class="tm-slider-img"><img class="imgquadrada" src="', $musica, '" alt="Image" class="img-fluid"></img></a>';
            }
        }
        function layoutmusica(){

                    echo '<div class="modal-body" draggable="true">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true" class="sb-txt-white">
                                &times;
                            </span>
                        </button>
                        <div class="music-container" id="music-container">
                            <div class="music-info">
                                <h4 id="title"></h4>
                                <div class="progress-container" id="progress-container">
                                    <div class="progress" id="progress"></div>
                                </div>
                            </div>

                            <audio src="../music/ukulele.mp3" id="audio"></audio>

                            <div class="img-container">
                                <img src="images/ukulele.jpg" alt="music-cover" id="cover" />
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
        </div>'; }
                    ?>