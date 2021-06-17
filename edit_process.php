<?php
session_start();
include_once("conexao.php");

$cod_pessoa = filter_input(INPUT_POST, 'cod_pessoa', FILTER_SANITIZE_STRING);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$data_nascimento = filter_input(INPUT_POST, 'data_nascimento', FILTER_SANITIZE_STRING);


$query = "UPDATE pacientes SET nome ='$nome' WHERE cod_pessoa = 1";
$insert = mysqli_query($conn, $query);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Alterações efetuadas com sucesso</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Aterações não foi efetuadas com sucesso</p>";
	header("Location: lista.php");
}

?>
