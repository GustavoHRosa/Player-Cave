<?php
    $url = "http://localhost/faculdade/Player%20Cave/api/games.php";

    $dadosApi = file_get_contents($url);
    $dadosBanner = json_decode($dadosApi);

    if (json_last_error() !== JSON_ERROR_NONE) {
        die("Erro ao decodificar JSON: " . json_last_error_msg());
    }

    $dadosJogos = $dadosBanner;
?>

<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <?php
    foreach ($dadosBanner as $index => $dados) {
        ?>
        <div class="carousel-item <?= $index == 0 ? 'active' : '' ?>">
            <a href="game/<?=$dados->id?>">
            <img src="<?=$dados->banner?>" class="d-block w-100" alt="<?=$dados->nome?>">
            </a>
        </div>
        <?php
    }
    ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container">
  <h1 class="text-center custom-text-color">
    <br>
    Explore os melhores Jogos 
    <br>
    <br>
  </h1>

  <div class="row">
    <?php
      foreach ($dadosJogos as $dadosr) {
        ?>
          <div class="col-12 col-md-4" data-aos="flip-right">
            <div class="card">
              <img src="<?=$dadosr->poster?>" alt="<?=$dadosr->nome?>" class="card-img-top">
              <div class="card-text text-center">
                <p><strong><?=$dadosr->nome?></strong></p>
                <p>
                  <a href="game/<?=$dadosr->id?>" title="Detalhes Jogo" class="btn btn-primary">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    Explorar
                  </a>
                </p>
              </div>
            </div>
          </div>
        <?php
      }
    ?>
  </div>
</div>
