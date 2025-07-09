<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.12.1/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
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
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalSeguranca">Limpar registros</a>
                    <?php } else { ?>
                        <a class="navbar-brand text-light" href="index.php">Inicio</a>
                    <?php }  ?>
                    <a href="carteira.php" class="btn btn-outline-light">Carteiras</a>
                </div>
            </nav>
        </header>