<?php
require('usuari.php');

session_start();

$Title = 'Login';

require('header.php');
require('navbar.php');
require('footer.php');
?>

<form method="get" action="index.php" name="login">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nom:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nom" name="username" required>
    </div>
    <button type="submit" class="btn btn-primary mb-3">Login</button>
</form>
