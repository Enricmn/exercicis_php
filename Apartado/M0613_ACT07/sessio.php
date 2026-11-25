<?php
// el session_start sempre a la primera linea!!
session_start();

// si no existeix val 0 i li sumo 1
$_SESSION['visites'] = ($_SESSION['visites'] ?? 0) + 1;

echo 'Visites: ' . $_SESSION['visites'] . '<br>';
echo 'ID de sessio: ' . session_id() . '<br>';
echo 'Carpeta de sessions: ' . session_save_path();
