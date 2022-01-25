<?php
$host="localhost";
$username="root";
$password="root";
$db_nome="utenze";
$tab_nome="utenti";
// connessione al server
mysql_connect($host, $username, $password) or die('Impossibile connettersi al server: ' . mysql_error());
// accesso al database
mysql_select_db($db_nome) or die ('Accesso al database non riuscito: ' . mysql_error());
// lettura dei dati dalla tabella
$sql = "SELECT * FROM $tab_nome";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
{
echo $row['Cognome'] . " " . $row['Nome'] . " " . $row['Citta'];
echo "<br />";
}
?>