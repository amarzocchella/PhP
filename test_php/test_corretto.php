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

function listaImpiegati($mese){echo "\$mese = $mese: Lista vuota"; }

# listaImpiegati("gennaio") //errore
listaImpiegati("gennaio"); // corretto

if ($x == $y) { echo "Sono uguali"; } // corretto

echo "<br>"; // va all'inizio di una nuova riga!

# commento
/* 
Spazi
In PHP è possibile andare a capo durante una stringa, nella lista di parametri di una funzione o di un array.
E' possibile inoltre andare a capo innumerevoli volte fra un'istruzione e l'altra senza per altro influenzare
l'esecuzione del codice.
<?php; // errore
?> // corretto
Di conseguenza, le linee di codice che seguono sono tutte valide :
*/

echo "<br>"; // va all'inizio di una nuova riga!

echo "Hello
World!";

echo "<br>"; // va all'inizio di una nuova riga!

function aggiungiImpiegato($arrayImpieg){echo "\$arrayImpieg[0] = $arrayImpieg[0]"; }

aggiungiImpiegato
(
"Mario" ,
"Rossi" ,
"Roma" ,
"01/04/1980"
);

echo "<br>"; // va all'inizio di una nuova riga!


$x = 5; // questo è un commento a riga singola
$y = 10; # anche questo è un commento a riga singola
echo "ciao"; /* commento multiriga su una riga singola */
/* Questo invece è un commento
esteso su due righe */


echo "<br>"; // va all'inizio di una nuova riga!


/*
Le variabili sono dei contenitori che vengono usati per memorizzare tutti i tipi di dato che PHP ci mette a
disposizione, e i tipi di dato che possiamo creare noi attraverso la programmazione ad oggetti che affronteremo
più avanti.
I nomi delle variabili devono obbligatoriamente cominciare con il carattere del dollaro $, e possono contenere
numeri e lettere sia maiuscole che minuscole, a patto che il primo carattere dopo il $ non sia un numero ma una
lettera o un underscore.
L'unico simbolo ammesso è proprio l' underscore (trattino basso _ ).
Di seguito riporto alcuni esempi :
*/

$variabile = 5; // corretto
# $3variabile = "cinque"; // errore : inizia con un numero (3)
$variabile3 = "cinque"; // corretto
$_variabile5_ = 9.8; // corretto
# $minnie&topolino = 0; // errore : simbolo non consentito

/* E' possibile memorizzare un valore in una variabile mediante l'operatore di assegnazione "=".
Se alla destra dell'operatore = c'è un'altra variabile invece di un valore costante, viene creata una copia del valore e inserita nella variabile a sinistra in questo modo : */

$y = 5; // non vengono create copie, viene direttamente assegnato il valore 5 a $y
$x = $y; // viene creata una copia di $y e viene inserita in $x

/* E' possibile specificare di non creare una copia, ma di assegnare il valore per riferimento, anteponendo al nome della variabile, a destra dell'operatore "=" di assegnazione, il simbolo della E commerciale (&).
Questo significa che se viene modificata la prima variabile, tutte le variabili assegnativi per riferimento
punteranno al nuovo valore.
*/
$x = 5;
echo $x; // stampa 5
$y = &$x;
echo $y; // stampa 5
$x = 8;
echo $y; // stampa 8

echo "<br>"; // va all'inizio di una nuova riga!


/*
Le variabili possono assumere una visibilità (scope) diversa a seconda di dove vengano dichiarate o se
vengono esplicitamente definite come Globali o Statiche.
Se dichiariamo una variabile all'interno di una funzione, ad esempio, essa non sarà visibile all'esterno di
questa.
Se invece dichiariamo una variabile come Globale allora sarà accessibile in tutto il codice, anche se
dichiarata in un file esterno, a patto che quest'ultimo ovviamente venga incluso.
*/

# Di seguito un esempio di visibilità con una funzione :
$x = 2;
function miaFunzione()
  {
    $x = 5;
    echo $x;
  } // stampa 5

miaFunzione(); // stampa 5

echo "<br>"; // va all'inizio di una nuova riga!

echo $x; // stampa il valore 2

/* Non dichiarando la $x prima di "miaFunzione()", l'ultima istruzione non avrebbe stampato niente, dal momento
che una variabile all'interno di "miaFunzione()", è visibile esclusivamente all'interno della funzione stessa.
*/

/* Variabili statiche e globali
Vediamo ora un esempio di variabile Globale e un altro di variabile Statica :
*/

/* Esempio di variabile globale */

$x = 100;
$y = $x + 5;
function miaFunzione_2()
{
	global $x;
	echo "x : $x - y : $y";
}
miaFunzione_2(); // stampa "x : 100 - y : " perchè non abbiamo specificato anche $y come globale

echo "<br>"; // va all'inizio di una nuova riga!


/* Esempio di variabile statica */

function funzione()
  {
	static $x = 0;
	$x++;
	echo "x : $x";
  }

funzione(); // stampa x : 1

echo "<br>"; // va all'inizio di una nuova riga!


funzione(); // stampa x :  2

/*
Nel primo esempio abbiamo visto un modo per accedere alle variabili che non ci sono visibli, perchè dichiarate
all'esterno. Un altro modo è attraverso l'array super globale $GLOBALS :
*/

echo "<br>"; // va all'inizio di una nuova riga!


$x = 5;

function miaFunzione_3() { //echo "x : " . $GLOBALS[x]; // php 8 da errore
	 } 

miaFunzione_3(); // stampa 5

echo "<br>"; // va all'inizio di una nuova riga!


/* Nell'esempio della variabile Statica, invece, abbiamo visto che dichiarando una variabile in tal modo, PHP non
la distrugge alla fine dell'esecuzione della funzione, ma rimane disponibile ad ogni chiamata della suddetta
funzione fino al termine dell'intero script. */

/* <b> Funzioni standard per le nostre variabili </b>
Per agire in modo sicuro sulle variabili, PHP ci mette a disposizione molte funzioni.
Illustrerò di seguito le 3 più importanti ed usate :
*/
# isset() - Restituisce TRUE se la variabile esiste o FALSE se non esiste.

echo isset($variabile); // stampa false
$variabile = 5;
echo isset($variabile); // stampa true

# unset() - Distrugge la variabile specificata senza tornare alcun valore.

echo "<br>"; // va all'inizio di una nuova riga!


$variabile = 5;
echo $variabile; // stampa 5
unset($variabile);
echo $variabile; // non stampa nulla

# empty() - Restituisce FALSE se la variabile non è vuota e diversa da zero.

echo empty($variabile); // stampa true
$variabile = 5;
echo empty($variabile); // stampa false

echo "<br>"; // va all'inizio di una nuova riga!


# Tipi di dato
/* PHP non è un linguaggio fortemente tipizzato come il C++, ma è molto più flessibile come ad esempio un
linguaggio di scripting, quali JavaScript, ActionScript ecc...
Questo significa che se noi assegniamo un valore intero ad una variabile, possiamo assegnargli subito dopo una
stringa, o ancora un valore booleano, senza incorrere in alcun errore.
*/

# Il linguaggio ci fornisce diversi Tipi di dato molto utili.
// Vediamo una lista di tutti i tipi di base per poi approfondirli singolarmente

/*
• Interi - es. 10 / 50000 / -200 / 06333 / 0xFF
• Virgola mobile - es. 1.5 / 50.72 / 0.7e-5 / -100.3 / 61.2A14
• Stringhe - es. "stringa" / "ciao" / 'pippo' / "54746"
• Booleani - es. true / false
• Null - es. NULL
• Costanti - es. define("COSTANTE", 150); / COSTANTE
• Array - es. $array[0] / $podio["primo"] / $tabella[5]["cognome"]
*/

/* Gli interi sono tutti i numeri non decimali come 1, 10, 3965, compresi fra -2,147,483,648 e 2,147,483,647.
I numeri a virgola mobile, invece, rappresentano i numeri decimali compresi fra 1.7E-308 e 1.7E+308, il che
significa che hanno una precisione di 15 cifre dopo la virgola.
*/
# Caratteri di escape
/*
Le stringhe sono insiemi di caratteri racchiusi fra apici o doppi apici.
Di conseguenza "minnie" e 'paperino313' sono da considerarsi stringhe.
Per far sì che le stringhe possano contenere, ad esempio, i caratteri speciali usati dalla sintassi del PHP, è
necessario utilizzare i Caratteri di escape.
*/
# Di seguito un esempio :
$x = 5;
echo "Questo è il valore di $x : $x";  // stampa : Questo è il valore di 5 : 5
echo "Questo è il valore di \$x : $x"; // stampa : Questo è il valore di $x : 5

echo "<br>"; // va all'inizio di una nuova riga!

/*
I caratteri di escape quindi, sono dei caratteri speciali preceduti da un Backslash \.
Di seguito una tabella di tutti i caratteri di escape che PHP ci fornisce :

Carattere di Escape Rappresentazione del carattere
\" Stampa i doppi apici "
\n Va a capo e manda indietro il cursore (newline)
\r Va a capo senza far tornare indietro il cursore (Carriage return)
\t Carattere di tabulazione (Tab)
\\ Stampa un Backslash \
\$ Stampa il simbolo del Dollaro $
\{ Stampa la parentesi graffa {
\} Stampa la parentesi graffa }
\[ Stampa la parentesi quadra [
\] Stampa la parentesi quadra ]
\0 Carattere ASCII che rappesenta i valori in base ottale (8)
\x0 Carattere ASCII che rappesenta i valori in base esadecimale (16)

*/

/* I valori Booleani possono assumere solo due valori : true (ossia 1) o false (ossia 0).
Vengono usati spesso nelle strutture di controllo come la IF o come valori di ritorno delle funzioni. */

  $approvato = false;
  if ($approvato)
	echo "Utente approvato!";
  else
	echo "Utente non approvato!";

//stamperà : Utente non approvato!

echo "<br>"; // va all'inizio di una nuova riga!


/* Le variabili inoltre, possono assumere il valore NULL. La parola chiave non è Case sensitive e potete quindi
  scriverla come volete.
  Il tipo di dato NULL serve a rappresentare una variabile vuota, senza valore. */

  $variabile = NULL;
  if (empty($variabile))
	echo "Variabile vuota";
  else
	echo "Variabile piena";
// stamperà : Variabile vuota



echo "<br>"; // va all'inizio di una nuova riga!

// Costanti
/* Le Costanti sono un tipo di variabile che è possibile definire una volta sola.
Una volta che assegnate un valore ad una costante, essa avrà questo valore per tutta la durata dello script, senza
la possibilità di modificarlo. Vediamo ora come è possibile definire una costante : */

define("PI_GRECO", 3.14);

$x = PI_GRECO; // corretto
//$x = pi_greco; // non corretto con php 8 mi blocca

/* I nomi delle costanti sono Case Sensitive di default, a meno che non venga esplicitamente impostato un terzo
parametro col valore false, in questo modo :

*/
  define("PI_GRECO", 3.14, false);
  $x = PI_GRECO; // corretto
//  $x = pi_greco; // anche questo ora è corretto non con php 8

echo "<br>"; // va all'inizio di una nuova riga!


# Gli Array
/* Gli Array sono dei contenitori di variabili.
Possono contenere ogni tipo di variabile e possono essere multidimensionali.
Ci sono vari modi di dichiarare un Array. Vediamoli assieme : 
*/

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


/* Il valore fra le parentesi quadre è detto Indice dell'array, e non è consentito avere due indici uguali nello stesso array.

L'indice serve appunto per accedere a un determinato valore dell'array, e nel caso in cui si parli di array
associativo, allora l'indice non sarà un numero intero ma bensì una stringa.
Anche qui vediamo i due modi per usare un array associativo :
*/
  $array1 = array("nome" => "John", "cognome" => "Doe");
  $array2["nome"] = "Mario";
  $array2["cognome"] = "Rossi";

echo $array1["nome"]; // stampa : John
echo $array2["cognome"]; // stampa : Rossi

echo "<br>"; // va all'inizio di una nuova riga!


/*
L'array associativo si usa quindi allo stesso modo di un array classico, con la differenza che l'indice, essendo una stringa, non sarà più chiamato Indice ma bensì Chiave dell'array, e per accedere ai suoi valori servirà quindi una determinata stringa.
La differenza sostanziale fra questi due tipi di array, sta nel metodo per scorrerli, dal momento che difficilmente quando useremo un array, sapremo a priori quanti valori conterrà e quali saranno esattamente gli indici o le chiavi.
Detto questo, vediamo alcune delle funzioni più importanti che PHP ci mette a disposizione per gestire gli array,
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