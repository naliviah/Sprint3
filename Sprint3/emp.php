<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $cl = $_POST['cl'];
    $de = $_POST['de'];
    $dd = $_POST['dd'];
    $c = $_POST['c'];

    include "conexao.php";

    $sql = "INSERT INTO `empretimo`(`ISBN`, `data_emp`, `data_dev`, `id_cliente`) 
                            VALUES ('$cl','$de','$dd','$c')";


    $resultado = mysqli_query($con, $sql);

    if (isset($resultado)) {
        echo "Emprestimo feito com sucesso!!";
      
    }
    else {
        echo "error!";
    }
}
?>