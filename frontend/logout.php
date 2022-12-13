<?php
    session_start();
    unset($_SESSION['usuario_id']);
    session_destroy();
    header('Location: http://localhost/loop/frontend/index.php');
?>