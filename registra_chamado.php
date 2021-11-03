<?php
/*
echo '<pre>';
print_r($_POST);
echo '</pre>';
*/
//montagem do texto
$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);

$texto = $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

//abre o arquivo
$arquivo = fopen('arquivo.hd', 'a');

//escreve o texto
fwrite($arquivo, $texto);

//fecha o arquivo
fclose($arquivo);
//echo $texto;

header('Location: abrir_chamado.php');