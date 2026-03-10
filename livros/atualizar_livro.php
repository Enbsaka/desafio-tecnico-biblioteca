<?php

include '../config/conexao.php';

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$ano = $_POST['ano'];

$sql = "UPDATE livro SET
titulo='$titulo',
autor='$autor',
ano_publicacao='$ano'
WHERE codigo=$id";

$conn->query($sql);

header("Location: lista_livros.php");

?>