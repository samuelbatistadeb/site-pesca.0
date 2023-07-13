<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../css/manual/nav.css">
    <title>Document</title>
</head>
<body>
  <nav class="navbar m-auto navbar-expand-lg color_nav ">
    <div class="container-fluid">
      <a class="navbar-brand" href="../php/home.php">
      <img class="logo" src="../imagens/f.png" alt="...">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../html/sobre.html">Sobre</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Menu
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="../html/minhas_pescas.html">Cadastrar pesca</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="./form_itens.php">Cadastrar item</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./principais_locais.php">Principais locais de pesca</a>
          </li>
        </ul>
        </div>
    </div>
  </nav>
  <div class="mt-5 container">
    <div class="row">
      <div class="cow -sm">
        <div id="carouselExampleIndicators" class="carousel slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-current="true" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <h1>Araguaia</h1>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="../imagens/araguaia/araguaia1.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../imagens/araguaia/araguaia2.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../imagens/araguaia/araguaia3.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <br><br>
        <div id="carouselExampleIndicators2" class="carousel slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <h1>Barra América</h1>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="../imagens/barramarica/barramarica1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../imagens/barramarica/barramarica2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../imagens/barramarica/barramarica3.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <br><br>
        <div id="carouselExampleIndicators3" class="carousel slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          </div>
          <h1>Litoral Paranaense</h1>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="../imagens/litoralparanaense/litoralparana1.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../imagens/litoralparanaense/litoralparana2.webp" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <br>
      </div>
    </div>
  </div>
  <script src="../css/bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>