<?php
$username = $_POST['username'];
$password = $_POST['password'];
$username = filter_var($username, FILTER_SANITIZE_STRING);
$password = filter_var($password, FILTER_SANITIZE_STRING);
if (!$username || !$password) {
    $error = 'Username e password sono obbligatori';
}
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1>Risultati Registrazione</h1>
    <?php if ($error): ?>
        <p style="color: red"><?php echo $error ?></p>
    <?php else: ?>
        <p>Benvenuto <?php echo $username ?></p>
         <p>Ecco la password ricevuta dal servere e da te immessa:  <?php echo $password ?></p>
    <?php endif ?>
</body>
</html>
