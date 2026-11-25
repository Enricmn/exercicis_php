<?php
// no hi ha funcio per borrar, la torno a posar amb una data pasada i el navegador la llensa
setcookie('ultimaVisita', '', time() - 3600);

echo 'Cookie esborrada. <a href="cookie.php">Torna al comptador</a>';
