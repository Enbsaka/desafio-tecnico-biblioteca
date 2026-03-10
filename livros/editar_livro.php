<?php

include '../config/conexao.php';

$id = $_GET['id'];

$sql = "SELECT * FROM livro WHERE codigo = $id";
$result = $conn->query($sql);
$livro = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html>

<head>

<meta charset="UTF-8">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<title>Editar livro</title>

</head>

<body>

<div class="container mt-4">

<h3>Editar livro</h3>

<hr>

<form action="atualizar_livro.php" method="POST">

<input type="hidden" name="id" value="<?php echo $livro['codigo']; ?>">

<div class="mb-3">

<label>Título</label>
<input type="text" name="titulo" value="<?php echo $livro['titulo']; ?>" class="form-control">

</div>

<div class="mb-3">

<label>Autor</label>
<input type="text" name="autor" value="<?php echo $livro['autor']; ?>" class="form-control">

</div>

<div class="mb-3">

<label>Ano</label>
<input type="number" name="ano" value="<?php echo $livro['ano_publicacao']; ?>" class="form-control">

</div>

<button class="btn btn-primary">
Atualizar
</button>

<a href="lista_livros.php" class="btn btn-secondary">
Voltar
</a>

</form>

</div>

</body>
</html>