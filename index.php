<?php
require('usuari.php');

session_start();

$Title = 'Index';

if (isset($_GET['username']) && !preg_match('/[^a-zA-Z]/', $_GET["username"])) {
    setcookie('username', $_GET['username'], 0, '/', '', true, true);
    $_SESSION['username'] = new usuari($_GET['username']);
    session_write_close();
    header("Refresh:0; url='index.php'");
}

require('header.php');
require('footer.php');
require('navbar.php');

echo "<div class='container max-width justify-content-center align-items-center text-center'><H1>Hola! ".htmlspecialchars(($_COOKIE['username'] ?? 'Usuari no identificat'), ENT_QUOTES, 'UTF-8')."</H1></div>";