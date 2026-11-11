<?php
require_once 'config.php';

$titolPagina = 'Crea el teu compte';

require 'header.php';
?>

    <h2>Crea el teu compte</h2>

    <form action="processa.php" method="post">

      <fieldset>
        <legend>Dades personals</legend>
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom">

        <label for="cognoms">Cognoms</label>
        <input type="text" id="cognoms" name="cognoms">

        <label for="naixement">Data de naixement</label>
        <input type="date" id="naixement" name="naixement">

        <label for="telefon">Telefon</label>
        <input type="tel" id="telefon" name="telefon">
      </fieldset>

      <fieldset>
        <legend>Dades del compte</legend>
        <label for="correu">Correu</label>
        <input type="email" id="correu" name="correu">

        <label for="usuari">Nom d'usuari (minim <?= MIN_USUARI ?> lletres)</label>
        <input type="text" id="usuari" name="usuari">

        <label for="clau">Contrasenya (minim <?= MIN_CLAU ?> caracters)</label>
        <input type="password" id="clau" name="clau">

        <label for="clau2">Repeteix la contrasenya</label>
        <input type="password" id="clau2" name="clau2">
      </fieldset>

      <fieldset>
        <legend>Adreça</legend>
        <label for="carrer">Carrer i numero</label>
        <input type="text" id="carrer" name="carrer">

        <label for="poblacio">Poblacio</label>
        <input type="text" id="poblacio" name="poblacio">

        <label for="cp">Codi postal</label>
        <input type="text" id="cp" name="cp">
      </fieldset>

      <fieldset>
        <legend>Preferencies</legend>
        <label for="tipus">Tipus de client</label>
        <select id="tipus" name="tipus">
          <option value="">-- Tria --</option>
          <option value="particular">Particular</option>
          <option value="empresa">Empresa</option>
        </select>

        <p>Com ens has conegut?</p>
        <label><input type="radio" name="origen" value="xarxes"> Xarxes socials</label>
        <label><input type="radio" name="origen" value="amics"> Un amic o amiga</label>

        <label><input type="checkbox" name="butlleti" value="si"> Vull rebre ofertes</label>
        <label><input type="checkbox" name="condicions" value="si"> Accepto les condicions</label>
      </fieldset>

      <button type="submit">Crear el compte</button>
    </form>

<?php
require 'footer.php';
