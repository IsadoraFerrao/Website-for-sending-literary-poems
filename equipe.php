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
    <h3 style="margin-left:650px; font-size:20px;"> Área reservada para a equipe organizadora </h3><br><br>
	<img style="width:130px; margin-left:20px; position:absolute; top:15px;" src="imagens/logo.jpg" >

	<div class="form-log-in-with-email" style="margin-left:600px;" >
		<form class="form-login"  method="POST" action="verifica_usuario.php">
            <div class="form-white-background" style="width:500px;">

				<div class="form-title-row">
					<h1>Efetue login</h1>
                </div>
				<div class="form-row">
                    <label>
                        <span>Usuário</span>
                            <input type="text" name="user" placeholder="" required>
                    </label>
                </div>
				<div class="form-row">
                    <label>
                         <span>Senha</span>
                            <input type="text" name="senha" required>
                    </label>
                </div>
			    
				<div >
					<button style="background-color:black" type="submit">Acessar</button>
                </div>
            </div>
			
			
    </div>
	
		</form>	

</body>
</html>