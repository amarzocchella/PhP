<?php
//esempio array semplice:

$salary[]=2000;
$salary[]=3000;
$salary[]=5000;

foreach($salary as $value){
  echo "Salary: $value<br>";
}

/* https://www.w3schools.com/php/php_arrays_associative.asp
esempio1 array associativo:
*/

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}

$persona["cognome"] = "Rossi";
$persona["nome"] = "Antonio";

foreach($persona as $x => $x_value){
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
 }

/* Per scorrere un array associativo in modo ordinato, 
essendo associativo non possiamo incrementare la chiave come l'indice che è un numero intero, 
ma dovremo servirci di alcune funzioni di
PHP.
 */

 $arr = array();
 $arr["nome"] = "John";
 $arr["cognome"] = "Doe";
 $arr["citta"] = "Sconosciuta";
 $arr["nascita"] = "01/01/1980";
 
// while (list($chiave, $valore) = each($arr)) // deprecato!!!
foreach($arr as $chiave => $valore)
     echo "$chiave : $valore<br>";
// oppure
     echo "Uso  print_r: <br>";
print_r($arr);

echo " <br>";

/* Abbiamo usato la funzione "list()" e la "each()" ottenendo questo risultato.
nome : John
cognome : Doe
citta : Sconosciuta
nascita : 01/01/1980

*/
echo "<br>"; // va all'inizio di una nuova riga!
/*
oppure nel caso di two-dimensional Arrays
(A two-dimensional array is an array of arrays (a three-dimensional array is an array of arrays of arrays).)
*/
$arr_arr = array ( 
array("cognome"=>"Rossi", "nome"=>"Antonio", "citta"=>"Bolzano", "nascita"=>"01/01/1980"),
array("cognome"=>"Bianchi", "nome"=>"Giacomo", "citta"=>"Bolzano", "nascita"=>"01/01/1985"),
array("cognome"=>"Verdi", "nome"=>"Giuseppe", "citta"=>"Bologna", "nascita"=>"01/01/1983")
);

     echo "Uso  print_r per stampare il contenuto dell'array arr_arr: <br>";
print_r($arr_arr);


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


/* come scrivere un semplice algoritmo che crea una tabella contenente i valori letti 
da un array associativo?
*/
// echo "Uso foreach <br>";

 // Il metodo funziona e non ho bisogno di conoscere i nomi degli attributi.
 // prendo i nomi degli attributi e la prima riga


  // Return the number of rows in array
  $numOfRows=count($arr);
  
  printf("arr has %d attributi.<br>",$numOfRows);
  // Attenzione: essendo arr un array associativo contenente un solo record count restituisce
  // il nuemro di elementi che in questo caso rappresentano gli attributi dell'oggetto.
 echo "Uso foreach <br>";

// prendo i nomi degli attributi e la prima riga
  if ($numOfRows>0){
	echo "<table class = dati>";
	echo " <tr>";
	$row=$arr;// $arr contiene un solo record
	foreach($row as $x => $x_value) {
		echo "<th>" . $x . "</th>";   
	} 
	echo "</tr>";
	echo " <tr>";
 		foreach($row as $x => $x_value) {
			echo "<td>" . $x_value . "</td>";   
		} 
	echo "</tr>";
 /*non serve perché arr contiene i datidi un solo oggetto!!!
  // prendo i valori degli attributi delle restanti righe.

  for ($i = 1; $i < $numOfRows; $i++){
		echo " <tr>";
        $row=$arr[$i];
		foreach($row as $x => $x_value) {
		echo "<td>" . $x_value . "</td>";   
		} 
		 echo "</tr>";
	}
    */
	echo "</table><br>";
	}


// Stampo array associativo multi righe in tabella multirighe 
 
 // Return the number of rows in array
  $numOfRows=count($arr_arr);
  
  printf("arr_arr has %d rows.<br>",$numOfRows);
  
 echo "Uso foreach <br>";
// prendo i nomi degli attributi e la prima riga
  if ($numOfRows>0){
	echo "<table class = dati>";
	echo " <tr>";
	$row=$arr_arr[0];
	foreach($row as $x => $x_value) {
		echo "<th>" . $x . "</th>";   
	} 
	echo "</tr>";
	echo " <tr>";
 		foreach($row as $x => $x_value) {
			echo "<td>" . $x_value . "</td>";   
		} 
	echo "</tr>";

  // prendo i valori degli attributi delle restanti righe.

  for ($i = 1; $i < $numOfRows; $i++){
		echo " <tr>";
        $row=$arr_arr[$i];
		foreach($row as $x => $x_value) {
		echo "<td>" . $x_value . "</td>";   
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

    <link rel="stylesheet" type="text/css" href="stile_tabella.css"> 

  </head>
<body>
<br>
<center>

</center>



</body>
</html>