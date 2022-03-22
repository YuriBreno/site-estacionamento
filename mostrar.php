<?php

include 'conexao.php';

$buscar_cadastro = "SELECT * FROM tb_veiculos";
$query_cadastro = mysqli_query($conn, $buscar_cadastro);

?>

<!doctype html>
<html lang="pt-br>
  <head>
    <title>Dados do Cadastro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body class = "p-3 mb-2 bg-dark text-white" >
      <div class="container">
          <h1>Dados do Cadastro</h1>
      <table class="table p-3 mb-2 bg-primary text-white">
          <thead class="p-3 mb-2 bg-info text-dark">
              <tr>
                  <th>ID</th>
                  <th>Marca</th>
                  <th>Modelo</th>
                  <th>Placa</th>
                  <th>Nome</th>
                  <th>Hora</th>
                  <th></th>
              </tr>
          </thead>
          <tbody>
            <?php
                while($receber_cadastro = mysqli_fetch_array($query_cadastro)){
                    $id = $receber_cadastro['id'];
                    $marca = $receber_cadastro['marca'];
                    $modelo = $receber_cadastro['modelo'];
                    $placa = $receber_cadastro['placa'];
                    $nome = $receber_cadastro['nome'];
                    $hora = $receber_cadastro['hora'];
            ?>
              <tr>
                  <td scope="row"> <?php echo $id; ?></td>
                  <td> <?php echo $marca; ?> </td>
                  <td> <?php echo $modelo; ?></td>
                  <td> <?php echo $placa; ?></td>
                  <td> <?php echo $nome; ?></td>
                  <td> <?php echo $hora; ?></td>
                  <td></td>

              </tr>
              <?php }; ?> 
              
          </tbody>
      </table>
      </div>
      

  </body>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>
<!--table p-3 mb-2 bg-primary text-white
class = "p-3 mb-2 bg-dark text-white" -->