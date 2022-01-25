<!doctype html>
<html>
<head><title>Categorie dei prodotti del magazzino</title></head>
<body>
<?php
// accede al file XML
$xml = simplexml_load_file("Categorie.xml");
echo "<h2>" . $xml->getName() . "</h2>";
echo "<hr />";
foreach($xml->children() as $cat)
{
echo "<p>";
foreach($cat->children() as $dato)
{
echo "<i>" . $dato->getName() . "</i>: " .$dato . "<br />";
}
echo "</p>";
}
?>
</body>
</html>
