<?php include "./../script/php/control.php"; ?>
<html>
  <head>
  <meta charset="utf-8" />
    <title>App Help Desk</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="shortcut icon" href="./../img/support.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

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

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            <div class="card-body">
              <?php

              include "./../script/php/control2.php";

                while($row = mysqli_fetch_assoc ($result)){
                  $id2 = $row['id'];
                  $select2 = "SELECT * FROM atividade16032023db.usuarios_help_desk WHERE id = '$id_user'";
                  $result2 = mysqli_query($conn,$select2);
                  $row2 = mysqli_fetch_assoc ($result2);
                  
                  echo"<div class='card mb-3 bg-light'>";
                      echo"<div class='card-body'>";
                        echo"<h5 class='card-title'>".$row['titulo']."</h5>";
                        echo"<h6 class='card-subtitle mb-2 text-muted'>".$row['categoria']."</h6>";
                        echo"<p class='card-text'>".$row['descricao']."</p>";
                        echo"<p class='card-text'> #".$id2."</p>";

                        echo"<div style='float:right;'>";
                          echo" "."<a href='visualizar_chamado.php?var1=true&id2=$id2'>";include'./../script/php/eye.php';echo"</a>   ";
                          // echo"<a href='./../script/php/pdf.php?var1=false' target='_blank'>";include'./../script/php/dowl.php';echo"</a>";
                        echo"</div>";
                        echo"<div>";
                          echo$row2['nome']. " - ".$row['datahora'];
                        echo"</div>";

                      echo"</div>";
                  echo"</div>";
                  $i++;
                }
              ?>
              <div class="row mt-5">
                <div class="col-6">
                <a class="btn btn-lg btn-warning btn-block" onclick="window.history.go(-1);">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>