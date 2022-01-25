<!doctype html>
<html>
<head>
<title>Prodotti: ricerca per codice</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
Inserisci il codice del prodotto: 
<input type="text" name="codice" size="30" />
<br />
<input type="submit" name="invio" value="Invia" />
<input type="reset" name="cancella" value="Annulla" />
</form>
<?php 
if(isset($_POST['invio'])) { 
$codice = $_POST["codice"];
$xml = simplexml_load_file("Prodotti.xml");
echo "<hr />";
echo "Prodotto codice: $codice <br />";
echo "<hr />";
$prod = $xml->xpath("/Inventario/Prodotto[IDProdotto='$codice']");
echo $prod[0]->NomeProdotto . "<br />";
echo "&euro; " . $prod[0]->PrezzoUnitario;
}
?>
</body>
</html>
