<?php
session_start();

$_SESSION = [];        // buido les dades de la sesio
session_destroy();     // i la destrueixo al servidor (s'esborra el fitxer sess_)

echo 'Sessió tancada. <a href="sessio.php">Torna al comptador</a>';
