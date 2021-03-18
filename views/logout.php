<?php 
require './config/fonction.php';

is_connected();

//1 je logout la session

unset($_SESSION['admin']);

//2 je redirige vers home  

header('Location: /index.php?page=home');