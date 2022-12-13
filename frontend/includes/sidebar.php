<div id="tmSideBar" class="col-xl-3 col-lg-4 col-md-12 col-sm-12 sidebar">
 
                <button id="tmMainNavToggle" class="menu-icon">&#9776;</button>
 
                    <nav id="tmMainNav" class="tm-main-nav">
                        <ul>
                            <li>
                                <a href="index.php" id="tmNavLink1" class="scrolly">
                                    <i class="fas fa-home tm-nav-fa-icon"></i>
                                    <span>Início</span>
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
                                $conn1 = mysqli_connect("localhost", "root", "", "loopdb");
                                $id=$_SESSION['usuario_id'];
                                $query = "SELECT nome from usuario where usuario_id = $id";
                                $resultUsuarioLogado = mysqli_query($conn1, $query);
                                $dadosUsuarioLogado = mysqli_fetch_assoc($resultUsuarioLogado);
                                echo('<li>
                                <a class="scrolly hoverlogout" style="white-space: nowrap;" href="../frontend/logout.php">
                                    <i class="fas fa-user tm-nav-fa-icon"></i>
                                    <span>Olá ' .ucwords($dadosUsuarioLogado['nome']). '</span>
                                </a>
                            </li>
                            ');
                            }else{
                                echo('<li>
                                <a data-toggle="modal" data-target="#modal-perfil" id="tmNavLink4">
                                    <i class="fas fa-user tm-nav-fa-icon"></i>
                                    <span>Perfil</span>
                                </a>
                            </li>');
                            }
                            ?>
                              <li>
                                <a data-toggle="modal" data-target="#modal-upload" id="tmNavLink3" class="scrolly">
                                    <i class="fas fa-plus tm-nav-fa-icon"></i>
                                    <span>Adicionar música</span>
                                </a>
                            </li>
                            <?php layoutmusica(); ?>   
                        </ul>
                    </nav>
            </div>