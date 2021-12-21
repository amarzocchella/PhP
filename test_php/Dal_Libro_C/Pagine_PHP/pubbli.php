<!doctype html>
<html>
<head>
<title>Esempio di If</title>
</head>
<body>
<?php
$numero = rand(0, 1);
if ($numero == 0)
{
echo '<a href="sponsor1.htm">';
echo '<img src="banner.gif" width="460" height="60"> </a>';
}
else
{
echo '<a href="sponsor2.htm">';
echo '<h2>Messaggio promozionale ....</h2> </a>';
}
?>
<hr />
Contenuto della pagina.
<hr />
</body>
</html>
