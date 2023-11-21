<?php
session_start();
require 'conecta.php';

$email = $_POST['email'];
$senha = $_POST['senha'];


 //* FROM nome a tabela

if(isset($_GET["login"])){
    $login = $_GET["login"];
    if($login == 0){
      ;
      
    }
  }

  header("Location: ../menu/menu.html");
?>
