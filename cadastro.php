<?php

include 'conexao.php';


//Recebendo dados do formulario
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$placa = $_POST['placa'];
$nome = $_POST['nome'];
$hora = $_POST['hora'];

//inserindo os dados na tabela
$recebendo_dados_cadastro = "INSERT INTO tb_veiculos VALUES ('', '$marca', '$modelo', '$placa', '$nome', '$hora')";

$query_cadastro = mysqli_query($conn, $recebendo_dados_cadastro);

header('Location: mostrar.php');









?>