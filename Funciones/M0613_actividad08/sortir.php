<?php
session_start(); // s'ha d'obrir la sessio per poder-la tancar
require_once 'config.php';

// Tancar sessio son 3 passos

// 1. Buidem les dades de $_SESSION
$_SESSION = [];

// 2. Esborrem la cookie del navegador (el que s'oblida tothom)
// esborrem la cookie PHPSESSID posant-li una data del passat
if (ini_get('session.use_cookies')) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params['path'], $params['domain'],
        $params['secure'], $params['httponly']);
}

// 3. Destruim la sessio al servidor (el fitxer de sessio)
session_destroy();

header('Location: ' . PAG_LOGIN);
exit;
