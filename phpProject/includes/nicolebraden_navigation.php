<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active" <?php if ($_SERVER['SCRIPT_NAME'] == "/nicolebraden_submit.php") ?>
                <a class="nav-link" href="../nicolebraden_submit.php">Home</a>
            </li>
            <li class="nav-item" <?php if ($_SERVER['SCRIPT_NAME'] == "/nicolebraden_table.php") ?>
                <a class="nav-link" href="nicolebraden_table.php">Submissions</a>
            </li>
        </ul>
    </div>
</nav>