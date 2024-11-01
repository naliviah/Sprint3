<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    include "conexao.php";

    $sql = "SELECT * FROM usuario
    WHERE `login_usuario` = '$login'
    AND `senha` = '$senha'";


    $resultado = mysqli_query($con, $sql);


    if (mysqli_num_rows($resultado) > 0) {
        echo "Liberado!";
      
    }
    else {
        echo "Usuário ou senha invalidos!";
    }
}
?>