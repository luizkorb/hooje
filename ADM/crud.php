<?php

include("conecta.php");
// Para pegar o texto dos inputs:
$cpf = $_POST["cpf"];
$email = $_POST["email"];
$senha = md5($_POST["senha"]);
$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$usuario = $_POST["usuario"];

if (isset($_POST["inserir"])) {

    $comando = $pdo->prepare("INSERT INTO cadastro_bombeiro VALUES (\"$cpf\", \"$email\", \"$senha\", \"$nome\", \"$telefone\", \"$usuario\")");
    $resultado = $comando->execute();
    header("Location: index.php");

}
if (isset($_POST["excluir"])) {

    $comando = $pdo->prepare("DELETE FROM cadastro_bombeiro WHERE cpf=\"$cpf\"");
    $resultado = $comando->execute();
    
    header("Location: index.php");

}

if (isset($_GET["alterar"])) {
    $comando = $pdo->prepare("UPDATE cadastro_bombeiro SET nome=\"$nome\", senha=\"$senha\", cpf=\"$cpf\", email=\"$email\", telefone=\"$telefone\", usuario=\"$usuario\" WHERE cpf=\"$cpf\" ");
    $resultado = $comando->execute();
    header("Location: index.php");
}

if (isset($_GET["listar"])) {
    $comando = $pdo->prepare("SELECT * FROM cadastro_bombeiro");
    $resultado = $comando->execute();

    while ($linhas = $comando->fetch()) {
        $n = $linhas["nome"];
        $m = $linhas["email"];
        $i = $linhas["senha"];
        echo ("$m $n $i <br> <br>");
    }
}
?>