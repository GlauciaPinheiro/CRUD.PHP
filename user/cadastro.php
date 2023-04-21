<!-- <br> PARA PULAR LINHA -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="cadastro.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>GLAUCIA SOCORRO</title>
</head>

<body style="background-color: blueviolet;">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand"> Cadastro SOCORROOOOOOOOO </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <form class="d-flex">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="">Glaucia Do Socorro</a>
            </li>
          </ul>
        </div>
      </form>

    </div>
  </nav>
  <form action="control/CreateUser.php" method="post">
    <div class="cadastrar">

      <div class="mb-3">
        <input type="text" class="form-control" name="email" placeholder="Digite seu email" required>
      </div>

      <div class="mb-3">
        <input type="password" class="form-control" name="senha" placeholder="digite sua senha" required>
      </div>
      <div align="center"><button type="submit" class="btn btn-secondary" id="submit"> Realizar Cadastro </button></div>
      <br><br>
      
    </div>
  </form>
  <a href="../index.php"> Faça seu Login</a>

</body>

</html>