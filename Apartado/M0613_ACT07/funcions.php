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
