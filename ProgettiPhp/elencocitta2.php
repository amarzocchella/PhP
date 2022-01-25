<?php
$host="localhost";
$username="root";
$password="root";
$db_nome="utenze";
$tab_nome="utenti";
mysql_connect($host, $username, $password) or die('Impossibile connettersi al server: ' . mysql_error());
mysql_select_db($db_nome) or die ('Accesso al database non riuscito: ' . mysql_error());
?>
<!doctype html>
<html>
<head>
<title>Elenco utenti per citt&agrave;</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<p>Scegli la citt&agrave; nell'elenco</p>
<select name="citta">
<?php
// Comando SQL
$sql = "SELECT DISTINCT Citta FROM $tab_nome ORDER BY Citta";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
{
echo "<option value=\"" . $row['Citta'] . "\">" . $row['Citta'] . "</option> \n";
}
?>
</select>
<input type="submit" name="invio" value="Cerca" />
<input type="submit" name="aggiorna" value="Aggiorna" />
</form>
<?php
if(isset($_POST['aggiorna'])) {
header("Location: " . $_SERVER['PHP_SELF'] );
}
if(isset($_POST['invio'])) {
// Acquisisce il dato dal form HTML
$citta = $_POST["citta"];
echo "<h2>Elenco utenti: citt&agrave; = ". $citta . "</h2> \n";
// Comando SQL
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
} // Fine isset su invio
?>
</table>
</body>
</html>
