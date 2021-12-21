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

 // costruisco una tabella utilizzando un semplice algoritmo
 $numOfRows = 3; $numOfCols = 4;
  if (($numOfRows>0)&&($numOfCols>0)){
	echo "<table class = dati>";
	echo " <tr>";
		for($cols =0; $cols < $numOfCols; $cols++) {
        $row =0;
		echo "<th> cella " . $row.$cols . "</th>";   
	    } 
      echo "</tr>";

	   for($row =1; $row < $numOfRows; $row++) {
		   for($cols =0; $cols < $numOfCols; $cols++) {
		     echo "<td> cella " . $row.$cols .  "</td>";   
		   } 
          echo "</tr>";
	   } 
	echo "</table><br>";
	}


?>
<!DOCTYPE html>
<html>
  <head>
    <title>Controllo accessi</title>
    <meta http-equiv="refresh" content="10">

    <link rel="stylesheet" type="text/css" href="stile_pagina.css"> 

  </head>
<body>
<br>
<center>

</center>



</body>
</html>