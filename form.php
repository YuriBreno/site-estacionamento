<!doctype html>
<html lang="pt-br">
  <head>
    <title>Formulario de Cadastro</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  
  <body class= "p-3 mb-2 bg-dark text-white">
  
<form action="cadastro.php" method="post">
<div class = "container" >
<div class="mb-3">
  <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Nome</label>
  <div class="col-sm-10">
    <input type="text" class="form-control form-control-lg" id="nome" name = "nome" placeholder="Digite seu nome">
  </div>
</div>
<div class="mb-3">
  <label for="colFormLabelLg" class="col-sm-2 col-form-label-lg">Marca</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name = "marca" placeholder="Digite a marca do carro">
  </div>
</div>
<div class="mb-3">
  <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Modelo</label>
  <div class="col-sm-10">
    <input type="text" class="form-control form-control-lg" name = "modelo" placeholder="Digite o modelo do carro">
  </div>

  <div class="mb-3">
  <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Placa</label>
  <div class="col-sm-10">
    <input type="text" class="form-control form-control-lg"  name = "placa" placeholder="Digite a placa do carro">
  </div>

  <div class="mb-3">
  <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Hora</label>
  <div class="col-sm-10">
    <input type="time" class="form-control form-control-lg"  name = "hora" placeholder="">
  </div>
  
  <br><input class="btn btn-primary" type="submit" value="Cadastrar">


</div>
</div>
</form>

  </body>
</html>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>