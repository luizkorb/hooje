<?php

$cpf = $_POST["cpf"];
$email = $_POST["email"];
$senha = md5($_POST["senha"]);
$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$usuario = $_POST["usuario"];


include("conecta.php");

    $comando = $pdo->prepare("INSERT INTO cadastro_bombeiro(cpf,email, senha, nome, telefone, usuario) VALUES (\"$cpf\", \"$email\", \"$senha\", \"$nome\", \"$telefone\", \"$usuario\")");

    $resultado = $comando->execute();
echo("{\"resultado\":1}"); 

?>