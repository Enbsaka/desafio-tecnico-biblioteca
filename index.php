<?php include 'config/conexao.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Livros</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container mt-4">

        <h3>Cadastro de Livros</h3>
        <hr>

        <form action="livros/insere_livro.php" method="POST">

            <div class="row mb-3">

                <div class="col-md-6">
                    <label class="form-label">Título</label>
                    <input type="text" name="titulo" class="form-control" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Autor</label>
                    <input type="text" name="autor" class="form-control" required>
                </div>

            </div>

            <div class="row mb-3">

                <div class="col-md-4">
                    <label class="form-label">Ano</label>
                    <input type="number" name="ano" class="form-control" required>
                </div>

                <div class="col-md-8">

                    <label class="form-label">Categoria</label>

                    <select name="categoria" class="form-select">

                        <?php

                        $sql = "SELECT * FROM categoria";
                        $result = $conn->query($sql);

                        while ($row = $result->fetch_assoc()) {
                            echo "<option value='{$row['codigo']}'>{$row['nome']}</option>";
                        }

                        ?>

                    </select>

                </div>

            </div>

            <button class="btn btn-primary">
                Salvar
            </button>

            <a href="livros/lista_livros.php" class="btn btn-secondary">
                Ver livros
            </a>

        </form>

    </div>

</body>

</html>