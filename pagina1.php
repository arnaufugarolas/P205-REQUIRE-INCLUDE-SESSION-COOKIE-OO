<?php
require('usuari.php');

session_start();

$Title = 'Pagina 1';

require('header.php');
require('navbar.php');
require('footer.php');
echo "<div class='container max-width justify-content-center align-items-center text-center'><H1>".$Title."</H1></div>";
echo "</br>";
echo "<div class='container max-width justify-content-center align-items-center text-center'><H3>Usuari: ".htmlspecialchars(($_COOKIE['username'] ?? "no identificat"), ENT_QUOTES, 'UTF-8')."</H3></div>";
echo "</br>";

if (isset($_SESSION['username'])) {
    $_SESSION['username']->printPagines();
}