<?php

include '../config/conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM livro WHERE codigo = $id";

$conn->query($sql);

header("Location: lista_livros.php");

?>