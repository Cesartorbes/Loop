<div id="tmSideBar" class="col-xl-3 col-lg-4 col-md-12 col-sm-12 sidebar">
 
                <button id="tmMainNavToggle" class="menu-icon">&#9776;</button>
 
                <div class="inner">
                    <nav id="tmMainNav" class="tm-main-nav">
                        <ul>
                            <li>
                                <a href="index.php" id="tmNavLink1" class="scrolly">
                                    <i class="fas fa-home tm-nav-fa-icon"></i>
                                    <span>Início</span>
                                </a>
                            </li>
                            <li>
                                <a href="playlist.php" id="tmNavLink2" class="scrolly">
                                    <i class="fas fa-music tm-nav-fa-icon"></i>
                                    <span>Playlists</span>
                                </a>
                            </li>                          
                            <li>
                                <a href="pesquisar.php" id="tmNavLink3" class="scrolly">
                                    <i class="fas fa-search tm-nav-fa-icon"></i>
                                    <span>Pesquisa</span>
                                </a>
                            </li>
                            <?php
                            $banco = new Banco;
                            if (isset($_SESSION["usuario_id"])){
                                $id=$_SESSION['usuario_id'];
                                $query = "SELECT nome from usuario where usuario_id = $id";
                                $result = mysqli_query($conn ,$query)or die(mysql_error());
                                $row = mysqli_fetch_assoc($result);
                                echo('<li>
                                <a data-toggle="modal" data-target="#modal-perfil" class="scrolly" id="tmNavLink4">
                                    <i class="fas fa-user tm-nav-fa-icon"></i>
                                    <span>Olá ' .$row['nome']. '</span>
                                </a>
                            </li>');
                            }else{
                                echo('<li>
                                <a data-toggle="modal" data-target="#modal-perfil" class="scrolly" id="tmNavLink4">
                                    <i class="fas fa-user tm-nav-fa-icon"></i>
                                    <span>Perfil</span>
                                </a>
                            </li>');
                            }
                            ?>
                        </ul>
                    </nav>
                </div>
            </div>