﻿<?php

include "conexao.php" ;

			$nome = $_POST['nome'];
			$idade = $_POST['idade'];
			$email = $_POST['email'];
			$cidade = $_POST['cidade'];
			$estado = $_POST['estado'];
			$pais = $_POST['pais'];
			$coautor = $_POST['coautor'];
			$instituicao = $_POST['instituicao'];
			$genero = $_POST['genero'];
			$titulo = $_POST['titulo'];
			//$autorizacao = $_POST['autorizacao'];
			//$obra_literaria = $_POST['obra_literaria'];
			$biografia = $_POST['biografia'];

			include ("upload.php");
			include ("autorizacao_menor.php");
			
			$sql=mysqli_query($conexao, "INSERT INTO obras (nome, idade, email, cidade, estado, pais, coautor, instituicao, genero, titulo, autorizacao_nome, autorizacao_local, arquivo_nome, arquivo_local, biografia)VALUES ('$nome', '$idade', '$email', '$cidade', '$estado','$pais',  '$coautor', '$instituicao', '$genero','$titulo', '$autorizacao_Nome','$Pasta_autorizacao', '$Arquivo_Nome','$Pasta_Destino', '$biografia')") or die ('Erro ao inserir os dados'.mysqli_error($conexao));
			
			//var_dump ($Arquivo_Local, $Arquivo_Nome);
			
	
?>
	<html>
	<head> 
	<title>Redirecionando</title>
	<script type="text/javascript"> alert("Cadastrado com sucesso!"); 
	window.location="index.php"; </script> 
	</head>
	<body>
	</body> 
	</html>