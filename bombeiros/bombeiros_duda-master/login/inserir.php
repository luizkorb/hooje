<?php
    include("conecta.php");

    $email     = $_POST["email"];
    $senha      = $_POST["senha"];

    $comando = $pdo->prepare("SELECT email, senha FROM cadastrobomb WHERE email ,senha = \"$email\", \"$senha\" ");
    $resultado = $comando->execute();

    // Para voltar no formulário:
    header("Location: menu/menu.html");
?>