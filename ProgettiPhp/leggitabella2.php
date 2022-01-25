<?php
// mysqi extension -------------------------------------------------------------------------------------
$host="localhost";
$username="root";
$password="root";
$db_nome="utenze";
$tab_nome="utenti";
// connessione al server
$con=mysqli_connect($host, $username, $password, $db_name);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 // lettura dei dati dalla tabella
$sql = "SELECT * FROM $tab_nome";
$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_array($result))
{
echo $row['Cognome'] . " " . $row['Nome'] . " " . $row['Citta'];
echo "<br />";
}
?>
