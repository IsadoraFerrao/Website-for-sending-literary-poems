<?php
//include("conexao.php");
if (isset($_FILES["autorizacao"])){
    $autorizacao = $_FILES["autorizacao"];
    $Pasta_autorizacao = "autorizacoes/";
    $autorizacao_Nome = $autorizacao['name'];
    move_uploaded_file($autorizacao['tmp_name'], $Pasta_autorizacao . $autorizacao_Nome);
    //mysql_query("INSERT INTO `obras` (`autorizacao_nome`,`autorizacao_local`) VALUES ('$autorizacao_Nome','$Pasta_autorizacao')");
    //include("cadastra.php");
    }
?>