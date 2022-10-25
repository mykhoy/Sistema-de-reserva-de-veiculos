<?php

//Importação de php
require 'config.php';
include 'Classes.php';

//Construtor de Classes
$objClasses = new Classes($mysql);

?>

<!DOCTYPE html>
<html lang="PT-BR">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="../css/reset.css">
<link rel="stylesheet" href="../css/materialize.min.css">
<link rel="stylesheet" href="../css/google-fonts.css">
<link rel="stylesheet" href="../css/style.css">
<script src="../js/jquery.js"></script>

<head>
    <title>
        LOGIN
    </title>
</head>

<body>
    <div class="my-5 container-fluid  center card borda-card">
        <h1>LOGIN SISTEMA RESERVA DE VEÍCULOS</h1>
        <!-- Formulário para preencher login e senha -->
        <form class="mx-5" action="ope.php" method="post">
            <label for="email">LOGIN</label>
            <input type="email" name="email" id="email" required placeholder="E-mail">
            <label for="senha">SENHA</label>
            <input type="password" name="senha" id="senha" required placeholder="Sua senha">
            <input type="hidden" name="authToken" id="authToken" value="<?php echo md5(date("Ymd") * 5) ?>">

            <input type="submit" class="my-5 btn waves-effect waves-light" name="action" id="btnEntrar" value="ENTRAR">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="../slick/slick.min.js"></script>
    <script src="../js/slider.js"></script>
    <script src="../js/main.js"></script>
</body>
<footer>
</footer>

</html>