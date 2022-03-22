<?php

$host = 'localhost';
$user = 'root';
$senha = '';
$bd_nome = 'bd_estacionamento';

//conectando o banco de dados
$conn = mysqli_connect($host, $user, $senha, $bd_nome);


//testando se esta conectado
//if($conn){
 //   echo 'Conectado!';
//}else{
//    echo 'Não conectado!';
//}


?>