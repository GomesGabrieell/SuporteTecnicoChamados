<?php
    include "./../../cnx/cnx.php";
    session_start();
    
    $id_user = $_SESSION['id_user'];
    $titulo = $_POST['titulo'];
    $categoria = $_POST['categoria'];
    $descricao = $_POST['descricao'];

    $sql = "INSERT INTO 
                chamados_list (
                titulo, 
                categoria, 
                descricao, 
                usercreate, 
                sstatus
                )
                VALUES
                (
                '$titulo',
                '$categoria',
                '$descricao',
                '$id_user',
                '1'
                )";
    $resul = mysqli_query($conn,$sql);

    header('Location: ./../../page/consultar_chamado.php');
    exit();
?>