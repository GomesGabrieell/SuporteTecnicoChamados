<?php
    include "./../../cnx/cnx.php";
    require_once 'dompdf/dompdf/autoload.inc.php';

    $var1 = $_GET['var1'];
    $id2 = $_GET['id2'];
    $caminho = '<img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">';

    $select3 = "SELECT * FROM atividade16032023db.chamados_list WHERE id = '$id2'";
    $result3 = mysqli_query($conn,$select3);
    $row3 = mysqli_fetch_assoc ($result3);
    $titulo = $row3['titulo'];
    $categoria = $row3['categoria'];
    $descricao = $row3['descricao'];
    $datahora = $row3['datahora'];
 



    use Dompdf\Dompdf;

    $dompdf = new Dompdf();

    $html ='
    <html>
        <head>
            <title>App Help Desk</title>
            <link rel="stylesheet" href="./css/index.css">
            <link rel="shortcut icon" href="./../img/support.png" type="image/x-icon">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
            <style>
                body{border:1px solid #000;}
                h1,h2{margin-left:20px;color:gray;}
                .date{margin-left:75%;}
                .list{margin-left:20px;}
            </style>
    </head>
    <body>
    <h1>App Help Desk - CHamado -  #'.$id2.'</h1>'.'<p class="date">'.$datahora.'</p>'.
    '<hr><h2>TITULO </h2><br>'.
    '<p class="list">'.$titulo.'</p>'.
    '<hr><h2>CATEGORIA </h2><br>'.
    '<p class="list">'.$categoria.'</p>'.
    '<hr><h2>DESCRIÇÃO </h2><br>'.
    '<p class="list">'.$descricao.'</p><br>'.
    '<hr><h2>OBSERVAÇÃO </h2>'.
    '</body><html>';

    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();
    if ($var1 == 'false') {
         $dompdf->stream('exemplo.pdf', array("Attachment" => true));
     }
     else{
         $dompdf->stream('exemplo.pdf', array("Attachment" => false));
     } 
?>