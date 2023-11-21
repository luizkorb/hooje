<?php


$cpf = $_GET["cpf"];
$email = $_GET["email"];
$senha = md5($_GET["senha"]);
$nome = $_GET["nome"];
$telefone = $_GET["telefone"];
$usuario = $_GET["usuario"];

include("conecta.php");

$comando = $pdo->prepare("UPDATE cadastro_bombeiro SET nome=\"$nome\", senha=\"$senha\", cpf=\"$cpf\", email=\"$email\", telefone=\"$telefone\", usuario=\"$usuario\" WHERE cpf=\"$cpf\" ");
    $resultado = $comando->execute();

    echo("{\"resultado\":1}"); 
?>