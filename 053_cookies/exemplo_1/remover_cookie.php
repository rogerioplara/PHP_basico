<?php

//remover cookie
$nome = 'meu_cookie';
setcookie($nome, '', time() - 1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Cookies</title>
</head>
<body>

    <?php require_once('nav.php')?>
    
    <h3>Remover cookie</h3>
    <hr>
    <p>Cookie eliminado com sucesso.</p>

</body>
</html>