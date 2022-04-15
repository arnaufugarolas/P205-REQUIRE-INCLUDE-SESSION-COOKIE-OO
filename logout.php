<?php
require('usuari.php');

session_start();

if (isset($_POST['logout'])) {
    session_destroy();
    setcookie('username', '', -1, '/', '', true, true);
    header("Refresh:0; url='index.php'");
}

$Title = 'Logout';

require('header.php');
require('navbar.php');
require('footer.php');
?>
    <br>
    <div class='container max-width justify-content-center align-items-center text-center'><H3><?php echo "Usuari: ".htmlspecialchars(($_COOKIE['username'] ?? "no identificat"), ENT_QUOTES, 'UTF-8')?></H3></div>
    <br>
    <form method="post" action="logout.php" name="logout" class="align-items-center text-center">
        <input type="hidden" name="logout">
        <?php if (isset($_COOKIE["username"])) {echo '<button type="submit" class="btn btn-primary mb-3">Logout</button>';} ?>
    </form>
<?php
if (isset($_SESSION['username'])) {
    $_SESSION['username']->printPagines();
}