<?php
  session_start();
  include "./../cnx/cnx.php";
  $id_user = $_SESSION['id_user'];

  if($_SESSION['logado'] == null || $_SESSION['logado'] == 'nao'){
    header('Location: ./../index.php?erro=erro2');
  }