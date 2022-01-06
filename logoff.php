<?php

    session_start();
    /*
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

    //remover indices de um array da sessão 
    //unset()

    unset($_SESSION['y']);//remover apenas se existir 
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

    //destruir da variavel da sessão
    //session_destroy()

    destroy();//sera destruidar
    //pedir um redirecionamento

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
    */
    session_destroy();
    header('location: index.php');
?>