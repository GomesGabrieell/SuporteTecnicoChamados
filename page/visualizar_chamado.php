<?php
    include "./../script/php/control.php";

    $id2 = $_GET['id2'];

    $select = "SELECT * FROM atividade16032023db.chamados_list WHERE id = $id2";
    $result = mysqli_query($conn,$select);
    $row = mysqli_fetch_assoc ($result);

    $titulo = $row['titulo'];
    $descricao = $row['descricao'];
    $categoria = $row['categoria'];
    $datahora = $row['datahora'];

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>App Help Desk</title>
  <!-- Inclua os arquivos de estilo do Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="shortcut icon" href="./../img/support.png" type="image/x-icon">
  <style>
    .card {
  width: 100%;
}
  </style>
</head>
<body>
  <!-- Cabeçalho da página -->
  <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="./../img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
      <a href="./../script/php/logof.php" style="padding-right:30px;">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
          <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
        </svg>
      </a>
    </nav>

  <!-- Conteúdo da página -->
  <main class="container mt-5">
    <div class="card">
      <div class="card-header">
        <h2 class="card-title"><?php echo $titulo; ?></h2>
        <h4 class="card-subtitle mb-2 text-muted"><?php echo $categoria; ?></h4>
      </div>
      <div class="card-body">
        <p class="card-text"><?php echo $descricao; ?></p>
        <p class="card-text"><?php echo $datahora; ?></p>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-6">
        <a class="btn btn-lg btn-warning btn-block" href="consultar_chamado.php">Voltar</a>
      </div>
      <div class="col-6">
        <a class="btn btn-lg btn-success btn-block" href="./../script/php/dowloadch.php?id2=<?php echo$id2;?>">Dowload</a>
      </div>
    </div>
  </main>
  
  <!-- Scripts da página -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>





