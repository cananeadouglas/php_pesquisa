<META http-equiv="Content-Type" content="text/html, charset=UTF-8"/ >

<?php
include ('conecta_banco.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de telefones de funcionários</title>
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
							<a href="index.php"><span>Cadastro de Funcionário</span></a></li>
						<li><a href="cliente.php"><span>Consultar Funcionário</span></a></li>
						<li><a href="estoque1.php"><span>ESTOQUE</span></a></li>
					</ul>
				</nav>
			</div>
		</header>
		
		<article class="inicio">
		
		<form action="caixa_realiza.php" method="POST">


<div class="preto"><br/><br/>
		
<?php

$sql = "SELECT nomeproduto FROM produtos ";

$resultado = mysqli_query($conexao, $sql);

echo "<p><label>Listar produto:</label><br>";

echo "<select type='selected' required='required' value='selecione'  name='nomeproduto' >";

while($linha = mysqli_fetch_array($resultado)){

echo "<option color='White'>{$linha['nomeproduto']}</option>";
}
echo " </select></p>";





$sq2 = "SELECT quantidade FROM produtos WHERE nomeproduto = 'nomeproduto' ";

$resultado1 = mysqli_query($conexao, $sq2);

echo "<p><label>Quantidade:</label><br>";

echo "<select type='selected' required='required' value='selecione'  name='quantidade' >";

while($linha1 = mysqli_fetch_array($resultado1)){

echo "<option color='White'>{$linha1['quantidade']}</option>";
}
echo " </select></p>";

?>
		</form>
		
		</div>
		</article>
		
		<footer id="footer">
		
			</footer>
	</div>
</body>
</html>
