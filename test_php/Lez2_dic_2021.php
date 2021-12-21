<?php
$nome = "Giovanni";
$saluto = "Buongiorno $nome"; // contiene: Buongiorno Giovanni
echo "$saluto <br />";
$saluto = 'Buongiorno $nome'; // contiene: Buongiorno $nome
echo "$saluto <br />";

// lezione del 6-dicembre: esercizio: verificare la slide: punto (.) come operatore di concatenazione:
$Commento = "<b>lezione del 6-dicembre: <br /> esercizio:</b>
verificare la slide: punto (.) come operatore di concatenazione:<br />";
$saluto = "Buongiorno " . $nome; // contiene: Buongiorno Giovanni

// Verifico visualizzando il commento ed il risultato

echo "$Commento$saluto <br />";

?>