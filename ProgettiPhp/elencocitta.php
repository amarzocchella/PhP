<!doctype html>
<html>
<head>
<title>Elenco utenti per citt&agrave;</title>
</head>
<body>
<?php
// Valore fornito dall'utente
$citta = $_POST["citta"];
echo "<h2>Elenco utenti: citt&agrave; = ". $citta . "</h2> \n";
$host="localhost";
$username="root";
$password="root";
$db_nome="utenze";
$tab_nome="utenti";
mysql_connect($host, $username, $password) or die('Impossibile connettersi al server: ' . mysql_error());
mysql_select_db($db_nome) or die ('Accesso al database non riuscito: ' . mysql_error());
// Selezione delle righe
$sql = "SELECT * FROM $tab_nome WHERE Citta LIKE '%$citta%'";
$result = mysql_query($sql);
?>
<!-- intestazione della tabella -->
<table border="1">
<tr>
<th>Codice</th>
<th>Cognome</th>
<th>Nome</th>
<th>Indirizzo</th>
</tr>
<?php
while($row = mysql_fetch_array($result))
{
// Operazioni sulla riga 
echo "<tr> \n";
echo "<td>" . $row["Codice"] . "</td> \n";
echo "<td>" . $row["Cognome"] . "</td> \n";
echo "<td>" . $row["Nome"] . "</td> \n";
echo "<td>" . $row["Indirizzo"] . "</td> \n";
echo "</tr> \n";
} // Fine while
?>
</table>
</body>
</html>