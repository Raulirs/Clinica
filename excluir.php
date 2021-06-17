<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'cod_pessoa', FILTER_SANITIZE_NUMBER_INT);
	$query = "DELETE FROM pacientes WHERE cod_pessoa='$id";
	$insert = mysqli_query($conn, $query);
	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "<p style='color:green;'>Cadastro apagado com sucesso</p>";
		header("Location: lista.php");
	}else{
		
		$_SESSION['msg'] = "<p style='color:red;'>Erro o Cadastro não foi apagado com sucesso</p>";
		header("Location: lista.php");
	}

