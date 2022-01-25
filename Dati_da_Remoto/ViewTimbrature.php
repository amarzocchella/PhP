<?php
include("function.php");
include "db_connect.php";


$op=$_GET['op'];


 function ViewDatiPosted() {
	global $op;
	echo "op=$op;  <BR> ";

}



function ViewTimbrature() {
global $mysqli,$dbhost, $dbuname, $dbpass,$dbname;

// La seguente query recupera le ultime 30 timbrature registrate e le visualizza in ordine cronologico
$query = "SELECT  t.id,t.CodBadge, t.dateentered
 FROM Timbrature t ORDER BY id DESC LIMIT 30";

#printf("$query: \n",$query);

if ($result=@mysqli_query($mysqli, $query))
  {
  // Return the number of rows in result set
  $numOfRows=mysqli_num_rows($result);
  printf("Result set has %d rows.\n",$numOfRows);


echo "<table bgcolor='#FFFFD0'> <tr><td>";
   echo " <table align='center'><Caption> <font face='arial' size='-2' color='blue'>
   Ecco le ultime $numOfRows timbrature pervenute!<br>
                 </font><br><hr></Caption> ";
       echo "  <tr valign='top'><th align='left'> Codice Badge</th><th> Data </th></tr>";
 echo "<tr><td colspan='2'><hr></td></tr>";
#  echo "\$numOfRows = $numOfRows";
	for ($i = 0; $i < $numOfRows; $i++){
		// Associative array
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

     	$dateentered = $row["dateentered"];
     	$CodBadge = $row["CodBadge"];

	echo " <tr><td> $CodBadge </td><td> $dateentered </td></tr>";
   	}
  echo " </table>";

echo "</td></tr></table>";


  // Free result set
  mysqli_free_result($result);
  }
mysqli_close($mysqli);

}


switch($op)
{
case "ViewTimbrature":
     ViewTimbrature();
     break;
default:
       ViewDatiPosted();

}
?>
<!DOCTYPE html>
<html>
<body>
<br>
<center>
<button onclick="goBack()">Go Back</button>
</center>

<script>
function goBack() {
  window.history.back();
}
</script>

</body>
</html>
