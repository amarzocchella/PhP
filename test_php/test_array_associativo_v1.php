<?php

$ciccio = "cavoli miei <br />";
print_r($ciccio); // funzione predefinita per stampare


$persona["cognome"] = "Rossi";
$persona["nome"] = "Antonio";
print_r($persona);

echo "<br>"; // va all'inizio di una nuova riga!

// come usare echo correttamente? Facciamo un po' di test.
echo "persona[\"cognome\"] = ".$persona["cognome"]." <br />";

echo $persona["cognome"]." <br />";
echo "persona[0] =". $persona[0]."  <br />"."persona[1] =". $persona[1]."  <br />"."persona[2] =". $persona[2]."  <br />";  // con indice numerico non cattura niente!!!
echo $persona["nome"]." <br />";

echo "<br>"; // va all'inizio di una nuova riga!

/* Il valore fra le parentesi quadre è detto Indice dell'array, e non è consentito avere due indici uguali nello stesso array.

L'indice serve appunto per accedere a un determinato valore dell'array, e nel caso in cui si parli di array
associativo, allora l'indice non sarà un numero intero ma bensì una stringa.
Anche qui vediamo i due modi per usare un array associativo :
*/
  $array1 = array("nome" => "John", "cognome" => "Doe");
  $array2["nome"] = "Mario";
  $array2["cognome"] = "Rossi";

echo $array1["nome"]."  "; // stampa : John e due spazi
echo $array2["cognome"]."<br>"; // stampa : Rossi e va a capo

echo "<br>"; // va all'inizio di una nuova riga!


/*
L'array associativo si usa quindi allo stesso modo di un array classico, con la differenza che l'indice, 
essendo una stringa, non sarà più chiamato Indice ma bensì Chiave dell'array, 
e per accedere ai suoi valori servirà quindi una determinata stringa.
La differenza sostanziale fra questi due tipi di array, sta nel metodo per scorrerli, 
dal momento che difficilmente quando useremo un array, sapremo a priori quanti valori conterrà 
e quali saranno esattamente gli indici o le chiavi.
Detto questo, vediamo alcune delle funzioni più importanti che PHP ci mette a disposizione 
per gestire gli array,
e passiamole velocemente in rassegna :

 • count() - Conta i valori presenti in un array
 • array_push() - Aggiunge il valore specificato alla fine di un dato array
 • array_search() - Cerca il valore specificato in un dato array
 • list() - Assegna valori alle variabili specificate come se fossero un array
 • each() - Restituisce la corrente coppia chiave/valore e incrementa il puntatore dell'array
 • reset() - Reimposta il puntatore dell'array alla sua posizione iniziale

Vediamo ora un esempio di assegnazione e scorrimento di un array classico, 
mediante alcune delle funzioni sopra citate :
*/
$mioarr = array();
array_push($mioarr, "minnie");
array_push($mioarr, "topolino");
array_push($mioarr, "pluto");

echo "L'array contiene " . count($mioarr) . " valori!\n\n"; // stampa : L'array contiene 3 valori!
for ($i = 0; $i < count($mioarr); $i++)
echo "Il valore " . ($i + 1) . " è " . $mioarr[$i] . "!\n";
/* la FOR stamperà :
Il valore 1 è minnie!
Il valore 2 è topolino!
Il valore 3 è pluto!
*/

echo "<br>"; // va all'inizio di una nuova riga!


/* Al contrario, ora vedremo come scorrere un array associativo in modo ordinato. Essendo associativo non
possiamo incrementare la chiave come l'indice che è un numero intero, ma dovremo servirce di alcuni funzioni di
PHP.
 */

 $arr = array();
 $arr["nome"] = "John";
 $arr["cognome"] = "Doe";
 $arr["citta"] = "Sconosciuta";
 $arr["nascita"] = "01/01/1980";
// while (list($chiave, $valore) = each($arr)) // deprecato
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
La funzione list(), non è esattamente una funzione ma piuttosto un costrutto del linguaggio, che nel nostro
esempio, inizializza ed assegna le variabili $chiave e $valore passategli da each().
each() la prima volta che viene chiamata, punta al primo valore dell'array e lo estrae passandolo a list().
Ogni volta che la funzione viene chiamata, ritorna il nuovo valore e incrementa di nuovo il puntatore al
valore successivo, per prepararsi alla prossima chiamata. Quando l'array è finito, each() ritorna il valore
false e il ciclo while si interrompe.
Per far tornare il puntatore di each() al valore iniziale in qualsiasi momento, è sufficiente chiamare la
funzione reset().
*/

?>