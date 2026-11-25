<?php
/**
 * Funcions propies del projecte.
 * Aquest fitxer NO escriu res a la pantalla.
 */

/**
 * Recull un camp de text del formulari ja net d'espais.
 *
 * @param string $camp    Nom del camp (l'atribut name del formulari)
 * @param string $defecte Valor si el camp no ha arribat
 * @return string         El valor net
 */
function camp(string $camp, string $defecte = ''): string
{
    return trim($_POST[$camp] ?? $defecte);
}

/**
 * Converteix la clau de l'array en una etiqueta llegible.
 *
 * @param string $clau Clau de l'array ('cp', 'naixement'...)
 * @return string      Etiqueta per mostrar a la taula
 */
function etiqueta(string $clau): string
{
    $noms = [
        'nom'        => 'Nom',
        'cognoms'    => 'Cognoms',
        'naixement'  => 'Data de naixement',
        'telefon'    => 'Telefon',
        'correu'     => 'Correu',
        'usuari'     => "Nom d'usuari",
        'carrer'     => 'Carrer i numero',
        'poblacio'   => 'Poblacio',
        'cp'         => 'Codi postal',
        'tipus'      => 'Tipus de client',
        'origen'     => 'Com ens has conegut',
        'butlleti'   => 'Vol rebre ofertes',
        'condicions' => 'Accepta les condicions',
    ];

    // si la clau no hi es torno el nom amb majuscula i no peta
    return $noms[$clau] ?? ucfirst($clau);
}

/**
 * Comprova un usuari i una contrasenya contra la llista d'usuaris.
 *
 * @param string $usuari Nom d'usuari escrit al formulari
 * @param string $clau   Contrasenya escrita al formulari
 * @return array|null    Dades de l'usuari, o null si no són correctes
 */
function comprovaCredencials(string $usuari, string $clau): ?array
{
    // el ? de ?array vol dir que pot tornar un array o null
    // sense el ? el return null donaria error fatal

    // si l'usuari no existeix a la llista fora
    if (!isset(USUARIS[$usuari])) {
        return null;
    }

    // password_verify compara la clau amb el hash, MAI comparar amb ===
    // password_verify sap treure el tros aleatori (salt) del hash
    if (!password_verify($clau, USUARIS[$usuari]['hash'])) {
        return null;
    }

    return USUARIS[$usuari];
}

/**
 * El "porter": si no hi ha sessio envia al login i para la pagina.
 * Es fa servir a totes les pagines privades (ampliacio).
 *
 * @return void
 */
function nomesAmbSessio(): void
{
    if (!isset($_SESSION['usuari'])) {
        // em guardo on volia anar per tornar-lo alla despres del login
        // basename() per guardar nomes el nom del fitxer i no rutes rares
        $_SESSION['tornar_a'] = basename($_SERVER['PHP_SELF']);

        header('Location: ' . PAG_LOGIN);
        exit; // sense exit la pagina s'envia igual!! header() no para res
    }
}

/**
 * Torna un salut segons l'hora del dia (ampliacio).
 *
 * @param int|null $hora Hora (0-23). Si no se li passa agafa l'hora actual
 * @return string        Bon dia, bona tarda o bona nit
 */
function salutSegonsHora(?int $hora = null): string
{
    // si no em passen hora agafo la del servidor
    $hora = $hora ?? (int) date('G');

    if ($hora >= 6 && $hora < 14) {
        return 'Bon dia';
    } elseif ($hora >= 14 && $hora < 21) {
        return 'Bona tarda';
    }

    return 'Bona nit';
}
