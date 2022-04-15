<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link <?php if (!empty($Title) && $Title === 'Index') {echo 'active';} ?>" href="index.php">Index</a>
            <a class="nav-item nav-link <?php if (!empty($Title) && $Title === 'Login') {echo 'active';} ?>" href="login.php">
                <?php
                if (isset($_COOKIE["username"])) {
                    echo htmlspecialchars(($_COOKIE['username'] ?? "no identificat"), ENT_QUOTES, 'UTF-8');
                }
                else {
                    echo 'Usuari no identificat';
                }
                ?>
            </a>
            <a class="nav-item nav-link <?php if (!empty($Title) && $Title === 'Pagina 1') {echo 'active';} ?>" href="pagina1.php">Pagina 1</a>
            <a class="nav-item nav-link <?php if (!empty($Title) && $Title === 'Pagina 2') {echo 'active';} ?>" href="pagina2.php">Pagina 2</a>
            <a class="nav-item nav-link <?php if (!empty($Title) && $Title === 'Logout') {echo 'active';} ?>" href="logout.php">Logout</a>

        </div>
    </div>
</nav>
