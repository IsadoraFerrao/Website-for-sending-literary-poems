<?php
include("conexao.php"); // caminho do seu arquivo de conexão ao banco de dados
//$consulta = "SELECT * FROM obras";
$con = mysqli_query ($conexao, "SELECT * FROM obras");
//$con  = $mysqli->query($consulta) or die($mysqli->error);
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Sistema Motus </title>
	<link rel="stylesheet" href="css/cssmenu.css">
	<link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/form-login.css">
	
</head>

<body>
	<h3 style="background-color:#F3C9B3; color:#F3C9B3">. </h3>
			<div>
				<ul>
					<li><a href='index.php'><span>Inicio</span></a></li>
					<li><a href='sobre.php'><span>Sobre</span></a></li>
					<li><a href='informacoes.php'><span>Edital</span></a></li>
					<li><a href='cadastrese.php'><span>Envie sua obra</span></a></li>
					<li><a href='equipe.php'><span>Comissão Organizadora</span></a></li>
					<li><a href='logout.php'><span>Sair</span></a></li>

				</ul>   
			</div>
    
	<img style="width:130px; margin-left:20px; position:absolute; top:15px;" src="imagens/logo.jpg" >

	<div class="form-log-in-with-email" style="margin-left:150px;" >
	<table border="1">
    <tr style="background-color:black; color:white;">
      <td>&nbspNome&nbsp</td>
      <td>&nbspIdade&nbsp</td>
      <td>&nbspE-mail&nbsp</td>
      <td>&nbspCidade&nbsp</td>
      <td>&nbspEstado&nbsp</td>
	  <td>&nbspPaís&nbsp</td>
	  <td>&nbspCo-autor&nbsp</td>
	  <td>&nbspInstituição&nbsp</td>
	  <td>&nbspGênero&nbsp</td>
	  <td>&nbspTítulo&nbsp</td>
	  <td>&nbspAutorização menores de 18 anos&nbsp</td>
	  <td>&nbspObra literária&nbsp</td>
	  <td>&nbspBiografia&nbsp</td>
    </tr>
	
						<!--<a href="imagens/logo.jpg" download="w3logo">oioi</a>-->

    <?php while($dado = $con->fetch_array()) { ?>
    <tr style="background-color:white;">
      <td><?php echo $dado['nome']; ?></td>
      <td><?php echo $dado['idade']; ?></td>
      <td><?php echo $dado['email']; ?></td>
	  <td><?php echo $dado['cidade']; ?></td>
      <td><?php echo $dado['estado']; ?></td>
	  <td><?php echo $dado['pais']; ?></td>
      <td><?php echo $dado['coautor']; ?></td>
      <td><?php echo $dado['instituicao']; ?></td>
	  <td><?php echo $dado['genero']; ?></td>
      <td><?php echo $dado['titulo']; ?></td>
      <td><a href="autorizacoes\<?php echo $dado['autorizacao_nome']?>" download><?php echo $dado['autorizacao_nome']?></a></td>
      <td><a href="arquivos\<?php echo $dado ['arquivo_nome']?>" download><?php echo $dado['arquivo_nome']; ?></td>
      <td><?php echo $dado['biografia']; ?></td>

    </tr>
		
	
    <?php } ?>
  </table>

    </div>
	

</body>
</html>