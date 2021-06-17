<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Clínica Psiquiátrica</title>
</head>
<body>
    <center>

    <h1>Cadastrar Pacientes</h1>
            <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
    <form method="POST" action="process.php">

        <label>Nome Completo: </label>

        <input type="text" name="nome" placeholder="Digite seu Nome Completo">
        <hr>

        <label>Endereço: </label>

        <input type="text" name="endereco" placeholder="Digite seu Endereço">
        <hr>

        <label>Telefone: </label>

        <input type="text" name="telefone" placeholder="Digite seu Telefone">
        <hr>

        <label>E-mail: </label>

        <input type="email" name="email" placeholder="Digite Seu E-mail">
        <hr>

        <label>Data de Nascimento: </label>

        <input type="date" name="data_nascimento" placeholder="Insira sua data de nascimento">

        <input type="submit" value="Cadastrar">
    </form>
    <hr>
        <form method="POST" action="lista.php">
        <input type="submit" value="Cadastros">
        </form>
    </center>


</body>
</html>