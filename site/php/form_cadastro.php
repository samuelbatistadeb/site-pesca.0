<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../css/manual/nav.css">
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
      <div class="row -sm">
          <div class="cow -sm">
                <?php
                    require_once "conexao_bd.php";
            
                    $nome_user = $_GET['nome_user'];
                    $sobrenome_user = $_GET['sobrenome_user'];
                    $email_user = $_GET['email_user'];
                    $data_nascimento_user = $_GET['data_nascimento_user'];
                    $senha_user = $_GET['senha_user'];
            
                    $sql = "INSERT INTO tb_user (nome_user, sobrenome_user, email_user, data_nascimento_user, senha_user) VALUES ('$nome_user', '$sobrenome_user', '$email_user', '$data_nascimento_user', '$senha_user')";
            
                    if (mysqli_query($conexao, $sql)) {
                        echo "<h2>Você foi cadastrado com sucesso.</h2  ><br>";
                    }
                    else {
                        echo "Erro ao realizar o cadastro: ".mysqli_error($conexao);
                    }
                    
                ?>

                <a type="button" class="btn btn-cadastro btn-lg" href="./home.php">Home</a>
            </div>
        </div>
    </div>
    <script src="../css/bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>