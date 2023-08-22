<?php

// Captura a URI solicitada e remove a barra inicial, se houver
$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

// Rotas
switch ($uri) {
    case '':
    case 'home':
        require 'app/views/home.php';
        break;
    case 'sobre':
        require 'app/views/sobre.php';
        break;
    case 'cursos':
        require 'app/views/cursos.php';
        break;
    case 'perfil':
        require 'app/views/perfil.php';
        break;
    case 'login':
        require 'app/views/login.php';
        break;
    case 'suporte':
        require 'app/views/suporte.php';
        break;
    default:
        header('HTTP/1.1 404 Not Found');
        echo "Página não encontrada!";
        break;
}