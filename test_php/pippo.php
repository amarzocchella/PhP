<?php
	echo "riga 2 ciao <br>"; // stampa "ciao"
	ECHO "riga 3 ciao <br>"; // stampa "ciao"
	ecHO "riga 4 ciao <br>"; // stampa "ciao"
    echo "<br>"; // va all'inizio di una nuova riga!
	$x = 5;
	$X = 10;
	echo $x; // stampa "5"
     echo "<br>";
     
     /* Ogni volta che aprite una parentesi, PHP richiede la rispettiva chiusura.
Cicli ed istruzioni di controllo con una singola istruzione all'interno, non richiedono l'uso di parentesi graffe per
delimitarne il frammento di codice, ma possono comunque essere messe.
Di seguito alcuni esempi :*/

	if ($x == $y)
		echo "Sono uguali";
	else
		echo "Sono diverse"; // corretto

/*
	if ($x == $y)
		echo "Sono ";
		echo "uguali";
	else
		echo "Sono diverse"; // errore : sono necessarie le parentesi graffe
	*/
 
 echo "<br>"; // va all'inizio di una nuova riga!

	if ($x == $y)
	    {
		echo "Sono ";
		echo "uguali";
	    }
	else
		echo "Sono diverse"; // corretto

/* Per semplici istruzioni, istruzioni di assegnazione e chiamate a funzioni, 
   PHP richiede un carattere di ; (punto e virgola) alla fine dell'istruzione, 
   mentre per le condizioni, i tag del PHP e la fine di blocchi di codice (IF, FOR ...), 
   il carattere di ; deve essere omesso. */

echo "<br>"; // va all'inizio di una nuova riga!

$mioArray = array(1, 22.5, "ciao");

$altroArray[0] = 1;

$altroArray[1] = 22.5;

$altroArray[2] = "ciao";

/* I 2 array dell'esempio, $mioArray e $altroArray sono equivalenti.
   In sostanza non c'è un limite specifico di quanti valori possa contenere un Array, in quanto dipende dalla
   memoria che la nostra applicazione ha a disposizione.
*/

/* PHP inizia a contare gli elementi da zero, di conseguenza per accedere al primo elemento di un Array, è
sufficiente specificare il nome dell'array preceduto dal dollaro $, e mettere il valore zero (0) fra parentesi quadre, in questo modo :
*/
echo $mioArray[0];
echo "<br>\$mioArray[0]= $mioArray[0]";
echo "<br>"; // va all'inizio di una nuova riga!


?>