<?php

session_start();

//Variável que verifica se a autenticação foi realizda
$usurio_autentitado = false;

//Usuários do sistema.
$usuarios_app = [
    ['email' => 'adm@teste.com.br', 'senha' => '123456'],
    ['email' => 'user@teste.com.br', 'senha' => 'abcd'],
];
/*
echo '<pre>';
print_r($usuarios_app);
echo '</pre>';
*/
foreach ($usuarios_app as $user){

    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
        $usurio_autentitado = true;
    }
}

if ($usurio_autentitado) {
    //echo 'Usuário autenticado';
    $_SESSION['autenticado'] = 'SIM';
    $_SESSION['x'] = 'um valor';
    $_SESSION['y'] = 'outro valor';
    header('Location: home.php');
} else {
  $_SESSION['autenticado'] = 'NAO';
    header('Location: index.php?login=erro');
}

/*
print_r($_POST);
echo '<br/>';
echo $_POST['email'];
echo '<br/>';
echo $_POST['senha'];
*/