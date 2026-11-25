<?php
/**
 * Configuració general del projecte.
 * Aquest fitxer NO escriu res a la pantalla.
 */

// Dades de la botiga
const BOTIGA_NOM    = 'fansdelinflu';
const BOTIGA_LEMA   = 'La millor tenda sobre fansdelinflu';
const BOTIGA_CORREU = 'fansdelinflu@jvildoms.cat';

// Regles de validació
const MIN_USUARI = 4;
const MIN_CLAU   = 6;

// Rutes
const FULL_ESTILS   = 'estils.css';
const PAG_FORMULARI = 'registre.php';
const FOTO_BOTIGA   = 'img/fansdelinflu.jpg';

// Login
const MAX_INTENTS  = 3;              // intents fallits abans de bloquejar
const PAG_LOGIN    = 'login.php';
const PAG_PRIVADA  = 'privat.php';

// Llista d'usuaris: cada usuari es un array amb 'nom' i 'hash' (NO la contrasenya!)
// es guarda el hash, mai la contrasenya tal com l'escriu l'usuari
// el hash sencer son 60 caracters, si en falta un no entra mai
const USUARIS = [
  // hash generat amb hash.php (password_hash), cada usuari amb una clau diferent
  'pau' => [
    'nom' => 'Pau',
    'hash' => '$2y$12$wVgbFdnJXzOp32q7C.Oi0.8OPgZAuGLmpLTXcekffofq7uUEMYCA.'
  ],
  'victor' => [
    'nom' => 'Víctor',
    'hash' => '$2y$12$.OWZb7BfMIWuRv2xbVqA7ernugTGbnJIC81O1c7hqEuAyXkZT3mxW'
  ],
];
