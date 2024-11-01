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
        <th>Código_empréstimo</th>
        <th>ISBN</th>
        <th>Data_empréstimo</th>
        <th>Data_devolução</th>
        <th>Id_cliente</th>
      </tr>
    </thead>
    <tbody>

      <?php
      include "conexao.php";

      $sql = "SELECT * FROM empretimo";
    
      $dados = mysqli_query($con, $sql);

     while ($linha = mysqli_fetch_array($dados)) {
        $Código_empréstimo = $linha['cod_emp'];
        $ISBN = $linha['ISBN'];
        $Data_empréstimo = $linha['data_emp'];
        $Data_devolução = $linha['data_dev'];
        $Id_cliente = $linha['id_cliente'];
       echo "<tr>
                <th>$Código_empréstimo</th>
                <th>$ISBN</th>
                <th>$Data_empréstimo</th>
                <th>$Data_devolução</th>
                <th>$Id_cliente</th>
            </tr>";
     }

     ?>
    </tbody>
  </table>
<br>
  <button ><a href="usuario2.html">Voltar</a></button>
</body>
</html>