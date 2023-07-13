<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="../css/manual/nav.css">
</head>
<body>
  <div class="container-fluid p-5 color_nav text_color_nav text-center">
    <h1>Fisgou?</h1>
  </div>
  <div class="mt-5 container">
    <div class="row -sm">
      <div class="cow -sm">
        <?php
        $servidor = "db";
        $usuario = "root";
        $senha_db = "123";
        $nome_banco = "mydb";

        $conexao= mysqli_connect($servidor, $usuario, $senha_db, $nome_banco);

        $email_user = $_GET['email_user'];
        $senha_user = $_GET['senha_user'];
        $select="SELECT * FROM tb_user WHERE email_user ='$email_user' AND senha_user = '$senha_user'";
        $resultado_select= mysqli_query($conexao, $select);
        if (mysqli_num_rows($resultado_select) > 0) {
          echo "<a type='button' class='btn btn-cadastro btn-lg' href='./home.php'>Entrar</a>
          ";
        }
        else {
          echo ":( Usuário ou senha inválidos <br> <a type='button' class='btn btn-cadastro btn-lg' href='../html/form_login.html'>Tentar novamente.</a>";
        }
        ?>
      </div>
    </div>
  </div>
</body>
</html>

