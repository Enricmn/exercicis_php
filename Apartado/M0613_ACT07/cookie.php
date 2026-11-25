<?php
// li dic al navegador que es guardi l'hora durant una hora (3600 segons)
// de moment fem servir camelCase, despres amb les bbdd anira amb guio baix

setcookie('ultimaVisita', date('H:i:s'), time() + 3600);

// si la cookie existeix mostro la hora, sino surt el missatge
// (la primera vegada no hi es perque la cookie arriba a la seguent peticio)
if (isset($_COOKIE['ultimaVisita'])) {
    echo 'Hi eres a les ' . $_COOKIE['ultimaVisita'];
} else {
    echo 'Encara no hi ha cap cookie.';
}
