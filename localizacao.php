<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Maycon Silva</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Estamos aqui</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="quemsomos.php">Quem somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contato.php">Contato</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="localizacao.php">Localização</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">|| Venha fazer parte da nossa comunidade</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid"></div>
<div class="p-3 mb-2 bg-primary text-white">
   <h2>Página de localização</h2>
</div>
</div>
   <div class="container">
      <div class="row">
      <h1>Onde é Possivel Nos Encontrar?</h1>
      <br><br>
      <button class="btn btn-primary btn-lg" onclick="redireciona()">>Clique Aqui e Sera Redirecionado Para a Minha Localização</button>
   </div>
</div>
   <script>
      function redireciona() {
         window.open("https://www.google.com/maps/place/marcio+som+augustinopolis/@-5.4626227,-47.8871588,17z/data=!3m1!4b1!4m5!3m4!1s0x92c510d686b67667:0x7becc2d7ab3e5456!8m2!3d-5.462628!4d-47.8849701")
      }
   </script>
</body>
</html>