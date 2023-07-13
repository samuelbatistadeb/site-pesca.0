<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../css/manual/nav.css">
    <title>Cadastro das pescas</title>
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
  <form>
  <div class="mt-5 container">
    <div class="row -sm">
      <div class="cow -sm">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nome da espécie:</label>
          <input type="email" class="form-control" id="exampleInputEmail1" name="nome_especie">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label" >Comprimento:</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Cm" name="tamanho_pesca">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Peso:</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Kg" name="peso_pesca">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Local:</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="local_pesca">
        </div>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>