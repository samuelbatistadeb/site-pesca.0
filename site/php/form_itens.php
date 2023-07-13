<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
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
    <form action='../php/form_itens.php'> 
        <div class="mt-5 container">
            <div class="row">
                <div class="cow -sm">
            </div>
        <?php
            $servidor = "db";
            $usuario = "root";
            $senha_db = "123";
            $nome_banco = "mydb";
            $conexao = mysqli_connect($servidor, $usuario, $senha_db, $nome_banco);
            $sql= "SELECT * FROM tb_item";
            $resultados = mysqli_query($conexao, $sql);
            if (mysqli_num_rows($resultados) > 0) {
                echo "Tipo do item <br>";
                echo "<select class='form-  select'>";
                while ($linha = mysqli_fetch_array($resultados)) {
                echo "<option value='1'>  $linha[tipo_item]  </option> <br><br>";}
                echo "</select><br><br>";
                echo "<form>";
                echo "<div class='mb-3'>";
                echo "  <label class='form-label'>Peso</label>";
                echo "  <input type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' placeholder='Kg'>";
                echo "</div> <br>";
                echo "<div class='mb-3'>";
                echo "  <label class='form-label'>Comprimento</label>";
                echo "  <input type='text' class='form-control' id='exampleInputPassword1' placeholder='Cm'>";
                echo "</div> <br><br>";
                echo "  <button type='submit' class='btn btn-primary' action='./action_item.php'>Cadastrar</button>";
                echo "</form>";
            } 
            else {
                echo "Sem dados.";
            }
        ?>
          </div>
      </div>
  </div>
  <script src="../css/bootstrap/js/bootstrap.bundle.js"></script>
    </body>
<html lang='en'>