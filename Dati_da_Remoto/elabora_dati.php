<?php

include("function.php");
include "db_connect.php";
# Comando da terminale: uso curl -Si tratta di un tool per trasferire dati da e verso un server web, 
# basilarmente mediante i protocolli HTTP(S) e FTP.

#curl "https://itebzinformatica.altervista.org/0_AAA_Test_Query_sqli/Dati_da_Remoto/elabora_dati.php?op=InsertDati&CodBadge=5293A854E"
/*
Connessioni HTTP in Java
* Tramite le librerie incluse nel package java.net è possibile gestire sia protocolli a livello di trasporto come TCP e UDP 
* oppure ricorrere direttamente ad alcuni oggetti che si occupano di gestire connessioni di protocolli applicativi come 
* l'HTTP (Hypertext Transfer Protocol). Con poche semplici operazioni è possibile accedere ad una risorsa web 
* e gestire direttamente tutte le caratteristiche del protocollo HTTP.
* 
*/
# Comando dal browser:
# https://itebzinformatica.altervista.org/0_AAA_Test_Query_sqli/Dati_da_Remoto/elabora_dati.php?op=InsertDati&CodBadge=5293A854E 
# spunti per lavorare con HttpURLConnection  http://www.simplesoft.it/connessioni-http-in-java.html
$op=$_GET['op'];

$username='';#$_GET['username'];
$password='';#$_GET['password'];

$nome=#$_GET['nome'];
$cognome=#$_GET['cognome'];
$Date='';#$_GET['Date'];
$CodBadge=$_GET['CodBadge'];

/*
  Vedi lezione Filtri in parte conclusiva doc sui cookies
La riga successiva utilizza la funzione filter_var() vista nella lezione precedente 
per sanitizzare il dato ricevuto. Ricordiamoci che è fondamentale validare tutti i dati 
che vengono immessi dagli utenti per ridurre al minimo i problemi di sicurezza.

*/

$CodBadge = filter_var($CodBadge, FILTER_SANITIZE_STRING);


 function ViewDatiPosted() {
global $op,$username, $password,$nome, $cognome, $dataOra, $CodBadge;
   echo "op=$op;  <BR> ";
  # echo "username=$username;  <BR> ";
 #  echo "password=$password;  <BR> ";
 #  echo "nome=$nome;  <BR> ";
#   echo "cognome=$cognome;  <BR> ";
   echo "Date=$Date;  <BR> ";
   echo "CodBadge=$CodBadge;  <BR> ";

}


#Timbrature

#ViewTimbrature
function InsertDati() {
global $mysqli,$dbhost, $dbuname, $dbpass,$dbname,$op,$username, $password,$nome, $cognome, $dataOra, 
         $CodBadge;

     $query = "INSERT INTO Timbrature (id,CodBadge,dateentered) VALUES(NULL, '$CodBadge', now())";
 #     echo "\$query=$query;  <BR> ";
	if (!$result=mysqli_query($mysqli, $query)) {
		echo "\$result=$result;  <BR> ";
		echo mysqli_errno($mysqli).": ".mysqli_error($mysqli)."<BR>";
		}

mysqli_close($mysqli);

}


switch($op)
{
case "InsertDati":
         InsertDati();
    break;
default:
#case "niente":
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


