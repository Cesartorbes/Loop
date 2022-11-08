        <?php
        $maistocadas = [
            'https://i1.sndcdn.com/artworks-FtWRByRryFHguWGW-4LumPw-t500x500.jpg',
            'https://i.scdn.co/image/ab67616d0000b2733d9a8f667919780f17b39dda',
            'https://iscale.iheart.com/catalog/album/186462138',
            'https://akamai.sscdn.co/tb/letras-blog/wp-content/uploads/2020/05/2d5e80f-5-zeze-di-camargo-luciano.jpg',
            'https://i.pinimg.com/originals/18/1b/22/181b22b114d87b1a4b8af5039982cf2d.jpg',
            'https://pbs.twimg.com/media/EXI5C71XQAAyvYh.jpg'
        ];
        function maistocadas($maistocadas)
        {
            foreach ($maistocadas as $musica) {
                echo '<a class="tm-slider-img"><img height="480" width="480" src="', $musica, '" alt="Image" class="img-fluid"></a>';
            }
        }
        
        function lancamentos($lancamentos)
        {
            foreach ($lancamentos as $musica) {
                echo '<a class="tm-slider-img"><img height="480" width="480" src="', $musica, '" alt="Image" class="img-fluid"></a>';
            }
        }
        ?>