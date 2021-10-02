<?php
// falta los require_once

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}


$params = explode('/', $action);

// determina que camino seguir según la acción
switch (){
    case 'home': 
        showHome(); 
        break;
    default: 
        echo('404 Page not found'); 
        break;
}


?>
