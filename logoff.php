<?php
session_start();
/*
echo '<pre>';
print_r($_SESSION);
echo '</pre>';

//remover índices do array de sessão
//unset() - espera como parâmetro o array e o índice que deve ser eliminado.
//Essa função não é exclusiva da global $_SESSION, funciona para qualquer array.

unset($_SESSION['x']); //remove o índice apenas se ele existir

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

//destruir a variável de sessão
//session_destroy() - Ela remove todos os índices dentro da global $_SESSION.

session_destroy();
//forçar um redirecionamento

echo '<pre>';
print_r($_SESSION);
echo '</pre>';
*/

session_destroy();
header('Location: index.php');