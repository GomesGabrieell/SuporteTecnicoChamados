<?php
    
    include "./../../cnx/cnx.php";
    
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM  atividade16032023db.usuarios_help_desk WHERE email = '$email' and senha = '$senha'";
    $resul = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($resul);

    // print_r($row);

    $usuario_autenticado = false;

    $usuarios_app = array(
        array('email' => $row[email], 'senha' => $row[senha])
    );

    
    foreach($usuarios_app as $user){
        if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
            $usuario_autenticado = true;        
        }
    }

    session_start();
    if ($usuario_autenticado) {
        header('Location: ./../../page/home.php');
        $_SESSION['logado']='sim';
        $_SESSION['id_user']= $row['id'];
    }else{
        header('Location: ./../../index.php?erro=login');
        $_SESSION['logado']='nao';
    }
    exit();
?>