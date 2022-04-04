<?php

include 'conexao.php';

$nome = $_POST['nome']; 
$email = $_POST['email'];
$telefone = $_POST['telefone'];

$recebendo_cadastros = "INSERT INTO tb_cliente VALUES ('','$nome','$email','$telefone')";
$query_cadastros = mysqli_query($connection,$recebendo_cadastros);

header('location:listagem.php');

?>