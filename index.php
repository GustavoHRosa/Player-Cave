<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player Cave</title>
    <meta name="description" content="Sua pagina de Games, Com lançamentos e jogos pagos e gratuitos">
    <meta name="keywords" content="games, jogos, lançamentos">

    <base href="https://playercave.000webhostapp.com/">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="shortcut icon" href="assets/Icone V1.png" type="Icone">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!--Buscar dados API Jogos-->
<?php
    $url = "https://playercave.000webhostapp.com/api/games.php";
    $dadosApi = file_get_contents($url);
    $dadosJogos = json_decode($dadosApi);

    if (json_last_error() !== JSON_ERROR_NONE) {
        die("Erro ao decodificar JSON: " . json_last_error_msg());
    }
?>

<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <!--Logo-->
        <a class="navbar-brand" href="index.php">
            <img src="assets/Logo - V1.png" alt="Logo Player Cave">
        </a>
        <!--Botão Hamburguer Mobile-->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation ">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!--Navegação-->
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="equipe">Equipe</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Jogos
                    </a>
                    <ul class="dropdown-menu">
                        <?php
                            foreach ($dadosJogos as $dados) {
                                echo "<li><a class='dropdown-item' href='game/{$dados->id}'> {$dados->nome}</a></li>";
                            }
                        ?>
                    </ul>
                </li>
            </ul>
            <!--Botões-->
            <div class="d-flex">
                <a href="contato" title="Contato" class="btn btn-info">
                    <i class="fas fa-envelope"></i>
                    Contato
                </a>
            </div>
        </div>
    </div>
</nav>

<main>
    <?php
        $pagina = "home";
        if (isset($_GET["pagina"])) {
            $pagina = $_GET["pagina"] ?? "home";
            $pagina = explode("/", $pagina);
            $codigo = $pagina[1] ?? NULL;
            $pagina = $pagina[0] ?? "home";
        }

        $pagina = "pagina/{$pagina}.php";
        if (file_exists($pagina)) {
            include $pagina;
        } else {
            include "pagina/erro.php";
        }
    ?>
</main>

<footer class="footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <img src="assets/Logo - V1.png" alt="Logo Player Cave" class="logo">
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="social-icons">
                        <a href="https://github.com/GustavoHRosa" target="_blank" title="GitHub">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="https://instagram.com" target="_blank" title="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>



<!--Scripts-->
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/fslightbox.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>
