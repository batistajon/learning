<?php

session_start();

print_r($_SESSION);
echo '<hr />';

$usuario_aut = false;
$usuario_id = null;
$user_perf_id = null;

$perfis = array(1 => 'Administrativo', 2 => 'Usuário');

$usuarios_app = array(
    array('id' => '1', 'email' => 'adm@teste.com', 'senha' => '1234', 'perfil_id' => '1'),
    array('id' => '2', 'email' => 'user@teste.com', 'senha' => '1234', 'perfil_id' => '1'),
    array('id' => '3', 'email' => 'jose@teste.com', 'senha' => '1234', 'perfil_id' => '2'),
    array('id' => '4', 'email' => 'maria@teste.com', 'senha' => '1234', 'perfil_id' => '2'),
);

//echo '<pre>';
//echo print_r($usuarios_app);
//echo '</pre>';

foreach($usuarios_app as $user) {
 
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
        $usuario_aut = true;
        $usuario_id = $user['id'];
        $user_perf_id = $user['perfil_id'];
    }
}

    if($usuario_aut) {
        echo 'Usuário autenticado';
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $user_perf_id;
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