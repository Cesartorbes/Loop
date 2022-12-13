    <style>
    	</style>
        <?php
        function listar($categoria)
        {
            $lancamentos = [
                'images/amiga da minha mulher.jpg',
                'img/gallery-img-01.png',
                'https://s2.glbimg.com/azx84ro4uuGSsQ3_UldnckX1CZQ=/fit-in/940x590/e.glbimg.com/og/ed/f/original/2013/12/18/capa_sertanejo_garcia.jpg',
                'http://2.bp.blogspot.com/-_0HlfQ_P_2g/VgMfmt5QWZI/AAAAAAAA4VY/8NohHxUHCHQ/s1600/paulafernandesamanhecercapa.png',
                'https://urbanartsdecor.files.wordpress.com/2020/12/the-dark-side-of-the-moon-minimalista.jpg?w=800',
                'https://i.pinimg.com/236x/56/03/5e/56035ebb562a74e42c5e219ae058b70f.jpg',
                'http://3.bp.blogspot.com/-uW82HnOSESs/U0h3alfuC1I/AAAAAAAAo6Y/B3K1iCLV4uw/s1600/edsheeranx.jpg'
            ];

            $maistocadas = [
                'https://i1.sndcdn.com/avatars-xJQjwsZ0zMGavKMs-xrrIfA-t500x500.jpg',
                'https://static-cse.canva.com/blob/971063/1600w-1Nr6gsUndKw.jpg',
                'https://i.scdn.co/image/ab67616d0000b2733d9a8f667919780f17b39dda',
                'https://iscale.iheart.com/catalog/album/186462138',
                'https://akamai.sscdn.co/tb/letras-blog/wp-content/uploads/2020/05/2d5e80f-5-zeze-di-camargo-luciano.jpg',
                'https://i.pinimg.com/originals/18/1b/22/181b22b114d87b1a4b8af5039982cf2d.jpg',
                'https://pbs.twimg.com/media/EXI5C71XQAAyvYh.jpg'
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

                    echo '<div class="modal-body">
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
