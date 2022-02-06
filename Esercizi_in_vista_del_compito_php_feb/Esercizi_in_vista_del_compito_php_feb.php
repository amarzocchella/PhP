<?php
/* http://localhost/SitoTest/compito_php_feb/compito_php_feb.php
  Dato il seguemte listato di codice in php, svolgere il seguente 
  compito: aggiungere un commento di fianco al codice in cui spieghi 
  cosa fa l'istruizione o   il segmento di codice.
 esempio: 
  echo "riga 2 ciao <br>"; // stampa "riga 2 ciao e va a capo"  
 * */
	echo "riga 9 ciao <br>"; 
	ECHO "riga 10 ciao <br>"; 
	ecHO "riga 11 ciao <br>"; 
    echo "<br>"; 
	$x = 5;
	$X = 10;
	echo $x; 
    echo "<br>";

	$y = 6;
	if ($x == $y)
		echo "Sono uguali <br>";
	else
		echo "Sono diverse <br>"; 

 echo "RIGA 24 <br>"; 

	if ($x == $y)
	    {
		echo "Sono ";
		echo "uguali";		echo "<br>";
 
	    }
	else
		echo "Sono diverse <br>"; 

echo "<br>"; // va all'inizio di una nuova riga!

function listaImpiegati($mese){echo "\$mese = $mese: Lista vuota"; }


listaImpiegati("gennaio"); 

if ($x == $y) { echo "riga 42: Sono uguali"; } 

echo "<br>"; 

# $cavoli ='ciao'; echo "\$cavoli =$cavoli; <br>";
/* 
$cavoli ='ciao 2'; echo "\$cavoli =$cavoli; <br>";
*/
// $cavoli ='ciao 3'; echo "\$cavoli =$cavoli; <br>";


echo "Hello
World!";
echo "<br>"; 

function aggiungiImpiegato($arrayImpieg){echo "\$arrayImpieg[0] = $arrayImpieg[0]"; }

aggiungiImpiegato
(
"Mario" ,
"Rossi" ,
"Roma" ,
"01/04/1980"
);

echo "<br>"; 

$x = 5; // $x = 10;
$y = 10; # $y = 5;
echo "ciao, \$x = $x;   \$y = $y; <br> "; 

$variabile = 5; 
$variabile3 = "cinque"; 
$_variabile5_ = 9.8; 

echo "riga 77: \$variabile = $variabile; \$variabile3= $variabile3; \$_variabile5_=$_variabile5_;<br> ";
$y = 5; 
$x = $y; 
$x = 5;
echo $x; echo "<br>"; 
$y = &$x;
echo $y; echo "<br>"; 
$x = 8;
echo $y; echo "<br>"; 

echo "riga 87: \$y = $y; <br>"; 


$x = 2;
function miaFunzione()
  {
    $x = 5;
    echo "riga 94: \$x = $x; <br>"; 
  } 

miaFunzione(); 

echo "<br>"; 

echo "riga 101: \$x = $x; <br>"; 

$x = 100;
$y = $x + 5;
function miaFunzione_2()
{
	global $x;
	echo "riga 108: x : $x - y : $y";
	
}
miaFunzione_2(); 

echo "<br>"; 


function funzione()
  {
	static $x = 0;
	$x++;
	echo "riga 120: x : $x";
  }

funzione(); // stampa?

echo "<br>"; 


funzione(); // stampa?

echo "<br>"; 


$x = 5;

echo isset($variabile); // stampa?
echo "<br>"; 
$variabile = 5;
echo isset($variabile); // stampa?

echo "<br>"; 

$variabile = 5;
echo $variabile; // stampa?
unset($variabile);
echo $variabile; //stampa?

echo empty($variabile); // stampa?
$variabile = 5;
echo empty($variabile); // stampa?

echo "<br>"; 


$x = 5;
echo "riga 155: Questo è il valore di $x : $x <br>";  // stampa?
echo "riga 156: Questo è il valore di \$x : $x <br>"; // stampa?

echo "<br>"; // va all'inizio di una nuova riga!

  $approvato = false;
  if ($approvato)
	echo "Utente approvato!";
  else
	echo "Utente non approvato!";

//il codice da riga 157 a 161 stamperà?

echo "<br>"; // va all'inizio di una nuova riga!

  $variabile = NULL;
  if (empty($variabile))
	echo "riga 172 Variabile vuota <br>";
  else
	echo "riga 174 Variabile piena <br>";

//il codice da riga 167 a 171 stamperà?



echo "<br>"; // va all'inizio di una nuova riga!

define("PI_GRECO", 3.14);

$x = PI_GRECO; 



echo "riga 188: \$x = $x  <br>"; // stampa?



$mioArray = array(1, 22.5, "ciao");

$altroArray[0] = 1;

$altroArray[1] = 22.5;

$altroArray[2] = "ciao";

echo $mioArray[0];
echo "<br>riga 201: \$mioArray[0]= $mioArray[0]";
echo "<br>"; 

  $array1 = array("nome" => "John", "cognome" => "Doe");
  $array2["nome"] = "Mario";
  $array2["cognome"] = "Rossi";

echo "riga 208: ";
echo $array1["nome"]; // stampa?
echo $array2["cognome"]; // stampa?

echo "<br>"; // va all'inizio di una nuova riga!


$mioarr = array();
array_push($mioarr, "minnie");
array_push($mioarr, "topolino");
array_push($mioarr, "pluto");

echo "riga 220:";
echo "L'array contiene " . count($mioarr) . " valori!\n\n"; // stampa?

echo "riga 223:";
for ($i = 0; $i < count($mioarr); $i++)
echo "Il valore " . ($i + 1) . " è " . $mioarr[$i] . "!\n";
/* la FOR stamperà?




*/

echo "<br>"; // va all'inizio di una nuova riga!

echo "riga 235:";

 $arr = array();
 $arr["nome"] = "John";
 $arr["cognome"] = "Doe";
 $arr["citta"] = "Sconosciuta";
 $arr["nascita"] = "01/01/1980";
// while (list($chiave, $valore) = each($arr)) // deprecato
foreach($arr as $chiave => $valore)
     echo "$chiave : $valore<br>";
//cosa stampa il foreach?

echo "riga 247:";
print_r($arr);
//cosa stampa print_r?
echo " <br>";

// Indica che cosa viene scritto in output dall'esecuzione di questo segmento di programma.
 $arr_arr = array ( 
  array("cognome"=>"Rossi", "nome"=>"Antonio", "citta"=>"Bolzano", "nascita"=>"01/01/1980"),
  array("cognome"=>"Bianchi", "nome"=>"Giacomo", "citta"=>"Bolzano", "nascita"=>"01/01/1985"),
  array("cognome"=>"Verdi", "nome"=>"Giuseppe", "citta"=>"Bologna", "nascita"=>"01/01/1983")
 );

     echo "Uso  print_r per stampare il contenuto dell'array arr_arr: <br>";
	print_r($arr_arr);

// Indica che cosa viene scritto in output dall'esecuzione di questo segmento di programma.*/
	$a =2;
	while ($a<=9) {
		echo  "$a; ";
		$a++;
	}
	echo  "<br>";
// Qual è l'output prodotto dall'esecuzione del segmento di codice?
	$a =5; $b=3;
	if ($a>$b) $c= $a- $b;
	 else $c= $b- $a;
		echo  "$c; <br>";
	
// Dato il segmento di programma

	$a =3;
	do { $a *=2; 
		echo  "$a; ";
		$a++;
	}  while  ($a<=30);
	echo  "<br>";

//Che cosa viene scritto in output?

// Indica l'output prodotto dall'esecuzione di questo segmento di programma.
	$a =0;
	do { $a++; 
		echo  "$a; ";
	}  while  ($a<=0);
	echo  "<br>";

// Indica l'output prodotto dall'esecuzione di questo segmento di programma.

	$a =2;
	while ($a>0) { $a--;
		echo  "$a; ";
	}
	echo  "<br>";
// Dato il seguente frammento di programma:
	
	if ($a>5) 
	      if ($a>7)  $a = 6;
	    else $a = 0;
	echo  "$a; <br>";

//Che cosa viene scritto in output se a vale 2 e se a vale 9?

// Indica che cosa viene scritto in output dall'esecuzione di questo segmento di programma.

	$a =1;
	while ($a<= 10)  $a++;
	echo  "$a; <br>";


// Indica che cosa viene scritto in output dall'esecuzione di questo segmento di programma.

	
	for ($a =3; $a<= 5;  $a++) {
		echo  "$a; ";
	}
	echo  "<br>";

//9 Indica che cosa viene scritto in output dall'esecuzione di questo segmento di programma.
	$a =5; $b=3;
	for ($a =3; $a<= 5;  $a++) { $c= $a- $b;
		echo  "$c; ";
	}
	echo  "<br>";

// Indica che cosa viene scritto in output dall'esecuzione di questo segmento di programma.
	$a =5; $b=3;
	for ( $a =3; $a<= 5;  $a++) { $c= $a- $b;
		printf ("%d %s\n", $a, "; ");
	}
	echo  "<br>";

 //13 Indica che cosa viene scritto in output dall'esecuzione di questo segmento di programma.

 $arr_arr = array ( 
  array("cognome"=>"Rossi", "nome"=>"Antonio", "citta"=>"Bolzano", "nascita"=>"01/01/1980","Importo"=>50000),
  array("cognome"=>"Bianchi", "nome"=>"Giacomo", "citta"=>"Bolzano", "nascita"=>"01/01/1985","Importo"=>45000),
  array("cognome"=>"Verdi", "nome"=>"Giuseppe", "citta"=>"Bologna", "nascita"=>"01/01/1983","Importo"=>25000)
 );
 
 
  // Return the number of rows in array
  $numOfRows=count($arr_arr);
	$totale =0; $n=0;
	printf ("N......cognome.......nome...citta.....nascita.....Importo  <br>");
  for ($i = 0; $i < $numOfRows; $i++){
        $row=$arr_arr[$i];
        $cognome = $row["cognome"];
     	$nome = $row["nome"];
     	$citta = $row["citta"];
     	$nascita = $row["nascita"];
     	$Importo = $row["Importo"];
     	if ($citta =="Bologna"){
			$n++;
			$totale +=$Importo;
			printf ("%d %15s %15s %15s %10s %8.2f  <br>",$n, $cognome, $nome, $citta, $nascita, $Importo ); 
		} 
	}
	
//	echo "............Totale.....................$totale<br>";
	printf ("............Totale..................... %8.2f <br>", $totale);

?>
