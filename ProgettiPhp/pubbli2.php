<html>
<head>
<title>Esempio di If</title>
</head>
<body>
<?php
$numero = rand(0, 1);
if ($numero == 0)
{
?>
<a href="sponsor1.htm">
<img src="banner.gif" width="460" height="60"> </a>
<?php
}
else
{
?>
<a href="sponsor2.htm">
<h2>Messaggio promozionale ....</h2> </a>
<?php
}
?>
<hr />
Contenuto della pagina.
<hr />
</body>
</html>
