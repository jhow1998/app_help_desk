<?php

session_start();

$usuario_autenticado = false;

$usuario_app = array(
    array('id'=>'1','email' => 'admjoseph@gmail.com', 'senha' =>'2786'),
    array('id'=>'2','email' => 'user@gmail.com' , 'senha' => '123456' ),
    array('id'=>'3','email' => 'jose@gmail.com' , 'senha' => '123456' ),
    array('id'=>'4','email' => 'maria@gmail.com' , 'senha' => '123456' ),
);

foreach($usuario_app as $user){
    if($user['email'] == $_POST['email'] and $user['senha'] == $_POST['senha']){
        $usuario_autenticado = true;
    }
}

if( $usuario_autenticado){
    echo ' usúario autenticado';
    $_SESSION['autenticado'] = 'sim';
    header('location:home.php');
}else{
    $_SESSION['autenticado'] = 'não';
    header('location:index.php?=erro1');
}


//metodo GET envia exposto na url 
/*
print_r($_GET);

    echo '<br>';

 echo $_GET['email'];
 echo '<br>';
 echo $_GET['senha'];
*/

//metodo post envia oculto ótima segurança

/*
print_r($_POST);

echo '<br>';

echo $_POST['email'];
echo '<br>';
echo $_POST['senha'];
*/

?>