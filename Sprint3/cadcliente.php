<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $data_nascimento = $_POST['data-nascimento'];
    $telefone = $_POST['telefone'];

    include "conexao.php";

    $sql = "INSERT INTO `cadastro_cliente` (`cpf`, `nome`, `email`, `data_nasci`,`telefone` ) 
     VALUES ('$cpf', '$nome', '$email','$data_nascimento', '$telefone')";

    $resultado = mysqli_query($con, $sql);

    
    if (isset($resultado)) {
        echo "Cadastro feito com sucesso!!";
      
    }
    else {
        echo "error!";
    }
}
?>