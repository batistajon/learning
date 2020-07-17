<?php

session_start();

//print_r($_SESSION);
//echo '<hr />';

$usuario_aut = false;

$usuarios_app = array(
    array('email' => 'adm@teste.com', 'senha' => '123456'),
    array('email' => 'user@teste.com', 'senha' => 'abcd'),
);

//echo '<pre>';
//echo print_r($usuarios_app);
//echo '</pre>';

foreach($usuarios_app as $user) {
    //echo 'Usuário app: ' . $user['email'] . ' / ' . $user['senha'] . '<br />';
    //echo 'Usuário Formulário: ' . $_POST['email'] . ' / ' . $_POST['senha'];
    //echo '<hr />';

    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
        $usuario_aut = true;
    }
}

    if($usuario_aut) {
        echo 'Usuário autenticado';
        $_SESSION['autenticado'] = 'SIM';
        header('Location: home.php');
    } else {
        header('Location: index.php?login=erro');
        $_SESSION['autenticado'] = 'NÃO';
    }



/*print_r($_POST);

echo '<br />';

echo $_POST['email']; 

echo '<br />';

echo $_POST['senha'];

?>*/