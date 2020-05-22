<?php
require '../conexao/banco.php';

//tabela ajuda
$nome1 = mysqli_real_escape_string($conn, $_POST['nome']);
$nome = strtoupper($nome1);

$nome_emp1 = mysqli_real_escape_string($conn, $_POST['nome_emp']);
$nome_emp = strtoupper($nome_emp1);

$email_emp1 = mysqli_real_escape_string($conn, $_POST['email_emp']);
$email_emp = strtoupper($email_emp1);

$cidade1 = mysqli_real_escape_string($conn, $_POST['cidade']);
$cidade = strtoupper($cidade1);

$estado = mysqli_real_escape_string($conn, $_POST['estado']);

$descricao1 = mysqli_real_escape_string($conn, $_POST['descricao']);
$descricao = strtoupper($descricao1);


$adiciona_ajuda = "INSERT INTO ajuda (nome, nome_emp, email_emp, cidade_emp, estado_emp, descricao) VALUES ('$nome', '$nome_emp', '$email_emp', '$cidade', '$estado', '$descricao')";
$adiciona = mysqli_query($conn, $adiciona_ajuda)or die( mysqli_error($conn));


mysqli_close($conn);
echo "<script type=\"text/javascript\">alert('OBRIGADO POR SUA AJUDA'); window.location='../index.php';</script>";

?>