<!doctype html>
<html>
<head>
<title>Ricerca prodotti per categoria</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
Inserisci la categoria : 
<input type="text" name="categoria" size="30" />
<br />
<input type="submit" name="invio" value="Invia" />
<input type="submit" name="aggiorna" value="Aggiorna" />
</form>
<?php 
if(isset($_POST['aggiorna'])) {
header("Location: " . $_SERVER['PHP_SELF'] );
}
if(isset($_POST['invio'])) { 
$categoria=$_POST["categoria"];
$xml = simplexml_load_file("Prodotti.xml");
echo "<hr />";
echo "Elenco prodotti per la categoria: <b> $categoria </b> <br />";
echo "<hr />";
$prod = $xml->xpath("/Inventario/Prodotto[IDCategoria='$categoria']");
foreach ($prod as $elemento) {
echo $elemento->NomeProdotto . "<br />";
echo "Fornitore: " . $elemento->IDFornitore . "<br />";
echo "Prezzo: &euro; " . $elemento->PrezzoUnitario . "<br />";
echo "<hr />";
}
}
?>
</body>
</html>
