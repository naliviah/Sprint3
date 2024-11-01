<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ISBN = $_POST['cl'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $editora = $_POST['editora'];
    $classificacao = $_POST['Classificacao'];
    $data_cadastro = $_POST['dc'];
    $edicao = $_POST['edicao'];
    $genero= $_POST['genero'];
    $ano_publicacao = $_POST['ap'];

    include "conexao.php";

    $sql = "INSERT INTO `cadastro_livro` (`ISBN`, `titulo`, `autor`, `editora`,`classificacao`,`data_cadastro`,`edicao`,`genero`,`ano_publicacao`) 
     VALUES ('$ISBN', '$titulo', '$autor','$editora', '$classificacao', '$data_cadastro','$edicao','$genero','$ano_publicacao')";

    $resultado = mysqli_query($con, $sql);

    
    if (isset($resultado)) {
        echo "Cadastro feito com sucesso!!";
      
    }
    else {
        echo "error!";
    }
}
?>