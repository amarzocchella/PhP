<?php
$host="localhost";
$username="root";
$password="root";
$db_nome="utenze";
mysql_connect($host, $username, $password) or die ('Impossibile connettersi al server: ' . mysql_error());
mysql_select_db($db_nome) or die ('Accesso al database non riuscito: ' . mysql_error());
// Comando SQL
$sql = "UPDATE Bollette ";
$sql .= "SET Importo = Importo * 1.01 ";
$sql .= "WHERE Consumo > 70";
if (mysql_query($sql)) {
$righe = mysql_affected_rows();
echo "Numero bollette aggiornate = " . $righe;
}
else {
echo "Errore nell'inserimento: " . mysql_error();
}
?>
