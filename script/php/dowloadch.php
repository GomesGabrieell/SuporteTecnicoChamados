<?php
  include "./../../cnx/cnx.php";

    $id2 = $_GET['id2'];

    $select = "SELECT * FROM atividade16032023db.chamados_list WHERE id = $id2";
    $result = mysqli_query($conn,$select);
    $row = mysqli_fetch_assoc ($result);

    $titulo = $row['titulo'];
    $descricao = $row['descricao'];
    $categoria = $row['categoria'];
    $datahora = $row['datahora'];


    // Nome do arquivo a ser gerado
$filename = "chamado_".$titulo.".txt";

// Cabeçalho HTTP para forçar o download do arquivo
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=\"$filename\"");

// Abre o arquivo em modo de escrita
$file = fopen($filename, "w") or die("Não foi possível criar o arquivo");

// Escreve as informações do chamado no arquivo
fwrite($file, "Título: " . $titulo . "\n");
fwrite($file, "Categoria: " . $categoria . "\n");
fwrite($file, "Descrição: " . $descricao . "\n");
fwrite($file, "Data/Hora: " . $datahora . "\n");

// Fecha o arquivo
fclose($file);

// Força o download do arquivo gerado
readfile($filename);

// Remove o arquivo gerado
unlink($filename);

?>