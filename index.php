<META http-equiv="Content-Type" content="text/html, charset=UTF-8"/ >

<?php
include ('conecta_banco.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de chaves</title>
	<meta charset="utf-8" />
	<meta name = "viewport" content = "width=device-width, maximum-scale = 1, minimum-scale=1" />
	<link rel="stylesheet" type="text/css" href="css/default.css" media="all" />
	<link rel="stylesheet" href="css/navegação_fixa.css" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css' />
	<link rel="shortcut icon" href="img/favicon.ico">
	<script src="js/default.js"></script>
	
	
</head>
<body onload="initialize()">
	<div id="pagewidth">
		<header id="header">
			<div class="center">
				<nav id="mainNav">
					<ul>
						<li class="active">
							<a href="index.php"><span>Cadastro de Armários</span></a></li>
						<li><a href="cliente.php"><span>Consultar Armários</span></a></li>
					</ul>
				</nav>
			</div>
		</header>
		
		<article class="inicio">
		
		<form action="caixa_realiza.php" method="POST">

<div class="preto"><br/><br/>		
		
<?php

$sql = "SELECT usuario FROM funcionario ";

$resultado = mysqli_query($conexao, $sql);

echo "<p><label>Login do Funcionario:</label><br>";

echo "<select type='selected' required='required' value='selecione'  name='usuario' >";

while($linha = mysqli_fetch_array($resultado)){

echo "<option color='White'>{$linha['usuario']}</option>";
}
echo " </select></p>";

?>

		<input type="text" name="nomecliente" placeholder="Nome e Sobrenome" required="required" />
		<input type="text" name="descricao" placeholder="Usuário do Sistema" required="required" />
		<input type="text" name="nomearquivo" placeholder="Número do armário" required="required" />
		
		<input type="submit" value="Enviar" />
		<br/><br/>
		</form>
		
		</div>
		</article>
		
		<footer id="footer">
		
			</footer>
	</div>
</body>
</html>
