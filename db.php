<?php
$Usuario = "root";
$Senha = "";
$Host = "localhost";
$Database = "resumos";

if (mysql_connect($Host, $Usuario, $Senha)){
    mysql_select_db($Database);
    }
?>