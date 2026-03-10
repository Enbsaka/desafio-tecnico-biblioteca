<?php include '../config/conexao.php'; ?>

<!DOCTYPE html>
<html>

<head>

<meta charset="UTF-8">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<title>Livros</title>

</head>

<body>

<div class="container mt-4">

<h3>Livros cadastrados</h3>

<hr>

<table class="table table-bordered">

<tr>

<th>Título</th>
<th>Autor</th>
<th>Ano</th>
<th>Categoria</th>
<th>Ações</th>

</tr>

<?php

$sql = "
SELECT livro.codigo, livro.titulo, livro.autor, livro.ano_publicacao, categoria.nome
FROM livro
JOIN categoria ON livro.categoria = categoria.codigo
";

$result = $conn->query($sql);

while($row = $result->fetch_assoc()){

echo "<tr>

<td>{$row['titulo']}</td>
<td>{$row['autor']}</td>
<td>{$row['ano_publicacao']}</td>
<td>{$row['nome']}</td>

<td>

<a href='editar_livro.php?id={$row['codigo']}' class='btn btn-sm btn-warning'>Editar</a>

<a href='remover_livro.php?id={$row['codigo']}' class='btn btn-sm btn-danger'>Remover</a>

</td>

</tr>";

}

?>

</table>

<a href="../index.php" class="btn btn-primary">
Cadastrar novo livro
</a>

</div>

</body>
</html>