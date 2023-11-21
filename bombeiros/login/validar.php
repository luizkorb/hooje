<?php
// Verifique se a solicitação é uma solicitação POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receba os dados do formulário
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    include("conecta.php");


    if ($result->num_rows > 0) {
        // As credenciais são válidas
        echo "success";
    } else {
        // Credenciais inválidas
        echo "error";
    }

    // Feche a conexão com o banco de dados
    $conn->close();
} else {
    // Redirecione ou mostre uma mensagem de erro, se necessário
    echo "Método inválido de solicitação.";
}

$comando = $pdo->prepare("SELECT "email", "senha" FROM "cadastrobomb" where email=$email and senha=$senha");

    $resultado = $comando->execute();
echo("{\"resultado\":1}"); 
?>