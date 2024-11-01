<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empréstimo de Livros</title>
    <link rel="stylesheet" href="tabela.css">
</head>
<body>

    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>


  <h1>Consulta</h1>
  <br>

  <table>
    <thead>
      <tr>
        <th>ISBN</th>
        <th>Título</th>
        <th>Autor</th>
        <th>Editora</th>
        <th>Classificação</th>
        <th>Data_cadastro</th>
        <th>Edição</th>
        <th>Gênero</th>
        <th>Ano_publicação</th>
      </tr>
    </thead>
    <tbody>

      <?php
      include "conexao.php";

      $sql = "SELECT * FROM cadastro_livro";
    
      $dados = mysqli_query($con, $sql);

     while ($linha = mysqli_fetch_array($dados)) {
        $ISBN = $linha['ISBN'];
        $Titulo = $linha['titulo'];
        $Autor = $linha['autor'];
        $Editora = $linha['editora'];
        $Classificação = $linha['classificacao'];
        $Data_cadastro = $linha['data_cadastro'];
        $Edição = $linha['edicao'];
        $Gênero = $linha['genero'];
        $Ano_publicação = $linha['ano_publicacao'];
       echo "<tr>
                <th>$ISBN</th>
                <th>$Titulo</th>
                <th>$Autor</th>
                <th>$Editora</th>
                <th>$Classificação</th>
                <th>$Data_cadastro</th>
                <th>$Edição</th>
                <th>$Gênero</th>
                <th>$Ano_publicação</th>
            </tr>";
     }

     ?>
    </tbody>
  </table>
<br>
  <button class=""><a href="listagem_biblio.html">Voltar</a></button>
</body>
</html>