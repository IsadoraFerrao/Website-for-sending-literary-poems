<?php
include("conexao.php");

$consulta = mysqli_query($conexao, "SELECT * FROM obras");
if ($resultado = mysqli_fetch_array($consulta)){
    do {
        echo "<a href=\"" . $resultado["arquivo_local"] . $resultado["arquivo_nome"] . "\">" . $resultado["arquivo_nome"] . "</a><br />";
        }
    while($resultado = mysqli_fetch_array($consulta));
    }
?>