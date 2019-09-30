

<!DOCTYPE html>
<html>
<head>
	
	<title>Sistema de testes </title>
	<link rel="stylesheet" href="css/cssmenu.css">
	<link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/form-login.css">
	<script type="text/javascript" src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=AM_HTMLorMML-full"></script>
	
</head>

<body>
<h3 style="background-color:green; color:green">. </h3>
				<div>
		  <ul>
				<li><a href='index_logado_adm.php'><span>Inicio</span></a></li>
				<li><a href='informacoes_logado_adm.php'><span>Informações do projeto</span></a>
																			</li>
				<li><a href='#'><span>Recomendações gerais</span></a>
			</li>
				<li><a href='logado_adm.php'><span>Voltar</span></a></li>
				<li><a href='logout.php'><span>Sair</span></a></li>
		  </ul> 
			</div>
			

		<?php

$conn = @mysql_connect('fdb12.atspace.me','2245022_projeto','unipampa.2016');
if (!$conn) {
	die('Não foi possível Conectar: ' . mysql_error());
}
mysql_select_db('2245022_projeto');

	echo '<meta charset="utf-8"/>';
	
	//seleciona resultados
		$usuario=$_SESSION['usuario'];
		
	$sel = mysql_query("SELECT nome, pergunta, resposta, nivel, topico_1, topico_2, topico_3, id_pergunta from perguntas");

	$num = mysql_num_rows($sel);

	//verifica se há resultados
	if($num <= 0){
		echo '<pan class="Erro sucesso"><br>  Sem questionarios</div>';
	}
	else{
		echo '<table>
		<tr  style="background-color:green; color:white"> 
		<th>&nbsp;&nbsp;&nbsp;Disciplina&nbsp;&nbsp;&nbsp;</th>
		<th>Pergunta</th>
		<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Resposta&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		<th>&nbsp;&nbsp;Nível&nbsp;&nbsp;</th>
		<th>&nbsp;&nbsp;Tópico 1&nbsp;&nbsp;</th>
		<th>&nbsp;&nbsp;Tópico 2&nbsp;&nbsp;</th>
		<th>&nbsp;&nbsp;Tópico 3&nbsp;&nbsp;</th>
		</tr><br>';
		//verifica se há resultados
	
		$cont = 0;		
		while($cont <$num ){
		$nome =mysql_result($sel,$cont,0);
		$pergunta =mysql_result($sel,$cont,1);
		$resposta =mysql_result($sel,$cont,2);
		$nivel =mysql_result($sel,$cont,3);
		$topico_1 =mysql_result($sel,$cont,4);
		$topico_2 =mysql_result($sel,$cont,5);
		$topico_3 =mysql_result($sel,$cont,6);
		$id_pergunta =mysql_result($sel,$cont,7);
		//$status =mysql_result($sel,$cont,4);
		//$id = mysql_result($sel,$cont,'id');
		echo "
			   <tr style='background-color:white'> <td>&nbsp;&nbsp;$nome</td> 
			   <td name='pergunta' id='pergunta'>$pergunta</td> 
		       <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$resposta</td>
			   <td>&nbsp;&nbsp;$nivel</td>
			   <td>&nbsp;&nbsp;$topico_1&nbsp;&nbsp;</td>
			   <td>&nbsp;&nbsp;$topico_2&nbsp;&nbsp;</td>
			   <td>&nbsp;&nbsp;$topico_3&nbsp;&nbsp;</td>
			   </form></td>
				</p>";
			   
			   	"</tr>";
				$cont = $cont+1;
				}
		
		echo'</table>';
	
	}
?>
	<img style="width:180px; position:absolute; top:35px;" src="LOGOTIPO UNICALC/LOGO PNG/LOGO (1).png" >
</body>
</html>