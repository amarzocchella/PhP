<!--Calcolare la media dei prezzi contenuti in un array.
I valori dei prezzi sono contenuti nell’array $prezzi, avente tante componenti, quanti sono i
prezzi da esaminare.
Per calcolare la media, lo script effettua la somma dei prezzi e poi divide per il numero dei
prezzi, uguale al numero delle componenti dell’array. Questo numero viene fornito dalla
funzione count avente come argomento il nome dell’array.
Pagina PHP (prezzi.php
-->

<!doctype html>
<html>
<head>
<title>Media dei prezzi</title>
</head>
<body>
<?php
/*
* calcolo della media dei prezzi
*/
$prezzi = array(125.50, 62.00, 38.51, 97.24 );
$limite = count($prezzi);
$i = 0;
$somma = 0;
while ($i < $limite)
{
$somma += $prezzi[$i];
$i++;
}
$media = $somma / $limite;
echo "<h2>Media dei prezzi: " . $media . "</h2>";
?>
</body>
</html>
