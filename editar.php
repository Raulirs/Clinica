<?php
session_start();
include_once("conexao.php");

$cod_pessoa = filter_input(INPUT_GET, 'cod_pessoa', FILTER_SANITIZE_NUMBER_INT);
$insert = "SELECT * FROM pacientes WHERE cod_pessoa = 1";
$query = mysqli_query($conn, $insert);
$row_usuario = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Clínica Psiquiátrica-Editar</title>
</head>
<body>

    <h1>Alterações no Cadastro</h1>
        <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
    <form method="POST" action="edit_process.php">

        <input type="hidden" name="cod_pessoa" value="<?php echo $row_usuario['cod_pessoa']; ?>">

        <label>Nome: </label>
        <input type="text" name="nome" placeholder="Digite o nome completo" value="<?php echo $row_usuario['nome']; ?>">
        <hr>

        <label>Endereço: </label>

        <input type="text" name="endereco" placeholder="Digite seu Endereço" value="<?php echo $row_usuario['endereco']; ?>">
        <hr>

        <label>Telefone: </label>

        <input type="text" name="telefone" placeholder="Digite seu Telefone" value="<?php echo $row_usuario['telefone']; ?>">
        <hr>

        <label>E-mail: </label>

        <input type="email" name="email" placeholder="Digite Seu E-mail" value="<?php echo $row_usuario['email']; ?>">
        <hr>

        <label>Data de Nascimento: </label>

        <input type="date" name="data_nascimento" placeholder="Insira sua data de nascimento" value="<?php echo $row_usuario['data_nascimento']; ?>">

        <input type="submit" value="Salvar alterações">
    </form>
    <hr>


</body>
</html>