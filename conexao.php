<?php
define('BD_USER', 'root');
define('BD_PASS', '');
define('BD_NAME', 'resumos');
$conexao = mysqli_connect('localhost', 'root', '');
$link = mysqli_select_db($conexao, BD_NAME);
?>
