<?php
require './config/fonction.php';
if(!is_connected()){login;
    header('Location: /index.php?page=login');
    exit();
}
?>

<h1>Ceci est mon dashboard</h1>
<h2>
    <?= 'bonjour' . $_SESSION['admin']; ?>
</h2>