<!doctype html>
<html>
<head>
<title>Scelta della citt&agrave;</title>
</head>
<body>
<form action="elencocitta.php" method="post">
<p>Scegli la citt&agrave; nell'elenco</p>
<select name="citta">
<?php
$host="localhost";
$username="root";
$password="root";
$db_nome="utenze";
$tab_nome="utenti";
mysql_connect($host, $username, $password) or die ('Impossibile connettersi al server: ' . mysql_error());
mysql_select_db($db_nome) or die ('Accesso al database non riuscito: ' . mysql_error());
$sql = "SELECT DISTINCT Citta FROM $tab_nome ORDER BY Citta";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
{
echo "<option value=\"".$row['Citta']."\">".$row['Citta']."</option> \n";
}
?>
</select>
<input type="submit" name="invio" value="Cerca" />
</form>
</body>
</html>
