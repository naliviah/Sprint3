<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $data_nascimento = $_POST['data-nascimento'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];

    include "conexao.php";

    $sql = "INSERT INTO `cadastro_usuario` (`nome`, `email`, `data_nasci`, `telefone`,`endereco`,`cpf` ) 
     VALUES ('$nome', '$email', '$data_nascimento','$telefone', '$endereco', '$cpf')";

    $resultado = mysqli_query($con, $sql);


    if (isset($resultado)) {
        echo "Cadastro feito com sucesso!!";
      
    }
    else {
        echo "error!";
    }
}
?>