<?php

include '../config/conexao.php';

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$ano = $_POST['ano'];
$categoria = $_POST['categoria'];

$sql = "INSERT INTO livro (titulo, autor, ano_publicacao, categoria)
VALUES ('$titulo','$autor','$ano','$categoria')";

$conn->query($sql);

header("Location: lista_livros.php");

?>