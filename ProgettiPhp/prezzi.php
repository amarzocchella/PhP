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
