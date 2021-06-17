<?php
session_start();
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Lista de Pacientes Cadastrados</title>		
	</head>
	<body>
		<h1>Listar Pacientes</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		$insert = "SELECT * FROM pacientes";
		$query = mysqli_query($conn, $insert);
		while($linha = mysqli_fetch_assoc($query)){
			echo "ID: " . $linha['cod_pessoa'] . "<br>";
			echo "Nome: " . $linha['nome'] . "<br>";
			echo "Endereço: " . $linha['endereco'] . "<br>";
			echo "Telefone: " . $linha['telefone'] . "<br>";
			echo "E-mail: " . $linha['email'] . "<br>";
			echo "Data de Nascimento: " . $linha['data_nascimento'] . "<br>";
			echo "<a href='editar.php?id=' " . $linha['cod_pessoa'] . ">Editar</a><br>";
			echo "<a href='excluir.php?id=' " . $linha['cod_pessoa'] . ">Excluir</a><br><br>";
		}
		?>	
	</body>
</html>