<?php
function parse_url_path($url)
{
    $url = parse_url($url);
    return $url['path'];
}

$path = parse_url_path($_SERVER['REQUEST_URI']);

$path = explode('/', $path);

if (empty($path[1])) {
    $controller = 'Accueil';
}else{
    $controller = ucfirst($path[1]);
}

if (empty($path[2])) {
    $action = 'index';
}else{
    $action =$path[2];
}

require_once('Controller/' . $controller . '_controller.php');

// on ajoute le paramètre à l'action
if (isset($path[3])) {
    // on appelle la fonction avec le parametre
    $action($path[3]);
}else{
    // on appelle la fonction
    $action();
}

?>