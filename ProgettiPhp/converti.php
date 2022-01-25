<!doctype html>
<html>
<head><title>Conversione km-miglia</title></head>
<body>
<h3>kilometri <?php echo $_POST["km"]; ?></h3>
corrispondono a
<h3>
miglia
<?php
// il valore dei km e' ricevuto
// come parametro dalla pagina HTML
// 1 miglio = 1,609344 kilometri
$miglia = $_POST["km"] /1.6093;
echo ($miglia);
?>
</h3>
</body>
</html>