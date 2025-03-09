<?php
// Front Controller: Maneja todas las solicitudes

// Corregir la ruta base si el proyecto está en una subcarpeta
$request = $_SERVER['REQUEST_URI'];
$request = str_replace('/front_controller', '', $request); // Elimina '/front_controller' de la ruta
$request = strtolower(trim($request, '/')); // Elimina barras iniciales/finales y convierte a minúsculas

// Enrutamiento simple
switch ($request) {
    case 'cantantes':
        include 'views/cantantes.php';
        break;
    case 'generos':
        include 'views/generos.php';
        break;
    case 'pais':
        include 'views/pais.php';
        break;
    case '':
    case 'home':
        include 'views/home.php';
        break;
    default:
        http_response_code(404);
        include 'views/404.php';
        break;
}
?>
