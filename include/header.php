<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.12.1/font/bootstrap-icons.min.css">
    <?php echo '<link rel="stylesheet" href="assets/css/style.css">' ?>
    <title>Minha despesa</title>
</head>

<body class="text-dark">
    <div class="container">
        <header>
            <nav class="navbar navbar-expand-lg bg-dark">
                <div class="container-fluid">
                    <?php if ($_SERVER['PHP_SELF'] == "/index.php") { ?>
                        <a class="navbar-brand text-light" href="cadastro.php">Cadastro</a>
                        <a href="limpar_registros.php" class="btn btn-primary">Limpar registros</a>
                    <?php } else { ?>
                        <a class="navbar-brand text-light" href="index.php">Inicio</a>
                    <?php }  ?>
                    <a href="carteira.php" class="btn btn-outline-light">Carteiras</a>
                </div>
            </nav>
        </header>