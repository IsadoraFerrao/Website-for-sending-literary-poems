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
				</ul>   
			</div>
    
	<img style="width:130px; margin-left:20px; position:absolute; top:15px;" src="imagens/logo.jpg" >
	

	<div class="form-log-in-with-email" style="margin-left:600px;" >
		<form class="form-login"  method="POST" action="cadastra.php" enctype="multipart/form-data" name="Form_Upload_Arquivo">
            <div class="form-white-background" style="width:500px;">

				<div class="form-title-row">
					<h1>Cadastre-se</h1>
                </div>
				<div class="form-row">
                    <label>
                        <span>Nome*</span>
                            <input type="text" name="nome" placeholder="" required>
                    </label>
                </div>
				<div class="form-row">
                    <label>
                         <span>Idade*</span>
                            <input type="text" name="idade" required>
                    </label>
                </div>
				<div class="form-row">
                    <label>
                         <span>E-mail*</span>
                            <input type="mail" name="email" required>
                    </label>
                </div>
				<div class="form-row">
                    <label>
                         <span>Cidade*</span>
                            <input type="text" name="cidade" required>
                    </label>
                </div>
			
			<div class="form-row">	
			                    <label>
                        <span>País*</span>
                            <input type="text" name="pais" required>
                    </label>
			</div>
			<div class="form-row">
			<tr>
			   <td>
					<label >
						<span>Estado*</span>
					</label>
			   </td>
			   <td align="left">
				<select name="estado"> 
				<option value="">Selecionar</option> 
				<option value="ac">Acre</option> 
				<option value="al">Alagoas</option> 
				<option value="am">Amazonas</option> 
				<option value="ap">Amapá</option> 
				<option value="ba">Bahia</option> 
				<option value="ce">Ceará</option> 
				<option value="df">Distrito Federal</option> 
				<option value="es">Espírito Santo</option> 
				<option value="go">Goiás</option> 
				<option value="ma">Maranhão</option> 
				<option value="mt">Mato Grosso</option> 
				<option value="ms">Mato Grosso do Sul</option> 
				<option value="mg">Minas Gerais</option> 
				<option value="pa">Pará</option> 
				<option value="pb">Paraíba</option> 
				<option value="pr">Paraná</option> 
				<option value="pe">Pernambuco</option> 
				<option value="pi">Piauí</option> 
				<option value="rj">Rio de Janeiro</option> 
				<option value="rn">Rio Grande do Norte</option> 
				<option value="ro">Rondônia</option> 
				<option value="rs">Rio Grande do Sul</option> 
				<option value="rr">Roraima</option> 
				<option value="sc">Santa Catarina</option> 
				<option value="se">Sergipe</option> 
				<option value="sp">São Paulo</option> 
				<option value="to">Tocantins</option> 
				<option value="outro">Outro</option> 
			   </select>
			   </td>
			  </tr>
				</div>	

				<div class="form-row">
                    <label>
                        <span>Co-autor</span>
                            <input type="text" name="coautor">
                    </label>
                </div>
				<div class="form-row">
                    <label>
                        <span>Instituição</span>
                            <input type="text" name="instituicao">
                    </label>
                </div>
				
				
			<div class="form-row">
			<tr required>
			   <td>
					<label>
						<span>Gênero*</span>
					</label>
			   </td>
			   <td align="left">
				<select name="genero"> 
				<option value="">Selecionar</option> 
				<option value="poesia">Poesia</option> 
				<option value="conto">Conto</option> 
			   </select>
			   </td>
			  </tr>
			</div>	
				<div class="form-row">
                    <label>
                        <span>Título*</span>
                            <input type="text" name="titulo" required>
                    </label>
                </div>
				<div class="form-row">
                    <label>
                        <span>Autorização menores de 18</span>
							<input type="file" name="autorizacao" id="autorizacao" />
				<h5 style="color:red;">Caso você seja menor de idade, insira um arquivo com a autorização do responsável</h5>

                    </label>

                </div>
				
				<div class="form-row">
                    <label>
                        <span>Obra literária*</span>
							<input type="file" name="Arquivo" id="arquivo" />
                    </label>
                </div>
				<div class="form-row">
                    <label>
                        <span>Biografia*</span>
                            <input type="text" name="biografia" required>
                    </label>
                </div>

                <div >
					<button style="background-color:black" type="submit">Enviar obra</button>
                </div>
				
            </div>
			
			
    </div>
	
</form>	

<<form name="Form_Upload_Arquivo" action="upload.php" method="post" enctype="multipart/form-data">
<input type="file" name="Arquivo" />
<input type="submit" value="Enviar" />
</form>

</body>
</html>