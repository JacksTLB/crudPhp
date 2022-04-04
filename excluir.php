<?php

include 'conexao.php';

$id = $_POST['id']; 


$recebendo_cadastros = "DELETE FROM tb_cliente WHERE id = '$id'";

$query_cadastros = mysqli_query($connection,$recebendo_cadastros);

header('location:listagem.php');

?>