<?php
  session_start();
  include "./../../cnx/cnx.php";
  $id_user = $_SESSION['id_user'];

  $select3 = "SELECT * FROM atividade16032023db.usuarios_help_desk WHERE id = '$id_user'";
  $result3 = mysqli_query($conn,$select3);
  $row3 = mysqli_fetch_assoc ($result3);
  $dt = $row3['logacoesuser'];

  if($dt == '1'){
    $select = "SELECT * FROM atividade16032023db.chamados_list WHERE sstatus = '1' ORDER BY id DESC";
  }else{
    $select = "SELECT * FROM atividade16032023db.chamados_list WHERE sstatus = '1' AND usercreate = '$id_user' ORDER BY id DESC";
  }

  $select;
  $result = mysqli_query($conn,$select);